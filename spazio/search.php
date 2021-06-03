<?php get_header();

	$search = get_search_query();
    $posts_per_page = 10;

    $args = array(
        'posts_per_page'    => $posts_per_page,
        's'                 => $search,
        'paged'             => get_query_var('paged') ? get_query_var('paged') : 1
    );
    $the_query = new WP_Query($args);
?>

		<main class="main">
				<div class="container mt20">
                    <h1 class="top_title">Запрос по результату "<?php echo $search; ?>"</h1>
                            <?php 
                                if($the_query->have_posts()) {
                                    while ( $the_query->have_posts() ) {
                                        $the_query->the_post(); ?>
                                
                                            <div class="search_cont">
                                                <p class="title"><?php the_title();?></p>
                                                
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php if(get_the_post_thumbnail()){
                                                        the_post_thumbnail();
                                                    } ?> 
                                                </a>
                                                
                                                <p class="search_content"><?php the_content();?></p>

                                            </div>            
                                    <?php }
                                }else{
                                    echo '<div class="books-not-found">По вашему запросу нет результатов</div>';
                                } 
                            ?>
                        </div>
                        <div class="category-pagination">
                            <?php
                                $big = 999999999;
                                echo paginate_links( array(
                                    'base'      => str_replace($big, '%#%', get_pagenum_link($big )),
                                    'format'    => '?paged=%#%',
                                    'current'   => max( 1, get_query_var('paged') ),
                                    'total'     => $the_query->max_num_pages,
                                    'type'      => 'list',
                                    'prev_text' => '<i class="fas fa-caret-left"></i>',
                                    'next_text' => '<i class="fas fa-caret-right"></i>'
                                ));
                            ?>
                        </div>
		</main><!-- #main -->
	

<?php get_footer();
