/* Mise en place de la vidéo bannière */

  window.addEventListener('load', function() {
    var video = document.getElementById('myVideo');
    video.play();
});

window.addEventListener('scroll', function() {
  var logo = document.querySelector('.container img');
  var story = document.querySelector('#story');
  
  var top = story.getBoundingClientRect().top;
  
  if(top < window.innerHeight) {
    logo.style.top = '0';
  } else {
    logo.style.top = '30%';
  }
});

/* Mouvement des nuages */


var controller = new ScrollMagic.Controller();
var tween = gsap.to("#animatedImage", 1, {x: "-300px"});

var scene = new ScrollMagic.Scene({
    triggerElement: "#place",
    duration: "100%"
})
.setTween(tween)
.addTo(controller);

/* Menu hamburger */

var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = openNav;
closeBtn.onclick = closeNav;

/* Set the width of the side navigation to 250px */
function openNav() {
  sidenav.classList.add("active");
}

/* Set the width of the side navigation to 0 */
function closeNav() {
  sidenav.classList.remove("active");
}
