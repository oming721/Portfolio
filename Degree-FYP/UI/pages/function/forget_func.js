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
function form_onSubmit()
{
  document.getElementById('btn_submit').style.display = "none";
}