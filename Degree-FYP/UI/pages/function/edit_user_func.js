var true_name = true;
var true_phone = true;
var true_birthday = true;
var true_address = true;
function form_onSubmit()
{
  if(true_name == false || true_phone == false || true_address == false || true_birthday == false)
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
function confirm_phone(phone)
{
  if(phone=="")
  {
    true_phone = false;
  }
  else
  {
    true_phone = true;
  }
}
function confirm_birthday(birthday)
{
  if(birthday=="")
  {
    true_birthday = false;
  }
  else
  {
    true_birthday = true;
  }
}
function confirm_address(address)
{
  if(address=="")
  {
    true_address = false;
  }
  else
  {
    true_address = true;
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