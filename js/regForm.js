/*
File Name: regForm.js
Date: 02/24/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events
*/

/* REGISTRATION FORM */

// Saturday events and role type are disabled unless the satParticipant checkbox is checked
function satEvents() {
  if(document.getElementById("satParticipant").checked) {
      document.getElementById("satRoleGrp").disabled = false;
      document.getElementById("satEventsGrp").disabled = false;
      //console.log("clicked Saturday Events on");
  } else {
      document.getElementById("satParticipant").checked = false;
      document.getElementById("satRoleGrp").disabled = true;
      document.getElementById("satEventsGrp").disabled = true;
      validateContactForm();
      //console.log("clicked Saturday Events off");
  }
}

// Sunday events and role type are disabled unless the sunParticipant checkbox is checked
function sunEvents() {
  if(document.getElementById("sunParticipant").checked) {
      document.getElementById("sunRoleGrp").disabled = false;
      document.getElementById("sunEventsGrp").disabled = false;
      //console.log("clicked Sunday Events on");
  } else {
      document.getElementById("sunParticipant").checked = false;
      document.getElementById("sunRoleGrp").disabled = true;
      document.getElementById("sunEventsGrp").disabled = true;
      validateContactForm();
      //console.log("clicked Sunday Events off");
  }
}

/* howto reset a field
function uncheck() {
    document.getElementById("myCheck").checked = false;
}
*/

function validateRegForm() {
  var missingInfo = false;
  var msg = "";
  
  if (document.forms["regForm"]["firstName"].value == "") {
    msg = msg + "First name\n";
    missingInfo = true;
  }
  if(document.forms["regForm"]["lastName"].value == "") {
    msg = msg + "Last name\n";
    missingInfo = true;
  }
  if (document.forms["regForm"]["age"].value == "") {
    msg = msg + "Age\n";
    missingInfo = true;
  } 
  if (document.forms["regForm"]["phone"].value == "") {
    msg = msg + "Phone number\n";
    missingInfo = true;
  }
  if (document.forms["regForm"]["email"].value == "") {
    msg = msg + "Email address\n";
    missingInfo = true;
  }
  if (document.forms["regForm"]["emergencyContactName"].value == "") {
    msg = msg + "Name of Emergency Contact\n";
    missingInfo = true;
  }
  if (document.forms["regForm"]["emergencyContactPhone"].value == "") {
    msg = msg + "Phone number of Emergency Contact\n";
    missingInfo = true;
  }
  
  // They must sign up for Saturday, Sunday, or both
  if (!document.forms["regForm"]["satParticipant"].checked && !document.forms["regForm"]["sunParticipant"].checked) {
      msg = msg + "Which days will you participate?\n";
  } else {
      if (document.forms["regForm"]["satParticipant"].checked) {
        // If they are participating Saturday they must specify Athlete or Volunteer
        if (!document.forms["regForm"]["satAthlete"].checked && 
           !document.forms["regForm"]["satVolunteer"].checked) {
          msg = msg + "On Saturday, do you want to be an Athlete or Volunteer?\n";
        } 
        // If they are participating on Saturday they must select an event
        if (!document.forms["regForm"]["lcTri"].checked && 
           !document.forms["regForm"]["olympicTri"].checked &&
           !document.forms["regForm"]["10K"].checked &&
           !document.forms["regForm"]["halfMar"].checked) {
          msg = msg + "Please select an event on Saturday.\n";
        }
      }
      if (document.forms["regForm"]["sunParticipant"].checked) {
        // If they are participating Sunday they must specify Athlete or Volunteer
        if (!document.forms["regForm"]["sunAthlete"].checked && 
           !document.forms["regForm"]["sunVolunteer"].checked) {
          msg = msg + "On Sunday, do you want to be an Athlete or Volunteer?\n";
        }
        // If they are participating Sunday they must specify an event
        if (!document.forms["regForm"]["sprintTri"].checked && 
           !document.forms["regForm"]["tryTri"].checked &&
           !document.forms["regForm"]["splashDash"].checked) {
          msg = msg + "Please select an event on Sunday.\n";
        }
      }
    }
  
  if(msg !== "") {
    alert("Please enter the following information:\n\n" + msg);
    return false;
  }
}
