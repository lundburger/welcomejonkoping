<?php get_header(); ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<div class="fpcontainer">
<div class="herotxt">
	<h1>WELCOME JONKOPING</H1>
</div>
<?php
if(have_posts()) {
	while(have_posts()) {
		the_post();
		the_content();
	}
	?>
	<h2 class="latest-heading">Latest additions</h2>
	<?php
	
	//Displaying for latest posts for Destination
	$args = array(
			'post_type' => 'destination',
			'post_status' => 'publish',
			'posts_per_page' => 1,
	);
	//The query
	$query = new WP_Query($args);
		if ($query->have_posts()) {
			echo "<div class='latest'>";
			while ($query->have_posts()) {
			$query->the_post();
			echo "<h2 class='latest-title'>";
			the_title();
			echo "</h2>";
			the_excerpt();
			the_post_thumbnail('desktop_single');
			?>
			<a href="<?php the_permalink();?>" class="button-latest">See more</a>
			<?php
			}
			echo "</div>";
		}
			else {
				echo "There are no posts to be shown";
			}
			wp_reset_postdata();
	
	//Displaying for latest posts for Food & Beverages
	$args = array(
			'post_type' => 'food',
			'post_status' => 'publish',
			'posts_per_page' => 1,
	);
	//The query
	$query = new WP_Query($args);
		if ($query->have_posts()) {
			echo "<div class='latest'>";
			while ($query->have_posts()) {
			$query->the_post();
			echo "<h2 class='latest-title'>";
			the_title();
			echo "</h2>";
			the_excerpt();
			the_post_thumbnail('desktop_single');
			?>
			<a href="<?php the_permalink();?>" class="button-latest">See more</a>
			<?php
			}
			echo "</div>";
		}
			else {
				echo "There are no posts to be shown";
			}
			wp_reset_postdata();
	
	//Displaying for latest posts for Activities
	$args = array(
			'post_type' => 'activities',
			'post_status' => 'publish',
			'posts_per_page' => 1,
	);
	//The query
	$query = new WP_Query($args);
		if ($query->have_posts()) {
			echo "<div class='latest'>";
			while ($query->have_posts()) {
			$query->the_post();
			echo "<h2 class='latest-title'>";
			the_title();
			echo "</h2>";
			the_excerpt();
			the_post_thumbnail('desktop_single');
			?>
			<a href="<?php the_permalink();?>" class="button-latest">See more</a>
			<?php
			}
			echo "</div>";
		}
			else {
				echo "There are no posts to be shown";
			}
			wp_reset_postdata();
}
get_footer();
?>
