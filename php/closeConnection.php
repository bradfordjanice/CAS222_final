<?php 

/*
File Name: closeConnection.php
Date: 02/25/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

if(isset($con)) {
    $con = null;
    //echo "<p>4. Database connection closed!</p>";
}
else{
    //echo "<br>4. No database connection to close.";
}

?>