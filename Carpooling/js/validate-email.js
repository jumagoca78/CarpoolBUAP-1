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
    alert("Proporciona tu correo para que podamos registrarte ;)");
    return false; 
  }
  else
  {
    if(!expresion.test(email))
    {
      alert("El correo no está bien escrito\nFavor de verificarlo");
      return false;
    }    
  }      

} // verify function end