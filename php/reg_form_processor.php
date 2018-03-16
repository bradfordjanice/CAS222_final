<?php

/*
File Name: reg_form_processor.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

// see what information is in $_POST for debugging
//print_r($_POST);

// error reporting
//error_reporting(E_ALL);

// check that the user has filled in the form and clicked submit
if ($_POST) {

  // define variables and set to empty values
  $firstName = $lastName = $phone = $email = $emergencyContactName = $emergencyContactPhone = "";
  $age = 0;
  $satParticipant = $sunParticipant = $satRole = $satEvent = $sunRole = $sunEvent = "no";

  // sanitize text data and assign all data to variables
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = test_input($_POST['firstName']);
    $lastName = test_input($_POST['lastName']); 
    $age = test_input($_POST['age']);
    $phone = test_input($_POST['phone']);
    $email = test_input($_POST['email']);
    $emergencyContactName = test_input($_POST['emergencyContactName']);
    $emergencyContactPhone = test_input($_POST['emergencyContactPhone']);
    
    // $_POST doesn't have entries for checkboxes and radio btns
    // that haven't been checked or selected
    if (isset($_POST['satParticipant'])) {
      $satParticipant = $_POST['satParticipant'];
    }
    if (isset($_POST['satRole'])) {
      $satRole = $_POST['satRole'];
    }
    if (isset($_POST['satEvent'])) {
      $satEvent = $_POST['satEvent'];
    }
    if (isset($_POST['sunParticipant'])) {
      $sunParticipant = $_POST['sunParticipant'];
    }
    if (isset($_POST['sunRole'])) {
      $sunRole = $_POST['sunRole'];
    }
    if (isset($_POST['sunEvent'])) {
      $sunEvent = $_POST['sunEvent'];
    }
  }
    
  //create $sql variable
  $sql = "INSERT INTO participants(
      firstName, 
      lastName, 
      age, 
      satParticipant,
      satRole,
      satEvent,
      sunParticipant,
      sunRole,
      sunEvent,
      phone, 
      email, 
      emergencyContactName, 
      emergencyContactPhone)"
    . " VALUES(
      '$firstName', 
      '$lastName', 
      $age,
      '$satParticipant',
      '$satRole',
      '$satEvent',
      '$sunParticipant',
      '$sunRole',
      '$sunEvent',
      '$phone', 
      '$email', 
      '$emergencyContactName', 
      '$emergencyContactPhone');";
  
  // display the value of $sql for debugging
  //echo "<br>2. SQL: " . $sql . "<br>";
  
  // Perform a query and check for errors
  if (!mysqli_query($con,$sql)) {
      echo("Error description: " . mysqli_error($con));
  } else {
      $message = 'You are now registered!\n\n'
        . 'Do not forget to pickup your registration packet and make payment.\n'
        . 'We will see you the weekend of March 24th and 25th!';
      echo "<script type='text/javascript'>alert('$message');</script>";
  }
}

?>
