function validate_employee()
{
    var name=document.getElementById("name").value;
    var contact=document.getElementById("name").value;
    var email=document.getElementById("name").value;
    var gender=document.getElementById("name").value;
    if(name=="")
    {
        document.getElementById("name").innerHTML=" name is required";
        return false;
    }
    if(contact=="")
    {
        document.getElementById("user_contact").innerHTML="contact number is required";
        return false;
    }
    if(email=="")
    {
        document.getElementById("user_email").innerHTML="email is required";
        return false;
    }
    if(gender=="SELECT")
    {
        document.getElementById("gender").innerHTML="gender is required";
        return false;
    }
    validate1();
    return true;
}
//
function validate1()
{
    var httpRequest = new XMLHttpRequest() ;

 // Define what happens in case of error
    httpRequest.addEventListener( "error", function( event ) {
    alert( 'Oops! Something went wrong.' );
    });
    let form = document.getElementById( "myform" );
    fd  = new FormData(form);
    httpRequest.open("POST","php/addemployee.php",false);
    httpRequest.send(fd);

}


//
function show_employee()
{
    document.getElementById("showlist").innerHTML="";
    var httpRequest = new XMLHttpRequest() ;
    httpRequest.addEventListener( "load", function(event) 
    {
        if (event.target.status == 200) 
        {
        document.getElementById("errormessage").innerHTML=event.target.responseText;
        }
        
    });

    // Define what happens in case of error
   httpRequest.addEventListener( "error", function( event ) {
       alert( 'Oops! Something went wrong.' );
     });
       
       httpRequest.open("GET","php/showemployee.php",false);
       httpRequest.send();
}
//
function show_list()
{
    var httpRequest = new XMLHttpRequest() ;
    document.getElementById("errormessage").innerHTML="";
    httpRequest.addEventListener( "load", function(event) 
    {
        if (event.target.status == 200) 
        {
        document.getElementById("showlist").innerHTML=event.target.responseText;
        }
        
    });

    // Define what happens in case of error
   httpRequest.addEventListener( "error", function( event ) {
       alert( 'Oops! Something went wrong.' );
     });
       
       httpRequest.open("GET","php/stoppagelist.php",false);
       httpRequest.send();

}