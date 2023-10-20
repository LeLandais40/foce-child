
<swiper-container class="mySwiper" effect="coverflow" grab-cursor="true" centered-slides="true"
    slides-per-view="auto" coverflow-effect-rotate="0" coverflow-effect-stretch="0" coverflow-effect-depth="100"
    coverflow-effect-modifier="1" coverflow-effect-slide-shadows="false">
    <swiper-slide>
      <img src=" wp-content/uploads/2022/06/Kawaneko.png" alt="Kawaneko"/><p>Kawaneko</p>
    </swiper-slide>
    <swiper-slide>
      <img src="wp-content/uploads/2022/06/Orenjiiro-1.png" alt="Orenjiiro"/><p>Orenjiiro</p>
    </swiper-slide>
    <swiper-slide>
      <img src="wp-content/uploads/2022/06/Pinku-1.png" alt="Pinku"/><p>Pinku</p>
    </swiper-slide>
    <swiper-slide>
      <img src="wp-content/uploads/2022/06/Tenshi-1.png" alt="Tenshi"/><p>Tenshi</p>
    </swiper-slide>
    <swiper-slide>
      <img src="wp-content/uploads/2022/06/Jaakuna-1.png" alt="Jaakuna"/><p>Jaakuna</p>
    </swiper-slide>
    <div id="imageName"></div>
  </swiper-container>

  <style>
    html, body {
	 position: relative;
	 height: 100%;
}
 body {
	 background: #eee;
	 font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
	 font-size: 14px;
	 margin: 0;
	 padding: 0;
}
 swiper-container {
	 width: 100%;
	 padding-top: 50px;
	 padding-bottom: 50px;
}
 swiper-slide {
	 background-position: center;
	 background-size: cover;
	 width: 300px;
	 height: 300px;
}
 swiper-slide img {
	 display: block;
	 width: 80%;
}
 swiper-slide p {
	 text-align: center;
	/* Centre le texte */
	 color: #000;
	/* Change la couleur du texte */
	 position: absolute;
	 bottom: 20px;
	 margin-left: 85px;
	 font-size: 16px;
	 font-weight: bold;
}
 
  </style>

<?php
$images = array(
    array('src' => 'wp-content/uploads/2022/06/Kawaneko.png', 'alt' => 'Kawaneko', 'name' => 'Kawaneko'),
    // Ajoutez vos autres images ici
);
?>

  <script>
  var swiper = new Swiper('.mySwiper', {
    // Vos options Swiper ici
  });

  // Ajoutez un gestionnaire d'événements pour l'événement slideChange
  swiper.on('slideChange', function () {
    // Obtenez le nom de l'image du slide actuel
    var imageName = swiper.slides[swiper.activeIndex].querySelector('p').textContent;

    // Mettez à jour l'élément HTML avec le nom de l'image
    document.getElementById('imageName').textContent = imageName;
  });
</script>

