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
}

get_footer();
?>
