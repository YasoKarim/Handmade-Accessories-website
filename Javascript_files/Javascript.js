function myFunction() 
{
    var element = document.body;
    element.classList.toggle("dark-mode");
}
function validation()
{
  var valid = true;
  var formlabels = document.getElementsByTagName("label");
  var firstname = document.signupform.firstname.value; 
  var lastname = document.signupform.lastname.value; 
  var email = document.signupform.useremail.value; 
  var password = document.signupform.userpass1.value; 
  var passcof = document.signupform.userpass2.value; 

  
  if(firstname == "" || lastname == "" || email == "" || password==""
  ||passcof == "") 
  {
  formlabels[0].innerHTML = "First Name: * [Required]";
  formlabels[0].style.color = "red";
  formlabels[1].innerHTML = "Last  Name: * [Required]";
  formlabels[1].style.color = "red";
  formlabels[2].innerHTML = "Email : * [Required]";
  formlabels[2].style.color = "red";
  formlabels[3].innerHTML = "Password: * [Required]";
  formlabels[3].style.color = "red";
  formlabels[4].innerHTML = "Confirm Password: * [Required]";
  formlabels[4].style.color = "red";
  valid = false;
  }
  else if(!isNaN(firstname) || (!isNaN(lastname)))
  {
    formlabels[0].innerHTML = "First Name: * [Text only]";
    formlabels[0].style.color = "red";
    formlabels[1].innerHTML = "Last  Name: * [Text only]";
    formlabels[1].style.color = "red";
  }
  return valid;
}