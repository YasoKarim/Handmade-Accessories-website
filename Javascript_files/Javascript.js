function myFunction() 
{
    var element = document.body;
    element.classList.toggle("dark-mode");
}
function validation()
{
  var valid =false;
  var formlabels = document.getElementsByTagName("label");
  var firstname = document.signupform.firstname.value; 
  var lastname = document.signupform.lastname.value; 
  var email = document.signupform.useremail.value; 
  var password = document.signupform.userpass1.value; 
  var passcof = document.signupform.userpass2.value; 

  
  if(firstname == "") 
  {
  formlabels[0].innerHTML = "First Name: * [Required]";
  formlabels[0].style.color = "red";
  valid = false;
  }
  
  else if(!isNaN(firstname))
  {
    formlabels[0].innerHTML = "First Name: * [Text only]";
    formlabels[0].style.color = "red";
    valid = false;
  }
  
  else
  {
  formlabels[0].innerHTML = "First Name: *";
  formlabels[0].style.color = "black";
  valid = (valid) ? true: false;
  }

  if(lastname == "" )
  {
    formlabels[1].innerHTML = "Last  Name: * [Required]";
    formlabels[1].style.color = "red";
    valid =false;
  }
  else if(!isNaN(lastname)) 
  {
    formlabels[1].innerHTML = "Last Name: * [Text only]";
    formlabels[1].style.color = "red";
    valid = false;
  }
  else
  {
  formlabels[1].innerHTML = "Last Name: *";
  formlabels[1].style.color = "black";
  valid = (valid) ? true: false;
  }
var emailregex =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
if(email == "")
  {
    formlabels[2].innerHTML = "Email : * [Required]";
    formlabels[2].style.color = "red";
    valid = false;
  }
  else if(emailregex.test(email))
  {
    formlabels[2].innerHTML = "Email : *";
    formlabels[2].style.color = "black";
    valid = (valid) ? true: false;
  }
  else  
  {  
    formlabels[2].innerHTML = "Email : * [Incorrect email]";
    formlabels[2].style.color = "red";
    valid = false;
  }

  
  if(password == "")
  {
    formlabels[3].innerHTML = "Password: * [Required]";
    formlabels[3].style.color = "red";
    valid =false;
  }  else if(password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/))
  {
    formlabels[3].innerHTML = "Password: *";
    formlabels[3].style.color = "Black";
    valid = (valid) ? true: false;
  }
  else  
  {
  formlabels[3].innerHTML = "Password: * [Not Valid]";
   formlabels[3].style.color = "red";
  }
  if(passcof == "")
  {
  formlabels[4].innerHTML = "Confirm Password: * [Required]";
  formlabels[4].style.color = "red";
  valid = false;
  }
  else if(passcof.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/))
  {
    formlabels[4].innerHTML = "Confirm Password: *";
    formlabels[4].style.color = "Black";
     valid = (valid) ? true: false;
  }

  else  
  {
    formlabels[4].innerHTML = "Confirm Password: * [Not valid]";
    formlabels[4].style.color = "red";
    valid = false;
  }
  
  return valid;
}

//var at = email.indexOf("@");
//var dot = email.indexOf(".");
//var validRegex = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z] (2,4))$/;