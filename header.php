<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	
	<title>
    <?php 
        if (is_home()) {
            echo "Homepage";
        }
        wp_title("", true, "right"); 
    ?>
    </title>
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<meta property="og:url" content="https://www.eroforestiero.org"  />
	<meta property="og:title" content="Ero Forestiero — Imparare l'italiano si può ed è anche gratis!" />
  <meta property="og:description" content="Ero Forestiero è un’associazione senza scopo di lucro, apartitica e 
  apolitica che svolge attività formative a favore dell’integrazione sociale delle persone di origine non italiana 
  presenti sul territorio di Vigevano, ponendo particolare attenzione alla tutela della loro identità culturale e religiosa." />
	<meta property="og:image" content="https://i.imgur.com/sRcWZR7.png" />
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/main.css" type="text/css" media="all" />
    
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
  
<?php wp_body_open(); ?>

<!-- Navbar -->
    <header class="website-header">
        <div class="donate-div">
            <p>Sostieni il progetto, dona il tuo cinque per mille dell'Irpef indicando il codice fiscale: <b>940205901181</b></p>
        </div>

        <a href=""> <img src="https://www.countryflags.io/gb/flat/64.png" alt="English flag"> </a>

        <div class="header-navbar noselect">
            <span class="page-logo">Ero <span class="page-logo black-logo">Forestiero</span> </span>

            <a href="mailto:eroforestieroodv@gmail.com" class="button green-outline_button">Contattaci</a>
        </div>
    </header>
<!-- End Navbar-->
