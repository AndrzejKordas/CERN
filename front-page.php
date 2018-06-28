<!doctype html>
<html <?php language_attributes(); ?>>
  <head>


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title><?php
    //tytul
    wp_title('|', true, 'right');
    //Dodanie nazy bloga
    bloginfo('name');
    ?></title>
      
      	<link rel="pingback" href="<?php wp_enqueue_style ('CERN',get_template_directory_uri() . '/style.css'); ?>">
      
      <?php
      wp_head();
      
      ?>
  </head>
  <body>
      <?php
       $scieszka = get_template_directory_uri();
      ?>
   <div class="top"> 
      <div class="container">
      
           
          <div class="row justify-content-center">
    
          
      <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="<?php echo home_url();?>"><img src="<?php echo $scieszka; ?>/images/logoCERN.png"></a>
          
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
          
  <div class="collapse navbar-collapse" id="navbarNav">
      
  <?php
							wp_nav_menu(array(
								'theme-location'=>'TopMenu',	
								'menu_class' => 'navbar-nav'
								)
							);
						?>
      
  </div>
</nav>    
          

       </div>
       </div>
      </div>
<div class="container">
      <div class="row">
    
    
    </div>
    <div class="row kolumny">
    <div class="col-md-4">
        <h2>Artykuł 1</h2>
        <img src="<?php echo $scieszka; ?>/images/art1.jpg">
        <p>

        Europejska Organizacja Badań Jądrowych CERN (fr. Organisation Européenne pour la Recherche Nucléaire)
        – ośrodek naukowo-badawczy ... północno-zachodnich przedmieściach Genewy na granicy Szwajcarii i Francji,
        pomiędzy Jeziorem Genewskim a górskim pasmem Jury. 
        </p>
        </div><!-- /col-md-4-->
    <div class="col-md-4">
      <h2>Artykuł 2</h2>
      <img src="<?php echo $scieszka; ?>/images/art2.jpg">
        <p>
        Antymateria – układ antycząstek. Antycząstki to 
        cząstki elementarne podobne do występujących 
        w zwykłej materii (koinomaterii), ale o przeciwnym 
        znaku ładunku elektrycznego oraz wszystkich 
        addytywnych liczb kwantowych (np. izospinu,
        dziwności, liczby barionowej itp).
            </p>
    </div><!-- /col-md-4-->    
    <div class="col-md-4">
        <h2>Artykuł 3</h2>
        <img src="<?php echo $scieszka; ?>/images/art3.jpg">
        <p>
        W latach 1964–1991 Polska jako jedyny kraj bloku wschodniego miała w CERN oficjalny status państwa
        obserwatora (w latach 1954–1961 członkiem CERN była Jugosławia[11]). Pełnoprawnym członkiem CERN Polska została 1 lipca 1991.
        W CERN pracuje około dwustu Polaków, z czego większość na stypendiach.
            </p>
        </div><!-- /col-md-4-->
    </div> 
    <div class="row pasek">
        <div class="col-md-4">
            <div class="obraz">
            <img src="<?php echo $scieszka; ?>/images/art.jpg">
                </div>
        </div>
        <div class="col-md-8">
            <div class="tekst">
            <h2>Artykuł 4</h2>
        <p>10 września 2008 został uruchomiony akcelerator Large Hadron Collider (LHC), który przyspiesza przeciwbieżne wiązki proton-proton (14 TeV) i proton-jądro ołowiu (1150 TeV). Cząstki są w stanie okrążać odziedziczony po LEP-ie tunel o długości dwudziestu siedmiu kilometrów 11 000 razy na sekundę. Tory cząstek zakrzywiają schłodzone helem do 1,9 K (-271,05°C) elektromagnesy, przez które płynie prąd elektryczny o natężeniu do 11 850 A.

Wielki Zderzacz Hadronów ma wielką świetlność (liczbę cząstek w wiązce), dzięki czemu wzrasta prawdopodobieństwo obserwacji interesujących zderzeń. Cztery ogromne detektory (największe wysokości sześciopiętrowego budynku) przy LHC: ATLAS (A Toroidal LHC AparatuS), CMS (Compact Muon Solenoid), ALICE (A Large Ion Collider Experiment), LHCb (Large Hadron Collider beauty).

Fizycy mieli nadzieję, że podczas eksperymentów na LHC zostaną zaobserwowane bozony Higgsa. Potwierdziły się one w 2012 roku.</p>
                </div>
        </div>
    
    </div>
   <?php
get_footer();
?>