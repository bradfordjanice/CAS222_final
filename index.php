<!--
File Name: index.php
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
  
<script src="js/menu.js"></script>

<style>
  /* use to outline blocks while styling and debugging
  { outline: 1px solid red !important } */
</style>
    
</head>

<body>
  <!-- facebook widget -->
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
  </header>

  <nav class="topnav" id="myTopnav">
    <a target="_self" href="#home" class="active">Home</a>
    <a target="_self" href="events.php">Events</a>
    <a target="_self" href="registration.php">Registration</a>
    <a target="_self" href="contact.php">Contact</a>
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction(); return false;">&#9776;</a>
  </nav>

  <article id="weather">
    <?php include 'php/weather.php'; ?>
    <script src="js/weather.js"></script>
  </article>

  <article id="photograph">
    <img src="images/triathlon_photo_mobile.jpg" style="width:100%">
  </article>
  
  <article id="slideshow">
    <?php include 'php/slide_show.php'; ?>
    <script src="js/slideShow.js"></script>
  </article>

  <main id="content">
    <h2>Multisport Events Weekend</h2>
    
    <h3>March 24th and 25th, 2018</h3>

    <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.</p>

    <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
    
    <p>There will be a Live Entertainment and Fitness Expo, and a post-event party.</p>
    
    <h3>FAQs</h3>
    
    <p><span style="text-decoration:underline">What are the Rules?</span> We currently adhere to the USAT Rules for Triathlon and Duathlon.  Important rules include no drafting, you must wear a helmet and music is ABSOLUTELY NOT allowed during the bike for obvious safety reasons.</p>
    
    <p><span style="text-decoration:underline">Can I use a personal music device while cycling?</span> Absolutely no music devices are allowed during the bike segment for obvious safety risks and will result in immediate disqualification.</p>
    
    <p><span style="text-decoration:underline">Can I use a personal music device while running?</span> During any running segments, we prefer for athletes to NOT use music devices to maximize safety, assure a fair competitive environment and assure athletes can hear all course marshal instructions. With that said, we also understand that many athletes rely on music to help endure the challenge of running. To accommodate the needs of our athletes while still assuring maximum safety and a fair, competitive environment, we can accomodate using a single ear bud.  There are more details in the Registration Packet.</p>
    
    <p><span style="text-decoration:underline">Do I need to wear a wetsuit?</span>  No, you do not need to wear a wetsuit. Many will not wear a wetsuit while others will choose to wear a wetsuit because of the buoyancy and warmth factor. Water temperature is expected to be between 62 – 66 degrees. The temperature will be taken on Friday and the morning of the race.</p>
    
    <p><span style="text-decoration:underline">Do I have to use a road or racing bike?</span>  No. We welcome any type of bike as long as it is functioning properly with brakes and endcaps at the end of your handlebars.</p>
    
    <h3>What to Bring</h3>
    
    <p>All of this information, and more, will be included in the Registration Packet.</p>
    
    <p><span style="text-decoration:underline">Chip Timing Piece:</span> You will be given a Chip Timing Piece and a band to hold it around your ankle throughout the entire event.</p>
    
    <p><span style="text-decoration:underline">Swimming:</span> Wetsuits are recommended, but optional. We will provide you with a swim cap but you will want to bring your own goggles.</p>
    
    <p><span style="text-decoration:underline">Biking:</span> A biking helmet is mandatory.  You will also receive 2 stickers in your package with your race number on them.  The small sticker should go on the front of your helmet.  The bigger sticker will wrap around your bike frame.  Road or mountain bikes are acceptable.  For safety reasons, be sure to have end-caps on the end of your handle-bars.</p>
    
    <p><span style="text-decoration:underline">Running:</span> You must finish the race with your bib number on the front of you.  Some people choose to pin it on at the beginning of the race and have it on for the whole event so they don’t have to worry about it.  Others pin it on a singlet that they put on once they finish the swim before they head out for the bike.  Others use an elastic racing strap that they pin their bib number to and then quickly strap it on before they leave for the run.  Use whatever option feels best for you.</p>
    
    <p><span style="text-decoration:underline">Clothes:</span> Remember to bring a change of clothing so you can enjoy the post-event festivities! </p>

  </main>

  <aside id="packet">
    <?php include 'php/packets.php'; ?>
  </aside>

  <aside id="social">
    <?php include 'php/social_feeds.php'; ?>
  </aside>

  <footer>
    <?php include 'php/footer.php'; ?>
  </footer>

</body>

</html>