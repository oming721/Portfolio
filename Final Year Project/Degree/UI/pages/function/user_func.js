var true_name = true;
var true_phone = true;
var true_birthday = true;
var true_address = true;
var true_accept = false;
var true_image = false;
var true_image1 = false;
var true_image2 = false;
function form_onSubmit()
{
  if(true_name == false || true_phone == false || true_address == false || true_birthday == false || true_accept == false || true_image == false || true_image1 == false || true_image2 == false)
  {
    if(true_image == false)
    {
      alert("Please Upload A Picture");
    }
    if(true_image1 == false)
    {
      alert("Please Upload Selfie Picture 1");
    }
    if(true_image2 == false)
    {
      alert("Please Upload Selfie Picture 2");
    }
    alert("Please check all the field");
    return false;
  }
  else
  {
    document.getElementById('btn_register').style.display = "none";
    document.getElementById('imageUpload').readOnly = true;
    document.getElementById('inputName').readOnly = true;
    document.getElementById('inputBirthday').readOnly = true;
    document.getElementById('inputPhone').readOnly = true;
    document.getElementById('inputAddress').readOnly = true;
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
function confirm_image(image)
{
  if(image=="")
  {
    true_image = false;
  }
  else
  {
    true_image = true;
  }
}
function confirm_image1(image)
{
  if(image=="")
  {
    true_image1 = false;
  }
  else
  {
    true_image1 = true;
  }
}
function confirm_image2(image)
{
  if(image=="")
  {
    true_image2 = false;
  }
  else
  {
    true_image2 = true;
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
    document.getElementById('erroraddress').innerHTML="You cannot leave this field empty";
    true_address = false;
  }
  else
  {
    document.getElementById('erroraddress').innerHTML="";
    true_address = true;
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