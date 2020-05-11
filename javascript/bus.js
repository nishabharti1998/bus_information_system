    function validate_bus()
      {
        var httpRequest = new XMLHttpRequest() ;
        httpRequest.addEventListener( "error", function( event ) {
        alert( 'Oops! Something went wrong.' );
      });
        let form = document.getElementById( "busform" );
        fd  = new FormData(form);
        httpRequest.open("POST","php/add_bus_details.php",true);
        httpRequest.send(fd);

      }