<?php
       $scieszka = get_template_directory_uri();
      ?>

    <div class="row pasek justify-content-center">

        <?php
							wp_nav_menu(array(
								'theme-location'=>'FooterMenu',	
								'menu_class' => 'linkiStopka'
								)
							);        
         
?>
         
        <a class="nav-link disabled" href="#"><img src="<?php echo $scieszka; ?>/images/logoFacebook.png"></a>


            <a class="nav-link disabled" href="#"><img src="<?php echo $scieszka; ?>/images/logoTweeter.png"></a>


    </div>
    </div>

    <?php

wp_footer()

?>
    </body>

    </html>
