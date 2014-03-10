<?php
//$a=array("codenov1.exe","codenov2.exe","reagain.exe","codenov4.exe","codenov5.exe");
//$xe;
if(isset($_GET["source"]) && isset($_GET["destination"]))
{
$source=$_GET["source"];
$destination=$_GET["destination"];
$file=fopen("source.txt","w");
fwrite($file,$source);
fclose($file);
$file=fopen("destination.txt","w");
fwrite($file,$destination);
fclose($file);
//$saferinput = escapeshellarg($input);
 $xe=shell_exec("shortest.exe");
 }
 $file1 = file_get_contents('output.txt', true);
 $file=fopen("output.txt","w");
fwrite($file,"14,17,14,15,5,15,16,17,18,19,21,12,13,18,13,14,13,9,8,9,20,9,11,12,11,10,8,7,14,7,6,5,20,5,4,0,1,6,1,2,7,2,3,8,3");
fclose($file);
 //echo $file1;
?>
<br><div style='font-family:cursive;font-size:50px;'>NITT MAP</div><br>
<form action='' method="get">
<input type='text' placeholder="Source point" name='source'></input>
<input type='text' placeholder="Destination point" name='destination'></input><br>
<input type='submit' value='Search'></input>
</form>
<head>
<title>NITT MAP</title>
<canvas id='canvas' width=950 height=660 style='position:absolute;right:10%;top:0%;'></canvas>
<script>
var b=[<?php echo $file1; ?>];
var c=1/1.3; var c1=c*8/7;
var x=["garnet","mess B","Ceesat f","chem eng","Diamond","Aavin","Agate","ceesat r","Admin H","EEE","NITT GATE","INTESECTION","SAC","Civil","Vasntan","Coral","SC","CSE","IIM","OPAL","OCTA","LIBRARY"];
//var x=["goe","dhdid"];
var a=[[0,700],[200,680],[500,720],[700,700],[0,380],[200,400],[200,500],[500,550],[700,530],[700,400],[900,500],[900,400],[900,300],[700,300],[500,300],[200,300],[200,0],[500,0],[700,10],[950,0],[500,400],[900,100]];
var context=document.getElementById('canvas').getContext('2d');
context.lineJoin  = 'round';
      context.lineCap  = 'round';
	  context.lineWidth=5;
	  context.fillStyle = "rgba(40,100,200,0.6)";
  context.font = "bold 12px Cursive";
context.fillText(x[b[0]], a[b[0]][0]*c+12,a[b[0]][1]*c1+3);	  	
	for(i=1;i<b.length;i++)
context.fillText(x[b[i]]+"("+b[i]+")", a[b[i]][0]*c+15,a[b[i]][1]*c1+22);
  
 context.beginPath();
	  context.moveTo(a[b[0]][0]*c+10,a[b[0]][1]*c1+10);
    	  for(i=1;i<b.length;i++)
	  {
	  var y=Math.abs(a[b[i]][0]-a[b[i-1]][0])+Math.abs(a[b[i]][1]-a[b[i-1]][1]);
	//alert(name[0]);
	var r=Math.floor(Math.random()*230);
	var r1=Math.floor(Math.random()*230);
	var r2=Math.floor(Math.random()*230);
	context.strokeStyle = 'rgba('+r+','+r1+','+r2+',0.7)';
      context.lineTo(a[b[i]][0]*c+10,a[b[i]][1]*c1+10);
	  context.fillText(y+" m", (a[b[i]][0]+a[b[i-1]][0])*c/2+15,(a[b[i]][1]+a[b[i-1]][1])*c1/2+25);
	  
	  var radius = 10;

     
      context.arc(a[b[i]][0]*c+10, a[b[i]][1]*c1+10, radius, 0, 2 * Math.PI, false);
      context.fillStyle = 'rgba('+r+','+r1+','+r2+',0.7)';
      context.fill();
      context.lineWidth = 2;
      context.strokeStyle = '#003300';
	  
	  context.stroke();
      context.closePath();
	  context.beginPath();
	  context.moveTo(a[b[i]][0]*c+10,a[b[i]][1]*c1+10);
	  }
	  
      context.stroke();
      context.closePath();
  
	  </script>
	  </head>
	  <body style='background:rgba(80,220,180,0)'>
	  <span style="position:absolute;bottom:3%;right:4%;font-size:14px;">&copy Mohit_gaurang's_project</span>
	  </body>