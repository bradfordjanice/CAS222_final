/*
File Name: social_feeds.php
Date: 03/08/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events


https://www.facebook.com/cas222cascade/
*/

<div id="fb-root"></div>
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));