<?php
  $errors = array();
  if(empty($_POST['email'])){
    $errors[] = "Email field cannot be blank";
  }
  else {
    
  }
  if(empty($_POST['first_name'])){
    $errors[] = "First name field cannot be blank";
  }
  if(empty($_POST['last_name'])){
    $errors[] = "Last name field cannot be blank";
  }
  if(empty($_POST['password1'])){
    $errors[] = "Password field cannot be blank";
  }
  if(empty($_POST['password2'])){
    $errors[] = "Confirm password field cannot be blank";
  }
?>
