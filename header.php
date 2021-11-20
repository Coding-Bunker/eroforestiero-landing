<!DOCTYPE html>
<!-- Definisce la lingua del sito web -->
<html <?php language_attributes(); ?>>
    <head>
        <!-- Definisce il nome del sito, lo si cambia nelle impostazioni di WordPress -->
        <title><?php bloginfo( 'name' ); wp_title(); ?></title>
        <!-- Definisce la descrizione del sito, la si cambia nelle impostazioni di WordPress -->
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <!-- Definisce il charset del sito, lo si cambia nelle impostazioni di WordPress -->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <!-- Viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="format-detection" content="telephone=no">

        <!-- ATTENZIONE: Nello sviluppo WordPress, per includere delle immagini o qualsiasi altro media o file presente nella cartella
        del progetti è necessario inserire nell'attributo href o scr, a seconda del tag che si sta usando, prima
        'echo get_stylesheet_directory_uri(); dentro i tag PHP di apertura e chiusura e poi inserire uno slash e il percorso dove si trova
        il file che si sta includendo -->

        <!-- Definisce le favicon che ci saranno correlate al sito -->
        <link href="" rel="shortcut icon" type="image/x-icon">
        <link href="" rel="apple-touch-icon-precomposed">
        <link href="" sizes="114x114" rel="apple-touch-icon-precomposed">
        <link href="" sizes="72x72" rel="apple-touch-icon-precomposed">
        <link href="" sizes="144x144" rel="apple-touch-icon-precomposed">
        
        <!-- Link a tutti i fogli di stile -->
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/main.css" type="text/css" media="all" />
        <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/styles/404.css" type="text/css" media="all" />

		<!-- Stili e script di integrazione per Font Awesome -->
        <script src="https://kit.fontawesome.com/0999994394.js" crossorigin="anonymous"></script>
        <link rel=“stylesheet” href=“https://use.fontawesome.com/releases/v5.5.0/css/all.css” integrity=“sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU” crossorigin=“anonymous”>

        <link href="//db.onlinewebfonts.com/c/edeb336ecd776e23d99355eb2b52cbc7?family=NeuzeitGroteskW01-Regular" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

        <!-- Definisce l'head del sito -->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
      <!-- Navbar -->
          <header class="website-header">
              <div class="donate-div">
                  <p>I corsi stanno per iniziare, le iscrizioni sono aperte!</p>
              </div>

              <!-- <a href=""> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/uk-flag.png" alt="English flag"> </a> -->

              <div class="header-navbar noselect">
                  <span class="page-logo">Ero <span class="page-logo black-logo">Forestiero</span> </span>

                  <a href="mailto:eroforestieroodv@gmail.com" class="button green-outline_button">Contattaci</a>
              </div>
          </header>
      <!-- End Navbar-->
