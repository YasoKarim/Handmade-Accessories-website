function validation()
{
    var valid =false;
    var formlabels = document.getElementsByTagName("label");
    var firstname = document.signupform.firstname.value; 
    var lastname = document.signupform.lastname.value; 
    var email = document.signupform.useremail.value; 
    var password = document.signupform.userpass1.value; 
    var passcof = document.signupform.userpass2.value; 
  
    
   
  var emailregex =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;  
  if(email == "")
    {
      formlabels[0].innerHTML = "Email : * [Required]";
      formlabels[0].style.color = "red";
      valid = false;
    }
    else if(emailregex.test(email))
    {
      formlabels[0].innerHTML = "Email : *";
      formlabels[0].style.color = "black";
      valid = (valid) ? true: false;
    }
    else  
    {  
      formlabels[0].innerHTML = "Email : * [Incorrect email]";
      formlabels[0].style.color = "red";
      valid = false;
    }
  
    
    if(password == "")
    {
      formlabels[1].innerHTML = "Password: * [Required]";
      formlabels[1].style.color = "red";
      valid =false;
    }  else if(password.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/))
    {
      formlabels[1].innerHTML = "Password: *";
      formlabels[1].style.color = "Black";
      valid = (valid) ? true: false;
    }
    else  
    {
    formlabels[1].innerHTML = "Password: * [Not Valid]";
     formlabels[1].style.color = "red";
    }
}