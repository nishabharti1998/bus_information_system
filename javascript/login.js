 function validate() {
    var n1 = document.getElementById("username").value;
    var n2 = document.getElementById("password").value;
      if (n1 == "")
      {
        document.getElementById("user_name").innerHTML = "please enter username";
        document.getElementById("user_name").style.color = "Red";
        return false;
      }
      if (n2 == "")
      {
        document.getElementById("passwrd").innerHTML = "please enter password";
        document.getElementById("passwrd").style.color = "Red";
        return false;
      }
  
      validate_user();
      return true;
}
//
function resetall()
{
  document.getElementById("user_name").innerHTML = "";
  document.getElementById("passwrd").innerHTML = "";

}

  function validate_user() 
  {
    document.getElementById("errormessage").innerHTML = "";

    var httpRequest = new XMLHttpRequest();

    httpRequest.addEventListener("load", function(event) {
      if (event.target.status == 400) {
          document.getElementById("errormessage").innerHTML = event.target.responseText;
          return;
      }
  });
  
  httpRequest.addEventListener("load", function(event) {
      if (event.target.status == 200) {

    
        let role = JSON.parse(event.target.response)["role_id"]
        switch (role) 
        {
          case "1":
            location.replace("admin.html");
            break;
          
          case "3" :
            location.replace("passenger.html");
            break;
          default :
          location.replace("employee.html");
        }
       
      }
});
  
  let form = document.getElementById("loginform");
  fd = new FormData(form);
  httpRequest.open("POST", "php/login.php", false);
  httpRequest.send(fd);

}

