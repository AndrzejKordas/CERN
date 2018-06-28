<?php

/********************************************************************************************

									REJESTRACJA MENU

*********************************************************************************************/


function register_my_menus() {
	register_nav_menus(array(
	'TopMenu' => __('Menu w topie'),
    'FooterMenu' => __( 'Menu w stopce' ),    
    'extra-menu' => __( 'Extra Menu' )
	));
	
}
add_action( 'init', 'register_my_menus' );


/********************************************************************************************

									WCZYTYWANIE SKRYPTÓW I ARKUSZY

*********************************************************************************************/



function load_styles_and_scripts() {
  //wczytywanie CSS
  wp_enqueue_style (
    'bootstrap-styles',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css'
  );

  wp_enqueue_style (
    'CERN',
    get_template_directory_uri() . '/style.css'
  );


  // wczytywanie JS
  wp_enqueue_script (
    'jquery',
    'https://code.jquery.com/jquery-3.2.1.slim.min.js',
	false,
    '1.11.0',
    true
  );
  
 wp_enqueue_script (
			'Galeria',
			 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js',
			 array('jquery'),
			'1.2',
			true
		  ); 
		  
  wp_enqueue_script (
    'bootstrap-scripts',
    'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js',
	array('jquery'),
    '3.2.0',
    true
  );



 
  
}

add_action('wp_enqueue_scripts', 'load_styles_and_scripts');

/********************************************************************************************

									OBRAZKI WYRÓŻNIAJĄCE

*********************************************************************************************/

add_theme_support( 'post-thumbnails');	

/********************************************************************************************

									REJESTRACJA WIGETÓW

*********************************************************************************************/

add_action('widgets_init', 'smashing_register_sidebars');
function smashing_register_sidebars(){
	register_sidebar();
	register_sidebar(array('id' => 'lid1', 'name' => 'pierwsze pole tekstowe na strone główną'));
	register_sidebar(array('id' => 'lid2', 'name' => 'drugie pole tekstowe na strone główną'));
	register_sidebar(array('id' => 'lid3', 'name' => 'trzecie tekstowe na strone główną'));
	register_sidebar(array('id' => 'produkty', 'name' => 'Menu produktowe', 'before_widget' => '<h1>', 'after_widget' => '</h1>'));
	register_sidebar(array('id' => 'o-firmie', 'name' => 'O firmie', 'before_widget' => '<p id="o-projekcie">', 'after_widget' => '</p>', 'before_title' => '<h1 class="tytul">', 'after_title' => '</h1>'));
	}

add_action('cos','mojeCos');
function mojeCos(){
	?>
    <script>
	
	var aktu = new Date();
	var aktuDzien = aktu.getDate();
	var dzien = parseFloat(aktuDzien);
	var ele = document.getElementById("xxx");
	var blok = document.getElementById("tresc");
	
	ele.addEventListener('click',rusz);

	function rusz(e){
		
		blok.innerHTML = dzien;
		
		}
	
	</script>
	<?php
	}
	
?>