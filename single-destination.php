<?php get_header(); ?>

<?php
if(have_posts()) {
	while(have_posts()) {
	echo '<div class="article">';
		the_post();
		the_post_thumbnail('desktop_single');
	echo '<h2 class= "article-title">';
		the_title();
	echo '</h2>';
		the_content();
	echo '</div>';
	}	
}
get_footer(); ?>