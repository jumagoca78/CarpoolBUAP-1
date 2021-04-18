// Verifies that an email has been provided
function verify() {

  var email, expresion;  
  /* 
     getting our email value from the email input 
     and it is validated using a regex
  */
  email = document.getElementById("reg_correoIns").value;
  /*
    Email format: Begins with letters or numbers and then 
    an AT(@) and again letters or numbers then a dot and 
    finally letters from a to z nothing more
  */ 
  expresion = /\w+@\w+\.+[a-z]/;
  // Validates the value collected
  if(email == "")
  {
    /* 
      pop-up that replaces the alert to indicate email no provided 
      with the jquery plug-in: sweetalert
    */
    swal({
	         title: "Ingresa tu Correo",
	         text: "Proporciona tu correo institucional\npara que podamos registrarte ;)",
	         icon: "warning"	 		
    });
    //alert("Proporciona tu correo para que podamos registrarte ;)");
    return false; 
  }
  else
  {
    if(!expresion.test(email))
    {
      /* 
        pop-up that replaces the wrong email alert provided 
        with the jquery plug-in: sweetalert
      */
      swal({
             title: "El correo no está bien escrito",
             text: "Verifícalo",
	     icon: "error"	   	
      });
      //alert("El correo no está bien escrito\nFavor de verificarlo");
      return false;
    }    
  }      

} // verify function end
