<?php

  /*
    This class contains a method
    which includes through an include-directive, 
    the main view.
    In this view, the registration and login of a user is provided
  */

  class MainController
  {
    /*-----------------------------
    Includes the principal.php file with
    registration and login option
    -----------------------------*/
    public function ctrIncludePrincipal()
    {
      include "Views/principal.php";
    } 

  }	// MainController end


