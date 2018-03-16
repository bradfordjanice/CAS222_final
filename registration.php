<!--
File Name: registration.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events template

TO DO:
Style fieldsets
Add welcome message after registration and remind them to pick up their packet
Describe age requirements for events
-->

<!DOCTYPE html>

<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="author" content="Janice Bradford">
<base target="_blank"> <!-- open all links not marked "_self" in a new tab -->

<title>Ace in the Hole</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet" type="text/css">
<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css">
<link href="css/menu.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">
  
<script src="js/menu.js"></script>
<script src="js/regForm.js"></script>
  
<?php include 'php/connection.php'; ?>
<?php include 'php/sanitize_data.php'; ?>
<?php include 'php/reg_form_processor.php'; ?>

<style>
  /* use to outline blocks while styling and debugging 
  { outline: 1px solid red !important } */
</style>
    
</head>

<body>
  
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<header>
  <?php include 'php/header.php'; ?>
  <script src="js/weather.js"></script>
</header>

<nav class="topnav" id="myTopnav">
  <a target="_self" href="index.php">Home</a>
  <a target="_self" href="events.php">Events</a>
  <a target="_self" href="#registration" class="active">Registration</a>
  <a target="_self" href="contact.php">Contact</a>
  <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
</nav>

  <article id="weather">
    <?php include 'php/weather.php'; ?>
  </article>

  <article id="photograph">
    <img src="images/triathlon_photo_mobile.jpg" style="width:100%">
  </article>
  
  <article id="slideshow">
    <?php include 'php/slide_show.php'; ?>
    <script src="js/slideShow.js"></script>
  </article>

  <main id="content">
    <h2>Registration</h2>
    
    <p class="note">You must be 18 or older to be an Athlete, and 12 or older to be a Volunteer.  But, if you are an Athlete 6 - 12 years old you can participate in the Splash-n-Dash!<br>If you are younger than 18, your parent or guardian must register for you.</p>
    <p class="note"><span class="required">* </span>Required information</p>
    
    <form id="regForm" name="regForm" action="<?= $_SERVER['REQUEST_URI'] ?>" onsubmit="return validateRegForm()" method="POST" target="_self">

      <fieldset>
        <span class="required">* </span>First name:<br>
        <input type="text" name="firstName" id="firstName"><br>

        <span class="required">* </span>Last name:<br>
        <input type="text" name="lastName" id="lastName"><br>

        <span class="required">* </span>Age:<br>
        <input type="number" name="age" id="age" min="1" max="120"><br>
      </fieldset>

      <h3 class="h3form">Saturday Events</h3>
      <fieldset>
        <input type="checkbox" name="satParticipant" id="satParticipant" value="satParticipant" onclick="satEvents()">
        <label for="satParticipant">Yes, I will participate Saturday!</label><br>

        <fieldset class="roleGrp" id="satRoleGrp" disabled>
          Athlete or Volunteer?<br>
          <input type="radio" name="satRole" id="satAthlete" value="satAthlete">
          <label for="satAthlete">Athlete</label><br>

          <input type="radio" name="satRole" id="satVolunteer" value="satVolunteer">
          <label for="satVolunteer">Volunteer</label><br>
        </fieldset>

        <fieldset class="eventsGrp" id="satEventsGrp" disabled>
          Event?<br>
          <input type="radio" name="satEvent" id="lcTri" value="lcTri">
          <label for="lcTri">Long Course Triathlon $240</label><br>

          <input type="radio" name="satEvent" id="olympicTri" value="olympicTri">
          <label for="olympicTri">Olympic Triathlon $110</label><br>

          <input type="radio" name="satEvent" id="10K" value="10K">
          <label for="10K">10K $50</label><br>

          <input type="radio" name="satEvent" id="halfMar" value="halfMar">
          <label for="halfMar">Half Marathon $75</label><br>
        </fieldset>
      </fieldset>
            
      <h3 class="h3form">Sunday Events</h3>
      <fieldset>
        <input type="checkbox" name="sunParticipant" id="sunParticipant" value="sunParticipant" onclick="sunEvents()">
        <label for="sunParticipant">Yes, I will participate Sunday!</label><br>
        
        <fieldset class="roleGrp" id="sunRoleGrp" disabled>
          Athlete or Volunteer?<br>
          <input type="radio" name="sunRole" id="sunAthlete" value="sunAthlete">
          <label for="sunAthlete">Athlete</label><br>

          <input type="radio" name="sunRole" id="sunVolunteer" value="sunVolunteer">
          <label for="sunVolunteer">Volunteer</label><br>
        </fieldset>

        <fieldset class="eventsGrp" id="sunEventsGrp" disabled>
          Event?<br>
          <input type="radio" name="sunEvent" id="sprintTri" value="sprintTri">
          <label for="sprintTri">Sprint Triathlon $90</label><br>

          <input type="radio" name="sunEvent" id="tryTri" value="tryTri">
          <label for="tryTri">Try-a-Tri $65</label><br>

          <input type="radio" name="sunEvent" id="splashDash" value="splashDash">
          <!--
          <label for="splashDash">Splash-n-Dash $25
            <span class="note">&nbsp;&nbsp;The Splash-n-Dash is free if you are with an adult Athlete.</span></label><br>
          -->
          <label for="splashDash">Splash-n-Dash $25 **</label>
          <p class="note">** The Splash-n-Dash is free if you are with an adult Athlete.</p>
        </fieldset>
      </fieldset>

      <h3 class="h3form">Your Contact Information</h3>
      <fieldset>
        <span class="required">* </span>Phone:<br>
        <input type="text" name="phone" id="phone"><br>

        <span class="required">* </span>Email:<br>
        <input type="email" name="email" id="email"><br>
      </fieldset>
      
      <h3 class="h3form">Emergency Contact Information</h3>
      <fieldset>
        <span class="required">* </span>Name:<br>
        <input type="text" name="emergencyContactName" id="emergencyContactName"><br>

        <span class="required">* </span>Phone:<br>
        <input type="text" name="emergencyContactPhone" id="emergencyContactPhone"><br>
      </fieldset>
      
      <input class="sendBtn" type="submit" value="Send">
      <input class="cancelBtn" type="reset" value="Cancel">
      
    </form>

  </main>

  <aside id="packet">
    <?php include 'php/packets.php'; ?>
  </aside>

  <aside id="social">
    <?php include 'php/social_feeds.php'; ?>
  </aside>

<footer>
  <?php include 'php/footer.php'; ?>
  <?php include 'php/closeConnection.php'; ?>
</footer>

</body>

</html>