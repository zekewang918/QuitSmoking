function test() {
	var validate = true;
	var firstName = document.getElementById('fname').value;
	var lastName = document.getElementById('lname').value;
//	var userName = document.getElementById('username').value;
//	var password = document.getElementById('password').value;
	var re_password = document.getElementById('re_password').value;
	var email = document.getElementById('email').value;
	if (firstName === '')
	{
		document.getElementById('display_fname').innerHTML = "Please enter your first name!";
		validate = false;
	}
	if (lastName === '')
	{
		document.getElementById('display_lname').innerHTML = "Please enter your last name!";
		validate = false;
	}
/*	if (userName === '')
	{
		document.getElementById('display_userName').innerHTML = "Please enter your user name!";
		validate = false;
	}
	if (password === '')
	{
		document.getElementById('display_password').innerHTML = "Please enter your password!";
		validate = false;
	}*/
	if (re_password === '')
	{
		document.getElementById('display_re_password').innerHTML = "Please retype your password!";
		validate = false;
	}
	if (email === '')
	{
		document.getElementById('display_email').innerHTML = "Please enter your email!";
		validate = false;
	}
			
	return validate;
}

function change() {
	var num = document.getElementById('number').value;
	document.getElementById('display_money').innerHTML = "The money you could have saved: $" + num * 2;
}




function add() {
	var num = document.getElementById('number').value;
    num++;
   	document.getElementById('number').value = num;
   	document.getElementById('display_money').innerHTML = "The money you could have saved: $" + num * 2;
   	if (num > 15)
   	{
   		alert("You have too much today!");
   	}
}	
/*		
function minus() {
	alert(1);
    var num = document.getElementById('number').value;
	num--;
  	document.getElementById('number').value = num;
}
*/