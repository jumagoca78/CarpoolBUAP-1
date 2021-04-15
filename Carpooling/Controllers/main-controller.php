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
    Includes the main.php file with
    registration and login option
    -----------------------------*/
    public function ctrIncludeMain()
    {
      include "Views/main.php";
    } 

  }	// MainController end


