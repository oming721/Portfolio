var true_email = true;
var true_password = true;
var true_confirm = true;
function form_onSubmit()
{
  if(true_email == false || true_password == false || true_confirm == false)
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
    $.ajax({
      type: "get",
      url: "function/ajax_register.php",
      data: {"email": email},
      dataType: "json",
      success: function(result)
      {
        if(result == false)
        {
          document.getElementById('erroremail').innerHTML="This email address already exist";
          true_email = false;
        }
        else
        {
          document.getElementById('erroremail').innerHTML="";
          true_email = true;
        }
      }
    });
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
function check_selection(selection)
{
  if(selection== "employee")
  {
    document.reg.action = "user.php";
  }
  else if(selection=="company")
  {
    document.reg.action = "company.php";
  }
}