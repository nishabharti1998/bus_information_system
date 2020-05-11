function show_route()
{
    var httpRequest = new XMLHttpRequest() ;
    document.getElementById("here").innerHTML="";
    httpRequest.addEventListener( "load", function(event) 
    {
        if (event.target.status == 200) {
        document.getElementById("here").innerHTML=event.target.responseText;
        

    }
});

    // Define what happens in case of error
   httpRequest.addEventListener( "error", function( event ) {
       alert( 'Oops! Something went wrong.' );
     });
       let form = document.getElementById("frm");
       fd  = new FormData(form);
       httpRequest.open("POST","php/passenger.php",false);
       httpRequest.send(fd);
   
}
//
function show_bus()
{
    
    var xhr = new XMLHttpRequest() ;
    
    document.getElementById("bus").innerHTML="";
    xhr.addEventListener( "load", function(event) 
    {
        if (event.target.status == 200) {
        document.getElementById("bus").innerHTML=event.target.responseText;
        

    }
});

    // Define what happens in case of error
   xhr.addEventListener( "error", function( event ) {
       alert( 'Oops! Something went wrong.' );
     });
       let form = document.getElementById("myform");
       fd  = new FormData(form);
       xhr.open("POST","php/show_bus.php",false);
       xhr.send(fd);
}

//
