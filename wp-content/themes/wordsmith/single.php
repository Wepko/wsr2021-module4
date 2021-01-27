<?php get_header() ?>

<div>
	<div class="container">
		<div class="row">
				<?php the_post() ?>
				<h1><?php the_title() ?></h1>
				<div><?php the_date('j F Y') ?></div>
				<div><?php the_content() ?></div>
				<div><?php the_category() ?></div>
				<div><?php the_tags() ?></div>
		</div>
	</div>
</div>
<?php get_footer() ?>

