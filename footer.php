<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Fleurs_d\'oranger_&_Chats_errants
 */

?>

	<footer id="colophon" class="site-footer">
        <ul>
            <li><a href="#">Mentions Légales</a></li>
            <li><a href="#">STUDIO KOUKAKI</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

<style>

.site-footer {
  position: relative;
  display: flex;
  padding-top: 18em;
  padding-bottom: 1em;
  overflow: hidden;
}

.site-footer ul {
  padding: 0;
  margin: 0;
  display: flex;
  width: 100%;
  list-style-type: none;
}

.site-footer ul li {
  flex: 1;
  text-align: center;
}

.site-footer ul li a {
  text-decoration: none;
  color: black;
  font-size: 1em;
  text-shadow: none;
  transition: none;
}

.site-footer-image {
  position: absolute;
  left: calc(50% - 323px);
  bottom: -28.5em;
  z-index: -1;
}

.site-footer-image::after {
  content: url("./assets/images/hibiscus_footer.png");
}


.site-footer::before,
.site-footer::after {
  display: none;
}
</style>
