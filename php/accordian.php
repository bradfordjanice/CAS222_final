<!--
File Name: accordian.php
Date: 03/10/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events template

Code modified from https://www.w3schools.com/howto/howto_js_accordion.asp
-->

<?php
  
  echo '<h3>Saturday Events</h3>' . "\r\n";

  echo '<button class="accordion">Long Course Triathlon   <img src="images/swim_icon.png" width="25" height="25">  <img src="images/bike_icon.png" width="25" height="25">  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '  <p>SWIM – 1.2mi - Participants will make two counter-clockwise loops. Large buoys will mark the turn points. Kayakers will be positioned on the water to support the swimmers. Medical support will be present on the beach.</p>' . "\r\n";
  echo '  <p>BIKE – 58 Miles: A scenic point-to-point course that travels over gently rolling hills prior to three hard climbs. The bike course will be marked with large directional signage and there will be course marshals at key intersections to help direct you.</p>' . "\r\n";
  echo '  <p>RUN – 13.1mi - A mostly flat loop course on widely paved bike paths that traverse through and around this beautiful and scenic destination resort (two hills total with a minimal elevation gain).</p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<button class="accordion">Olympic Triathlon   <img src="images/swim_icon.png" width="25" height="25">  <img src="images/bike_icon.png" width="25" height="25">  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the Olympic Triathlon, price, 3 parts (swim, bike, run), starting time.</p>' . "\r\n";
  echo '  <p></p>' . "\r\n";
  echo '  <p></p>' . "\r\n";
  echo '  <p></p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<button class="accordion">10K  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the 10K, price, description, starting time.</p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<button class="accordion">Half Marathon  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the Half Marathon, price, starting time, description.</p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<h3>Sunday Events</h3>' . "\r\n";

  echo '<button class="accordion">Sprint Triathlon   <img src="images/swim_icon.png" width="25" height="25">  <img src="images/bike_icon.png" width="25" height="25">  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the Sprint Triathlon, price, 3 parts (swim, bike, run), course details, starting time.</p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<button class="accordion">Tri-a-Tri   <img src="images/swim_icon.png" width="25" height="25">  <img src="images/bike_icon.png" width="25" height="25">  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the Tri-a-Tri, price, 3 parts (swim, bike, run), course details, starting time.</p>' . "\r\n";
  echo '</div>' . "\r\n";

  echo '<button class="accordion">Splash-n-Dash   <img src="images/swim_icon.png" width="25" height="25">  <img src="images/run_icon.png" width="25" height="25"></button>' . "\r\n";
  echo '<div class="panel">' . "\r\n";
  echo '<p>Description of the Splash-n-Dash, price, age requirements, need description, starting time.</p>' . "\r\n";
  echo '</div>' . "\r\n";
  
?>