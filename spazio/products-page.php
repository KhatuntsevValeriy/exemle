
<?php
/*
Template Name: products-page 
*/
?>

<?php 
	get_header(); 
	$args = array( 
		'taxonomies' => 'furniture'
	);
	$categories = get_terms( $args );
?>
	<main class="main">
      <div class="container">
        <div class="product">
            <div class="grid_box mt20">
        		<?php foreach ($categories as $category) { 
				 $img = get_field('add_image', $category);?>
				      <a href="<?php echo get_term_link($category->term_id, 'furniture'); ?>"" class="link_box">
				       <div class="bg_item" style="background-image: url(<?php echo $img; ?>);"></div>
				       <p class="title_news"><?php echo $category->name; ?></p>
				      </a>
				<?php } ?>
			</div>
      	</div>
    </main>

<?php get_footer(); ?>
