<!doctype html>
<html <?php language_attributes(); ?>>

<head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>
        <?php
    //tytul
    wp_title('|', true, 'right');
    //Dodanie nazy bloga
    bloginfo('name');
    ?>
    </title>

    <link rel="pingback" href="<?php wp_enqueue_style ('CERN',get_template_directory_uri() . '/style.css'); ?>">

    <?php
      wp_head();
      
      ?>
</head>

<body>
    <?php
       $scieszka = get_template_directory_uri();
      ?>
        <div class="topMini">
            <div class="container">
                <div class="row justify-content-center">
                   <nav class="navbar navbar-expand-lg navbar-light">
                       
                       <div class="row"><!-- row1 --> 
                       <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo $scieszka; ?>/images/logoCERN.png"></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
                           </button>
                       </div><!-- /row1 --> 
                       
                      
                       <div class="row"> <!-- row2 --> 
                       <div class="collapse navbar-collapse" id="navbarNav">
                            <?php
							wp_nav_menu(array(
								'theme-location'=>'TopMenu',	
								'menu_class' => 'navbar-nav'
								)
							);
						?>

                        </div>
                       </div> <!-- /row2 --> 
                       
                    </nav>
                </div>
            </div>
        </div>
