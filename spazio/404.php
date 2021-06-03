<?php get_header();?>

 <main class="main">
 	
 	<div class="container">
 		<div class="not_page">
		 <?php if(ICL_LANGUAGE_CODE=='ru'): ?>
          <p>Такой страницы не существует</p>
        <?php endif; ?>
        
        <?php if(ICL_LANGUAGE_CODE=='uk'): ?>
          <p>Такої сторінки не існує </p>
        <?php endif; ?>
        
 		</div>
 	</div>
 </main>

<?php get_footer();
