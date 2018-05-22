<?php get_header(); ?>

<div class="row">
    <?php if(have_posts()){ ?>
    <article class="col-12">
        <?php// the_post(); ?>
        <h1><?php //the_tlte(); ?></h1>
    </article>
    <?php } ?>
<?php

while(have_posts()){

	the_post();

	get_template_part('partials/content','front');
}

?>
<?php get_footer(); ?>
</div>
