<?php
ini_set("error_reporting", E_WARNING);
mysqli_connect("localhost","root","","Fulo_ecom");
// Check connection
if (mysqli_connect_error()) {
    echo "Error connecting to Database: ";
  }