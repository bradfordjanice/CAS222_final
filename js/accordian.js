/*
File Name: accordian.js
Date: 03/10/18
Programmer: Janice Bradford
Project: Ace in the Hole Multisport Events

Code modified from https://www.w3schools.com/howto/howto_js_accordion.asp
*/

var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("activeAccordian");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}