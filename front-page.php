<?php get_header(); ?>

<!-- WordPress Loop to display content of the front page -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php the_content(); ?>
<?php endwhile; endif?>

<?php get_footer(); ?>