<!--
File Name: events.php
Date: 02/13/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events template
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
<link href="css/accordian.css" rel="stylesheet" type="text/css">
  
<script src="js/menu.js"></script>

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
  <a target="_self" href="#events" class="active">Events</a>
  <a target="_self" href="registration.php">Registration</a>
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
    <h2>Events</h2>
    
    <p>You can participate as an athlete or volunteer in one event on Saturday or Sunday, or one event on both days! Athletes must be 18 years or older, except for the Splash-n-Dash for kids 6-12 years.  Volunteers must be 12 or older.</p>
    
    <h3>Saturday Events</h3>

    <button class="accordion">Long Course Triathlon<img class="icon" src="images/swim_icon.png" alt="Swimming" width="25" height="25"><img class="icon" src="images/bike_icon.png" alt="Biking" width="25" height="25"><img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">      
      <p>SWIM – 1.2 miles: Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
      
      <p>BIKE – 58 miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>
      
      <p>RUN – 13.1 miles: A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>
      
      <p>The Long Course Triathlon begins at 7am Saturday.  $240</p>
    </div>
    
    <button class="accordion">Olympic Triathlon<img class="icon" src="images/swim_icon.png" alt="Swimming" width="25" height="25"><img class="icon" src="images/bike_icon.png" alt="Biking" width="25" height="25"><img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">
      <p>SWIM – 1.5 km: Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>
      
      <p>BIKE – 28 miles - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>
      
      <p>RUN – 10 km - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (one hill total with a minimal elevation gain).</p>
      
      <p>The Olympic Triathlon begins at 7:30am Saturday.  $110</p>
    </div>
    
    <button class="accordion">10K<img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">
      <p>RUN - 10 km : The 10K event starts and finishes in the Athletes Village. The paths are approximately 6 ft wide, perfectly paved and wind around through the forest. Each course has only two small hills with a minimal elevation gain to navigate and a fast downhill to flat finish to the roaring cheers of the crowd.</p>
      
      <p>The 10K begins at 7:15am Saturday.  $50</p>
    </div>

    <button class="accordion">Half Marathon<img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">
      <p>RUN - 13.1 miles: The Half Marathon event starts and finishes in the Athletes Village to the cheers of the enthusiastic crowd. Once finished, runners can enjoy the finish line festivities, including the Sports and Fitness Expo and live entertainment. Post-race refreshments will be provided and the Awards Ceremony for the Half Marathon will begin once the results have been certified.</p>
      
      <p>The Half Marathon begins at 7:30am Saturday.  $110</p>
    </div>

    <h3>Sunday Events</h3>

    <button class="accordion">Sprint Triathlon<img class="icon" src="images/swim_icon.png" alt="Swimming" width="25" height="25"><img class="icon" src="images/bike_icon.png" alt="Biking" width="25" height="25"><img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">
      <p>SWIM - .5 miles: a 1-loop swim.</p>
      
      <p>BIKE – 28 miles - A scenic point-to-point course that travels over gently rolling hills. The bike course will be marked with large directional signage and course marshals will be present at key intersections. </p>
      
      <p>RUN - 5 km</p>
      
      <p>The Sprint Triathlon begins at 8:00am Sunday.  $90</p>
    </div>

    <button class="accordion">Tri-a-Tri<img class="icon" src="images/swim_icon.png" alt="Swimming" width="25" height="25"><img class="icon" src="images/bike_icon.png" alt="Biking" width="25" height="25"><img class="icon" src="images/run_icon.png" alt="Running" width="25" height="25"></button>
    
    <div class="panel">
      <p>Try-A-Tri: This novice race is designed for the first time triathlete, those new to the sport, our Junior Triathletes.
        
      <p>SWIM: The swim is a shorter, more manageable 1/4 mile distance (instead of the standard 1/2-mile Sprint distance swim).</p>
        
      <p>BIKE: 10 mile bike ride (vs 12 miles), and it's a 2 loop course making it very spectator friendly!</p>
        
      <p>RUN: a flat 2 mile run (vs 3 mile sprint course).</p>
      
      <p>The Tri-a-Tri begins at 8:20am Sunday.  $65</p>
    </div>

    <button class="accordion">Splash-n-Dash <img class="icon" src="images/swim_icon.png" alt="Swimming" width="25" height="25"><img class="icon" src="images/run_icon.png" alt="running" width="25" height="25"></button>
  
    <div class="panel">
      <p>An event combining swimming and running for kids from 6-12 years!</p>
      
      <p>The Splash-n-Dash begins at 12 noon Sunday.  The Splash-n-Dash is free if you are with an adult athlete, otherwise $25.  (No swim cap is provided.)</p>
    </div>
    
    <h3>Cost Includes:</h3>
    <ul>
      <li>Food and Beer</li>
      <li>Access to the weekend's live Entertainment and Fitness Expo</li>
      <li>Commemorative Finisher medal</li>
      <li>Accurate Chip Timing for competitive races</li>
      <li>Ace in the Hole MultiSport Weekend Tech Shirt (guaranteed to pre-registered participants only)</li>
      <li>Post-event party and entertainment</li>
    </ul>
    
  </main>

  <aside id="packet">
    <?php include 'php/packets.php'; ?>
  </aside>

  <aside id="social">
    <?php include 'php/social_feeds.php'; ?>
  </aside>

<footer>
  <script src="js/accordian.js"></script>
  <?php include 'php/footer.php'; ?>
</footer>

</body>

</html>