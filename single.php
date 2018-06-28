<?php

get_header();

?>
      <?php
       $scieszka = get_template_directory_uri();
      ?>
          
          
          
          
          
          

<div class="container">
      <div class="row">
    
    <div class="row kolumny">
    <div class="col-md-10">
        <h1><?php the_title(); ?></h1>
        
        <?php 
                if ( have_posts() ) : while ( have_posts() ) : 
                    the_post(); 
                    ?>
                   
                    
                    <?php the_post_thumbnail('thumbnail',array( 'class' => 'd-block mx-auto')); ?>
                    <?php  the_content(); ?>
                  
                <?php endwhile; else: ?>
        <h1>Brak postów</h1>
        <?php endif; ?>
        
        
        
        
    
    </div>
    <div class="col-md-2">
      <p> <img class="obrazek" src="<?php echo $scieszka; ?>/images/art1.jpg"> </p>
      <p> <img class="obrazek" src="<?php echo $scieszka; ?>/images/art2.jpg"> </p>
      <p> <img class="obrazek" src="<?php echo $scieszka; ?>/images/art3.jpg"> </p>
        
        
        </div>
          </div>
    </div>
    
    <?php
    
    get_footer();
    
    ?>