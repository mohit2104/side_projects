#include <stdio.h>
//# include <conio.h>
#define MAXN 150
#define MAX_VALUE 10000
#define NO_PARENT (unsigned)(-1)
const unsigned S = 1;
const unsigned N = 22;
 FILE *fi,*fp,*fs,*fd;
unsigned Matrix[MAXN][MAXN] ;
 
char Tops[MAXN];
unsigned d[MAXN];
int pred[MAXN];

void Dijkstra(unsigned s)
{
	unsigned i;
	for(i = 0; i < N; i++)
	{
		if(Matrix[s][i] == 0)
		{
			d[i] = MAX_VALUE;
			pred[i] = NO_PARENT;
		}
		else
		{
			d[i] = Matrix[s][i];
			pred[i] = s;
		}
	}
	for(i = 0; i < N; i++)Tops[i] = 1;
	Tops[s] = 0;
	while(true)
	{
		unsigned j = NO_PARENT;
		unsigned di = MAX_VALUE;
 
		for(i = 0; i < N; i++)
		{
			if(Tops[i] && d[i] < di)
			{
				di = d[i];
				j = i;
			}
		}
 
		if(NO_PARENT == j)break;
		Tops[j] = 0;
		for(i = 0; i < N; i++)
		{
			if(Matrix[j][i] != 0 && Tops[i])
			{
				if(d[i] > d[j] + Matrix[j][i])
				{
					d[i] = d[j] + Matrix[j][i];
					pred[i] = j;
				}
			}
		}
	}
}
 
void printPath(unsigned s, unsigned j,int x)
{
	if(pred[j] != s)printPath(s, pred[j],x+1);
	if(x==0)
	fprintf(fp,"%u",j);
	else
	fprintf(fp,"%u,",j);
}
 
/*void printResult(unsigned s)
{
	unsigned i;
	for(i = 0; i < N; i++)
	{
		if(i != s)
		{
			if(d[i] == MAX_VALUE)
			{
				printf("NO PATH FROM TOP %u TO TOP %u\n", s + 1, i + 1);
			}
			else
			{
				printf("MINIMAL PATH FROM TOP %u TO TOP %u: %u", s + 1, i + 1, s + 1);
				printPath(s, i);
				printf(", PATH LEINTH: %u\n", d[i]);
			}
		}
	}
}
 */
int main()
{
     
fp=fopen("output.txt","w");
fi=fopen("input_graph.txt","r");
fs=fopen("source.txt","r");
fd=fopen("destination.txt","r");
    unsigned i,j,s,d;
    for(i=0;i<N;i++)
 {
                 for(j=0;j<N;j++)
                 fscanf(fi,"%u",&Matrix[i][j]);
                 }
                 fscanf(fs,"%u",&s);
                 fscanf(fd,"%u",&d);
	Dijkstra(s);
	fprintf(fp,"%u,",s);
	printPath(s,d,0);
		fclose(fp);
fclose(fi);
fclose(fs);
fclose(fd);
//getch();
	return 0;
	
}
