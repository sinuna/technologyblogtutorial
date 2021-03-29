<?php get_header();?>

<section class="page-wrap">
<div class="container">
			<h1><?php the_title();?></h1>
			<?php get_template_part('includes/section','blogcontent');?>
			<?php wp_link_pages();?>
</div>
</section>
<?php get_footer();?>