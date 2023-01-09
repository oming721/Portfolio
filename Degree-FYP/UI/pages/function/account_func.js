var true_new = true;
var true_password = true;
var true_confirm = true;
function form_onSubmit()
{
  if(true_new == false || true_password == false || true_confirm == false)
  {
    alert("Please check all the field");
    return false;
  }
  else
  {
    return true;
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
    id = document.getElementById('inputid').value;
    $.ajax({
      type: "get",
      url: "function/ajax_account.php",
      data: {"password": password, "id": id},
      dataType: "json",
      success: function(result)
      {
        if(result == false)
        {
          document.getElementById('errorpassword').innerHTML="Wrong Password";
          true_password = false;
        }
        else
        {
          document.getElementById('errorpassword').innerHTML="";
          true_password = true;
        }
      }
    });
  }
}
function confirm_newpass(newpass)
{
  if(newpass=="")
  {
    document.getElementById('errornewpassword').innerHTML="You cannot leave this field empty";
    true_new = false;
  }
  else
  {
    document.getElementById('errornewpassword').innerHTML="";
    true_new = true;
    var con = document.reg.inputConfirm.value;
    if(newpass != con)
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
    var pass = document.reg.inputNew.value;
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