<?php get_header(); ?>

<div class="row">
<?php

$postIterator = 1;

while(have_posts()){

	the_post();?>

    <article class="col-<?php if($postIterator == 1){echo'12';} else {echo '6';} ?>"><?php

	get_template_part('partials/content','front');

	$postIterator++;
	?>
    </article><?php

}

?>
<?php get_footer(); ?>
</div>
