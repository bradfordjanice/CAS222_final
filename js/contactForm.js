/*
File Name: contactForm.js
Date: 02/19/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

/* CONTACT FORM */

function validateContactForm() {
  var missingInfo = false;
  var msg = "";
  
  if (document.forms["contactForm"]["firstName"].value == "") {
    msg = msg + "First name\n";
    missingInfo = true;
  }
  if(document.forms["contactForm"]["lastName"].value == "") {
    msg = msg + "Last name\n";
    missingInfo = true;
  }
  if (document.forms["contactForm"]["email"].value == "") {
    msg = msg + "Email address\n";
    missingInfo = true;
  }
  if (document.forms["contactForm"]["contactRole"].value == "") {
    msg = msg + "Are you an athlete, volunteer, or other?\n";
    missingInfo = true;
  }
    if (document.forms["contactForm"]["comment"].value == "") {
    msg = msg + "Your comment or question\n";
    missingInfo = true;
  }
  if(msg !== "") {
    alert("Please enter the following information:\n\n" + msg);
    return false;
  }
}