var true_email = true;
function form_onSubmit()
{
  if(true_email == false)
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
    true_email = false;
  }
  else
  {
    true_email = true;
  }
}