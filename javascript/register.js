
function validate()
 {
     var name=document.getElementById("name").value;
    var uname=document.getElementById("username").value;
    var email=document.getElementById("email").value;
    var contact=document.getElementById("contact").value;
    var e= document.getElementById("role").value;
    var city=document.getElementById("city").value;
    var city=document.getElementById("city").value;
    var password_1=document.getElementById("password_1").value;
    var password_2=document.getElementById("password_2").value;
    var nameRegex = /^[a-zA-Z\-]+$/;
    var validemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var validfirstUsername = uname.match(nameRegex);
    if(name=="")
    {
        document.getElementById("name1").innerHTML="name is required!";
        document.getElementById("name1").style.color="Red";
        return false;
    }
    if(uname=="")
    {
        document.getElementById("user_name").innerHTML="username is required!";
        document.getElementById("user_name").style.color="Red";
        return false;
    }
    if(validfirstUsername==null)
    {
        document.getElementById("user_name").innerHTML="Username should be characters only!";
        document.getElementById("user_name").style.color="Red";
        return false;
    }
   
    if(email=="")
    {
        document.getElementById("user_email").innerHTML="email is required!";
        document.getElementById("user_email").style.color="Red";
        return false;
    }
    
    if(!email.match(validemail))
               {
                    document.getElementById("user_email").innerHTML="Enter valid  email address";
                    document.getElementById("user_email").style.color="Red";
                    return false;
                    
                }
    if(contact=="")
    {
        document.getElementById("user_contact").innerHTML="Please provide contact number!";
        document.getElementById("user_contact").style.color="Red";
        return false;
    }
    if(contact.length<10 || contact.length>10)
    {
        document.getElementById("user_contact").innerHTML="please provide a valid contact number!";
        document.getElementById("user_contact").style.color="Red";
        return false;
    }

    if(e=="SELECT")
    {
        //alert("please choose a role!");
       document.getElementById("user_role").innerHTML="Please select your role!";
       document.getElementById("user_role").style.color="Red"; 
       return false;
    }
    if(city=="SELECT")
    {
        document.getElementById("user_city").innerHTML="Please select city!";
        document.getElementById("user_city").style.color="Red";
        return false;
    }
   
    if(password_1=="")
    {
        document.getElementById("user_password1").innerHTML="password required!";
        document.getElementById("user_password1").style.color="Red";
        return false;
    }
   
    if(password_1 !== password_2)
    {
        document.getElementById("user_password2").innerHTML="password doesnot match!";
        document.getElementById("user_password2").style.color="Red";
        return false;
    }
    if(password_1.length<4 )
    {
        document.getElementById("user_password1").innerHTML="minimum length should be 4!";
        document.getElementById("user_password1").style.color="Red";
        return false;
    }
   
   submitUser();
   return true;
}

// 
function resetall() 
{
    document.getElementById("user_name").innerHTML="";
    document.getElementById("user_email").innerHTML="";
    document.getElementById("user_contact").innerHTML="";
    document.getElementById("user_password1").innerHTML="";
    document.getElementById("user_role").innerHTML="";
    document.getElementById("user_city").innerHTML="";

}

// validate username

function submitUser()
{
    document.getElementById("errormessage").innerHTML="";
    
    var httpRequest = new XMLHttpRequest() ;

    httpRequest.addEventListener( "load", function(event) 
    {
        if (event.target.status != 200) {
        document.getElementById("errormessage").innerHTML=event.target.responseText;
        document.getElementById("errormessage").style.color="Red";
        return;
    }
     location.replace("login.html");
   // alert( event.target.responseText );
  });

  // Define what happens in case of error
    httpRequest.addEventListener( "error", function( event ) {
    alert( 'Oops! Something went wrong.' );
  });
    let form = document.getElementById( "myform" );
    fd  = new FormData(form);
    httpRequest.open("POST","php/register.php",false);
    httpRequest.send(fd);
}