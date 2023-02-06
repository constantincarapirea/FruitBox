
//==============================================================
function verificare() 
{
	var username=document.getElementById('username');
	var email_error=document.getElementById('email_error');
	
	if (username.value.length<3){
		username.style.border="1px solid red";
		username.focus();
		email_error.style.display="block";
		return false;
	}
	
	else if(username.value.length>=8){
		username.style.border="1px solid silver";
		email_error.style.display="none";
		return true;
	}
	
	
}
//=========================================================
function verificare_(){
var password=document.getElementById('password');
var password_error=document.getElementById('password_error');
if (password.value.length<3){
		password.style.border="1px solid red";
		password.focus();
		password_error.style.display="block";
		return false;
	}

	else if(password.value.length>=8){
		password.style.border="1px solid silver";
		password_error.style.display="none";
		return true;
	}
}

//===========================================================
function show(){
	var password=document.getElementById('password');
	var icon=document.getElementById('img_form1');
	if (password.type ==="password") {
		password.type="text";
		password.style.marginTop="5px";
	}
	else{
		password.type="password";
	}
}

//============================================================
function verificareTel() 
{
	var telefon=document.getElementById('telefon');
	var tel_error=document.getElementById('tel_error');
	var phone=/^\(?([0-9]{3})\)?[-]?([0-9]{8})$/;
	if(telefon.value.length<=9){
		telefon.style.border="1px solid red";
		telefon.focus();
		tel_error.style.display="block";
		return fasle;
	}
	
	else if(telefon.value.length>=14){
		telefon.style.border="1px solid red";
		telefon.focus();
		tel_error.style.display="block";
		return fasle;
	}
	else if (telefon.value.match(phone) )
	{
		telefon.style.border="1px solid silver";
		tel_error.style.display="none";
		return true;
	}
	
	
}
//=========================================================

function verificare_pre(){
var pre=document.getElementById('pre');
var prenume_error=document.getElementById('prenume_error');
if (pre.value.length<5){
		pre.style.border="1px solid red";
		pre.focus();
		prenume_error.style.display="block";
		return false;
	}

	else if(pre.value.length>=6){
		pre.style.border="1px solid silver";
		prenume_error.style.display="none";
		return true;
	}
}
//===========================================================

//==============================================================
function verificare_nume() 
{
	var nume=document.getElementById('nume');
	var nume_error=document.getElementById('nume_error');
	
	if (nume.value.length<5){
		nume.style.border="1px solid red";
		nume.focus();
		nume_error.style.display="block";
		return false;
	}
	
	else if(nume.value.length>=6){
		nume.style.border="1px solid silver";
		nume_error.style.display="none";
		return true;
	}
	
	
}
//=========================================================

function verificare_email() 
{
	var mail=document.getElementById('mail');
	var mail_error=document.getElementById('mail_error');
	var email=/^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
	
	 if (mail.value.match(email) )
	{
		mail.style.border="1px solid silver";
		mail_error.style.display="none";
		return true;
	}
	else
	{
		mail.style.border="1px solid red";
		mail.focus();
		mail_error.style.display="block";
		return false;
	}
}