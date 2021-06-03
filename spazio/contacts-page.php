
<?php
/*
Template Name: contacts-page 
*/
?>

<?php get_header(); ?>

	
  <main class="main">
    <div class="container">
      <div class="wr_flex">
        <div class="bl_contact">
          <div class="contact_info">
            <div class="box_tel">
              <i class="fa fa-phone" aria-hidden="true"></i>

             <p><a href="tel:<?php echo get_option('telefon')?>"><?php echo get_option('telefon')?></a></p>
             <p><a href="tel:<?php echo get_option('telefon2')?>"><?php echo get_option('telefon2')?></a></p>
           </div>
            <div class="adres">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
              <p>
                <p>
                <?php echo get_option('phone3')?>,
                <?php echo get_option('phone2')?>
                </p>


            </div>
            <div class="mail">
              <i class="fa fa-envelope-o" aria-hidden="true"></i>
              <p><p><a href="mailto:<?php echo get_option('mail')?>"><?php echo get_option('mail')?></a></p></p> 
          </div>
          </div>

          <div class="work_schedule">
            <i class="fa fa-clock-o" aria-hidden="true"></i>
            <?php echo get_field('contact')?>
          </div>
        </div>

        <div class="bl_form">
          <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
           <?php echo do_shortcode('[contact-form-7 id="8" title="form"]') ?>
          <?php endif; ?>
          <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
            <?php echo do_shortcode('[contact-form-7 id="247" title="form_ukr"]') ?>
          <?php endif; ?>
        </div>

      </div>
      <div class="map">
        
        <?php if(have_posts()) : while(have_posts()) : the_post();
  	      $contact_slider = get_field('contact_slider');
  	      endwhile;
  	      endif;
  	     ?>

		    <div class="contact_slider owl-carousel owl-theme">
		      <?php if($contact_slider){ ?>
		        <?php foreach($contact_slider as $k=>$item){ ?>   
		         <div class="item_sl" style='background-image: url(<?php echo $item["img_contact"]["url"];?>)'>
			      </div>
		        <?php } ?>
		       <?php } ?>
		    </div>
		    
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5079.79968407418!2d30.493434746032722!3d50.46158975621134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ce70014d43d9%3A0xa77963fd4c074933!2z0YPQuy4g0JPQu9GD0LHQvtGH0LjRhtC60LDRjywgMzIsINCa0LjQtdCyLCAwMjAwMA!5e0!3m2!1sru!2sua!4v1558828596593!5m2!1sru!2sua" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </main>

<?php get_footer(); ?>
