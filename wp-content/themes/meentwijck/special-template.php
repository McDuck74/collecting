<?php

/*
Template Name: Special Layout
*/

get_header();

if (have_posts()) :
	while (have_posts()) : the_post(); ?>

	<article class="post page">
		<h2><?php the_title(); ?></h2>

		<!-- info-box -->
		<div class="info-box"?
			<h4>Disclaimer title</h4>
			<p>Alle tekst op deze website is handmatig opgesteld en niet op basis van de geldende wetgeving gemaakt. <br />
				Het is bedoeld om duidelijkheid te geven aan de lezers van de website. Uiteraard geld bij alle in deze website gebruikt materiaal, dat is zowel de foto's als de tekst dat de Nederlandse Wetgeving van toepassing is.'</p>
		</div>
		<!-- /info-box -->

		<?php the_content(); ?>
	</article>

	<?php
	endwhile;

	else :
		echo '<p>No content found</p>';

	endif;

	get_footer();

?>