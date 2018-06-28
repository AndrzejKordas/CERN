<?php

get_header();

?>
      <?php
       $scieszka = get_template_directory_uri();
      ?>
          
          
          
          
          
          

<div class="container tloC">
     <h1>Index</h1>
      <div class="row">
    
    <div class="row kolumny">

        
        
        <?php 
                if ( have_posts() ) : while ( have_posts() ) : 
                    the_post(); 
                    ?>
                   <div class="col-md-4">
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php the_post_thumbnail('thumbnail',array( 'class' => 'd-block mx-auto')); ?>
                    <?php  the_excerpt(); ?>
                  </div>
                <?php endwhile; else: ?>
        <h1>Brak postów</h1>
        <?php endif; ?>
        
        
        
        
    
    </div>

          </div>
    </div>
    
    <?php
    
    get_footer();
    
    ?>