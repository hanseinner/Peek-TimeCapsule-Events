 

//Click function for Lets Get Started button
 $('button#getstarted').click(function() {
 	document.location.href = 'contact.php';
 });
 
 //Click function for Carousel Tours button
 $('button#caro_tours').click(function() {
 	document.location.href = 'tours.php';
 });
 
 //Click function for Carousel Corporate button
 $('button#caro_corp').click(function() {
 	document.location.href = 'corporate.php';
 });
 
 //Click function for Carousel Special button
 $('button#caro_special').click(function() {
 	document.location.href = 'special.php';
 });
 
 
 //Speed adjustment for carousel
 $('.carousel').carousel({
  interval: 5000
  
})



