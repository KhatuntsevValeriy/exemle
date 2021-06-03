


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    	<?php wp_head(); ?>
  </head>
  <body>

  <header class="header">
       <div class="top_head">
        <div class="container">
         <div class="wr_flex">

           <div class="wr_logo">
              <a href="<?php echo get_bloginfo('url'); ?>" >
                <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
                  <div class="t_logo"><?php echo get_option('phone1')?></div>
                  <p class="top_title"><?php echo get_option('salon')?></p>
                <?php endif; ?>
                
                <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
                  <div class="t_logo"><?php echo get_option('phone1')?></div>
                  <p class="top_title"><?php echo get_option('phone11')?></p>
                <?php endif; ?>
              </a>
            </div>



           <div class="top_box_tel">
           	<img src="<?= get_template_directory_uri().'/img/kievstar-icon.png' ?>" alt="alt" class="kiev_icon">
           	<img src="<?= get_template_directory_uri().'/img/vodafone-icon.png' ?>" alt="alt" class="vodafone_icon">
           	<a href="tel:<?php echo get_option('telefon')?>"><?php echo get_option('telefon')?></a>
            <a href="tel:<?php echo get_option('telefon2')?>"><?php echo get_option('telefon2')?></a>
           	
           </div>

         </div>
                <div class="search_bar">
                  <i class="fa fa-search" aria-hidden="true"></i>
                  <i class="fa fa-times" aria-hidden="true"></i>
                  <?php get_search_form(); ?>
                </div>

        </div>
       </div>
        
          <div class="bott_head">

            <div class="wr_logo">
              <a href="<?php echo get_bloginfo('url'); ?>" >
                <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
                  <div class="t_logo"><?php echo get_option('phone1')?></div>
                  <p class="top_title"><?php echo get_option('salon')?></p>
                <?php endif; ?>
                
                <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
                  <div class="t_logo"><?php echo get_option('phone1')?></div>
                  <p class="top_title"><?php echo get_option('phone11')?></p>
                <?php endif; ?>
              </a>
            </div>

            <div class="container">
              
              <?php
                $args = array(
                    'menu' => 'top-menu',
                    'menu_class' => 'top_menu',
                    'container'=>'false',
                );
                wp_nav_menu($args);
                ?>

               <div class="menu_icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>

                <div class="mob_sidebar">

                  <div class="search_box">
                    <?php get_search_form(); ?>
                      <!-- <input type="text" placeholder="Найти"> -->
                  </div>

                  <?php
                  $args = array(
                      'menu' => 'top-menu',
                      'menu_class' => 'top_list',
                      'container'=>'false',
                  );
                  wp_nav_menu($args);
                  ?>

                  <?php  do_action('wpml_add_language_selector'); ?>
                </div>
          </div>
        </div>
  </header>

