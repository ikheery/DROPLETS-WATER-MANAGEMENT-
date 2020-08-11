var myInput = document.getElementById("phonenumber");
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}
myInput.onkeyup = function() {
  
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }

  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  if(myInput.value.length ==10 ) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}




function message() {
	var sms;
	sms=document.getElementsByTagName("h4");
	window.alert(sms);
	return false;
}
function formvalidate() {
	var username=document.forms["loginForm"]["username"].value;
	var password=document.forms["loginForm"]["password"].value;
	if(username==""){
		window.alert("fill user name");
		window.alert("success")
		return false;
	}
	else if(password=="") {
	    window.alert("fill password");
	    return false;	
	}
	
}











