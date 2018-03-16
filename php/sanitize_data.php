<?php

/*
File Name: sanitize_data.php
Date: 02/24/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

// sanitize form data
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>