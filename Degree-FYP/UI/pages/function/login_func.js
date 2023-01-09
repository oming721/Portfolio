function confirm_email(email)
{
  if(email=="")
  {
    document.getElementById('erroremail').innerHTML="You cannot leave this field empty";
  }
  else
  {
    document.getElementById('erroremail').innerHTML="";
  }
}
function confirm_password(password)
{
  if(password=="")
  {
    document.getElementById('errorpassword').innerHTML="You cannot leave this field empty";
  }
  else
  {
    document.getElementById('errorpassword').innerHTML="";
  }
}