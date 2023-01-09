var true_name = true;
var true_location = true;
function form_onSubmit()
{
  if(true_name == false || true_location == false)
  {
    alert("Please check all the field");
    return false;
  }
  else
  {
    return true;
  }
}
function confirm_name(name)
{
  if(name=="")
  {
    true_name = false;
  }
  else
  {
    true_name = true;
  }
}
function confirm_address(loc)
{
  if(loc=="")
  {
    true_location = false;
  }
  else
  {
    true_location = true;
  }
}
