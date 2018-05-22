<?php get_header(); ?>
<p>sztos</p>
<?php

while(have_posts()){
	the_post();
	get_template_part('partials/content');
}

?>
<?php get_footer(); ?>
