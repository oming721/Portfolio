var true_name = true;
var true_location = true;
var true_accept = false;
function form_onSubmit()
{
  if(true_name == false || true_location == false  || true_accept == false)
  {
    alert("Please check all the field");
    return false;
  }
  else
  {
    document.getElementById('btn_register').style.display = "none";
    document.getElementById('inputName').readOnly = true;
    document.getElementById('inputLocation').readOnly = true;
    return true;
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
function confirm_location(location)
{
  if(location=="")
  {
    document.getElementById('errorlocation').innerHTML="You cannot leave this field empty";
    true_location = false;
  }
  else
  {
    document.getElementById('errorlocation').innerHTML="";
    true_location = true;
  }
}
function confirm_accept(accept)
{
  if(accept=="" || accept==false)
  {
    true_accept = false;
  }
  else
  {
    true_accept = true;
  }
}