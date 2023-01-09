var true_email = true;
var true_name = true;
var true_password = true;
var true_confirm = true;
var true_phone = true;
function form_onSubmit()
{
  if(true_email == false || true_name == false || true_password == false || true_phone == false || true_confirm == false)
  {
    alert("Please check all the field");
    return false;
  }
  else
  {
    return true;
  }
}
function confirm_email(email)
{
  if(email=="")
  {
    document.getElementById('erroremail').innerHTML="You cannot leave this field empty";
    true_email = false;
  }
  else
  {
    document.getElementById('erroremail').innerHTML="";
    true_email = true;
  }
}
function confirm_password(password)
{
  if(password=="")
  {
    document.getElementById('errorpassword').innerHTML="You cannot leave this field empty";
    true_password = false;
  }
  else
  {
    document.getElementById('errorpassword').innerHTML="";
    true_password = true;
    var con = document.reg.inputConfirm.value;
    if(password != con)
    {
      document.getElementById('errorconfirm').innerHTML="Please make sure this same value with password";
      true_confirm = false;
    }
    else
    {
      document.getElementById('errorconfirm').innerHTML="";
      true_confirm = true;
    }
  }
}
function confirm_name(name)
{
  if(name=="")
  {
    document.getElementById('errorname').innerHTML="You cannot leave this field empty";
    true_name = false;
  }
  else
  {
    document.getElementById('errorname').innerHTML="";
    true_name = true;
  }
}
function confirm_phone(phone)
{
  if(phone=="")
  {
    document.getElementById('errorphone').innerHTML="You cannot leave this field empty";
    true_phone = false;
  }
  else
  {
    document.getElementById('errorphone').innerHTML="";
    true_phone = true;
  }
}
function confirm_confirm(confirm)
{
  if(confirm=="")
  {
    document.getElementById('errorconfirm').innerHTML="You cannot leave this field empty";
    true_confirm = false;
  }
  else
  {
    var pass = document.reg.inputPassword.value;
    if(pass != confirm)
    {
      document.getElementById('errorconfirm').innerHTML="Please make sure this same value with password";
      true_confirm = false;
    }
    else
    {
      document.getElementById('errorconfirm').innerHTML="";
      true_confirm = true;
    }
  }
}
function validate(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[0-9]/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}
function validate1(evt)
{
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  var regex = /[A-Z]|[a-z]|\s/;
  if(!regex.test(key))
  {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}