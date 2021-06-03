
   <footer class="footer">
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

             <?php
                $args = array(
                    'menu' => 'top-menu',
                    'menu_class' => 'top_menu',
                    'container'=>'false',
                );
                wp_nav_menu($args);
                ?>
       </div>

       <div class="wr_flex">
         <div class="l_block">
           <div class="half_block">
              <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
                <p><?php echo get_option('phone3')?></p>
                <p><?php echo get_option('phone2')?></p>
              <?php endif; ?>
              
              <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
                <p><?php echo get_option('phone13')?></p>
                <p><?php echo get_option('phone12')?></p>
              <?php endif; ?>

              
           </div>
           <div class="half_block h_center">
             <p><a href="tel:<?php echo get_option('telefon')?>"><?php echo get_option('telefon')?></a></p>
             <p><a href="tel:<?php echo get_option('telefon2')?>"><?php echo get_option('telefon2')?></a></p>
           </div>
         </div>
         <div class="r_block">
           <p><a href="mailto:info@mail.com.ua"><?php echo get_option('mail')?></a></p>
           <div class="soc_icon">
             <a href="<?php echo get_option('facebook')?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
             <a href="<?php echo get_option('instagram')?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
           </div>
           
         </div>
       </div>
       <hr>
       <div class="wr_flex">
       	<p class="copy">© SPAZIO 2019. All Rights Reserved</p>
       	<p>Development by <a href="">Khatuncev Valeriy</a> </p>
       </div>
     </div>
   </footer>
  </body>
</html>

<?php wp_footer(); ?>

</body>
</html>
