<a class="titresite" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
<div id="mySidenav" class="sidenav">
  <div id="site-navigation" class="main-navigation">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
    <a  id="closeBtn" href="#" class="close" >×</a>
  </div>
  <ul> 
    <img class="logomenu" src="http://localhost/Koukaki/wp-content/themes/foce/assets/images/logo.png" alt="logo Fleurs d'oranger &amp; chats errants">
  <li>  
    <img class="orchid" src="wp-content\themes\foce\assets\images\orchid.png" alt="orchide">
    <img class="chatviolet" src="wp-content\themes\foce\assets\images\cat@2x.png" alt="Chatviolet">
    	<a class="orchide" href="#story">Histoire</a>
    <img class="sunflower" src="wp-content\themes\foce\assets\images\Sunflower.png" alt="Sunflower">
  </li>
  <li>
    <img class="flower" src="wp-content\themes\foce\assets\images\flower.png" alt="flower">
    	<a class="perso" href="#characters">Personnages</a>
    <img class="randomflower" src="wp-content\themes\foce\assets\images\random_flower.png" alt="randomflower">
  </li>
  <li>
    	<a class="place" href="#place">Lieu</a>
    <img class="chatgris" src="wp-content\themes\foce\assets\images\Group180.png" alt="chat gris">
  </li>
  <li>
    <img class="chatorange" src="wp-content\themes\foce\assets\images\cat.png" alt="chat orange">
    	<a class="studio" href="#studio">Studio Koukaki</a>
    <img class="hibiscus" src="wp-content\themes\foce\assets\images\hibiscus_footer.png" alt="hibiscus">
  </li>
  </ul>
  <p class="titlemenu">Studio Koukaki</p>
</div>

<a href="#" id="openBtn">
  <span class="burger-icon">
    <span></span>
    <span></span>
    <span></span>
  </span>
</a>


<style>
.perso {
	 margin-left: 100px;
}
 .place {
	 margin-left: 150px;
}
 .titresite {
	 font-size: 40px;
	 text-decoration: none;
	 background-color: #ffd5a2;
}
 .logomenu {
	 width: 10%;
}
 .main-navigation li {
	 position: relative;
	 font-size: 14px;
	 display: flex;
	 align-items: center;
	 width: 100%;
}
/* Sidenav menu */
 .sidenav {
	 height: 100%;
	 width: 250px;
	 position: fixed;
	 z-index: 1;
	 top: 0;
	 left: -250px;
	 background-color: #e8e8e8;
	 transition: left 0.5s ease;
	 visibility: hidden;
	 overflow: hidden;
}
/* Sidenav menu links */
 .sidenav a {
	 padding: 8px 8px 8px 32px;
	 text-decoration: none;
	 font-size: 60px;
	 display: block;
	 text-shadow: 0px 0px 14px 0px #ff5c00;
	 color: #111;
}
 .sidenav ul {
	 display: flex;
	 flex-direction: column;
	 list-style-type: none;
	 padding: 0;
	 margin: 0;
}
/* Active class */
 .sidenav.active {
	 left: 0;
	 width: 100%;
	 visibility: visible;
}
 html {
	 overflow-y: hidden;
}
/* Close btn */
 .sidenav .close {
	 display: flex;
	 font-size: 36px;
	 background: #ffd5a2;
	 width: 5%;
}
/* Icône burger */
 .burger-icon span {
	 display: block;
	 width: 35px;
	 height: 5px;
	 background-color: black;
	 margin: 6px 0;
}
 .main-navigation {
	 display: flex;
	 align-items: center;
}
 .main-navigation a {
	 text-align: center;
	 width: 100%;
}
 .main-navigation ul {
	 height: 70%;
	 padding-top: 50px;
}
 #openBtn {
	 width: 5%;
}
 ul li a:hover {
	 text-shadow: 0px 0px 20px #ff5c00;
	 font-size: 60px;
}
 .main-navigation.active {
	 display: block;
	 position: fixed;
	 top: 0;
	 left: 0;
}
 .titlemenu {
	 display: flex;
	 justify-content: space-around;
	 padding-top: 250px;
}
a.orchide {
  href: #story;
}
a.perso {
  href: #characters;
}
a.place {
  href: #place;
}
a.hibiscus {
  href: #studio;
}

/* Media query pour les appareils mobiles */
@media (min-width: 768px) {
	.orchid, .sunflower, .flower, .randomflower, .hibiscus {
	 animation: spin 5s linear infinite;
}
 @keyframes spin {
	 0% {
		 transform: rotate(0deg);
	}
	 100% {
		 transform: rotate(360deg);
	}
}
 .chatviolet, .chatorange, .chatgris {
	 animation: float 4s ease-in-out infinite;
}

.orchid, .chatviolet, .sunflower {
	 display: inline-block;
}
 .orchid, .chatviolet {
	 float: left;
}
 .orchid {
	 position: absolute;
	 width: 172.57px;
	 height: 168.24px;
	 bottom: 152px;
	 left: -59px;
}
 .chatviolet {
	 position: fixed;
	 width: 110px;
	 height: 99px;
	 top: 200px;
	 left: 450px;
}
 .sunflower {
	 position: inherit;
	 float: right;
	 width: 216px;
	 height: 216px;
	 bottom: 80px;
	 right: 250px;
}
 .flower, .randomflower {
	 display: inline-block;
}
 .flower {
	 float: left;
	 width: 70.76px;
	 height: 70.76px;
	 top: 500px;
	 left: 260px;
	 border: 0.9px;
	 position: fixed;
}
 .randomflower {
	 position: inherit;
	 float: right;
	 width: 80px;
	 height: 80px;
	 left: 30px;
}
 .chatgris {
	 position: inherit;
	 width: 155px;
	 height: 155px;
	 right: 250px;
}
 .chatorange {
	 position: fixed;
	 float: left;
	 width: 105.91px;
	 height: 95.65px;
	 top: 827.95px;
	 left: 79px;
}
 .hibiscus {
	 right: -300px;
	 top: 100px;
	 position: absolute;
	 height: 626px;
	 width: 626px;
}
 .orchide {
	 text-align: center;
	 margin-left: 220px;
}
}

@media (max-width: 768px) {
  .titresite {
    font-size: 20px;
  }
  h2 , h3 {
	display: flex;
	justify-content: center;
	background-color: transparent;
	font-size: 25px;
  }
  .sidenav a {
	font-size: 20px;
}
  a#closeBtn {
    width: 25%;
    text-align: center;
  }
  a#openBtn {
    width: 15%;
    margin: 0 auto;
  }
  .logomenu {
	width: 30%;
	bottom: 50px;
	position: relative;
  }
  ul {
	display: flex;
	flex-direction: column;
	align-items: center;
	width: 100%;
  }
  li {
	width: 100%;
	margin-bottom: 10px;
  }
  img {
	max-width: 100%;
  }
  a {
	font-size: 20px;
  }
  a.orchide {
	position: absolute;
	right:10px;
	font-size: 50px;
  }
  a.perso {
	position: relative;
	right: 55px;
	font-size: 50px;
	top: 20px;
  }
  a.place {
	position: relative;
	right: 90px;
	font-size: 50px;
  }
  a.studio {
	position: relative;
	right: 10px;
	font-size: 50px;
  }
  .titlemenu {
	text-align: center;
  }
	.orchid {
		display: none;
	}
	.chatviolet {
		display: none;
	}
	.sunflower {
		display:none;
	}
	.chatgris {
		display: none;
	}
	.flower {
		display: none;
	}
	.chatorange {
		display: none;
	}
	.hibiscus {
		display: none;
	}
	.randomflower {
		display: none;
	}
}

@media (width: 1024px) {
	.chatviolet {
		left: 250px;
	}
	.sunflower {
		right: 50px;
	}
	.sidenav a {
		font-size: 40px;
	}
	.sidenav .close {
		position: relative;
		right: 50px;
	}
}

@media (max-width: 375px) {
  a.orchide {
	font-size: 30px;
  }
  a.perso {
	font-size: 30px;
  }
  a.place {
	font-size: 30px;
  }
  a.studio {
	font-size: 30px;
  }
}
</style>
<script>

/* Menu hamburger */
var sidenav = document.getElementById("mySidenav");
var openBtn = document.getElementById("openBtn");
var closeBtn = document.getElementById("closeBtn");

openBtn.onclick = toggleNav;
closeBtn.onclick = closeNav;

/* Toggle the navigation menu */
function toggleNav() {
  if (sidenav.classList.contains("active")) {
    sidenav.classList.remove("active");
  } else {
    sidenav.classList.add("active");
  }
}

/* Close the navigation menu */
function closeNav() {
  sidenav.classList.remove("active");
}

function scrollToAnchor(id) {
  var element = document.querySelector(id);
  if (element) {
    element.scrollIntoView({ behavior: 'smooth' });
  }
}

$('.sidenav a').click(function () {
  var href = $(this).attr('href');
  var section = ('#','');

  // Fermer le menu
  $('#mySidenav').removeClass('active');

  // Rediriger vers la section spécifiée
  scrollToAnchor(section);

  // Empêcher le lien par défaut
  return false;
});
</script>