<?php get_header(); ?>

	<!-- Displays everything that goes into the content of the front page. -->
	<div class="epanel epanel-1">
		<?php get_template_part( '/front-page-templates/template', 'frontpage-loop-content' ); ?>
	</div>

	<!-- Displays child and grand-child pages of the front page. -->
	<div class="epanel epanel-2">
		<?php get_template_part( '/front-page-templates/template', 'euclid-child-pages' ); ?>
	</div>

<?php get_footer(); ?>