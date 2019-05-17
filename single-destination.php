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
		
		echo "<div class= 'taxonomies'>";
        echo "<h2 class= taxonomy-title>Price</h2>";
        $terms = get_the_terms( get_the_ID(), 'price_range' );
            foreach($terms as $term){
            echo "<p>";
              echo $term->name;
            echo "</p>";
            }
        echo "<h2 class= taxonomy-title>Rating</h2>";
        $terms = get_the_terms( get_the_ID(), 'rating' );
            foreach($terms as $term){
              echo "<p>";
              echo $term->name;
            echo "</p>";
            }
        echo "</div>";
        }
    echo "</div>";
	}	
get_footer(); ?>