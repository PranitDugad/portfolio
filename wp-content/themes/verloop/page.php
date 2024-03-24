<?php
get_header();
the_post();
?>

<div class="main-page">
	<div class="container">
		<div class="page-title">
			<h1>
				<?php the_title(); ?>
			</h1>
		</div>
		<div class="page-content">
			<?php
			the_content();
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>