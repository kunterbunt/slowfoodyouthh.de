<!DOCTYPE html>
<html lang="en">
<head>
  <title>Slow Food Youth Hamburg</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/png" href="http://slowfoodyouthh.de/imgs/favicon.jpg">        

  <link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.blue_grey-indigo.min.css" />

  <script src="https://storage.googleapis.com/code.getmdl.io/1.0.6/material.min.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css" type="text/css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
  </script>
  <![endif]-->
</head>
  
<?php
function getUrl() {    
  if (file_exists("proof_local"))
      return "http://localhost/slowfoodyouthh.de";
  else
      return "http://slowfoodyouthh.de";
}
?>

<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <a href="<?php echo getUrl();?>"><span class="mdl-layout-title">Slow Food Youth Hamburg</span></a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
            
      </nav>
    </div>
  </header>
<!--
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
      <a class="mdl-navigation__link" href="">Link</a>
    </nav>
  </div>
-->
  <main class="mdl-layout__content" style="flex: 1 0 auto;">
    <div class="page-content">      
        <div class="image__logo-container mdl-grid">
            <div class="image image__logo mdl-cell mdl-cell--12-col"></div>
        </div>
<!--        Intro. -->
        <div class="intro-container mdl-grid ">
            <div class="mdl-layout-spacer"></div>
            <div class="intro mdl-cell mdl-cell--6-col">
                <h2 class="text--centered">Moin Moin!</h2>
                <h3>Wer wir sind?</h3>
                <p>Wir sind die <strong>Hamburger Slow Food Youth</strong> Gruppe, gegründet Anfang 2015!</p>
                <p>Wir <strong>engagieren</strong> uns ganz im Sinne von Slow Food für gute, saubere und faire Lebensmittel, also insbesondere für  Nachhaltigkeit, Saisonalität und Regionalität und gegen Verschwendung.</p>
                <p>In unserer Gruppe <strong>triffst Du</strong> vom Studenten bis zum Koch, von der Bürofrau bis zur Gärtnerin jede Menge lustiger Leute.  Ganz egal wo Du herkommst, was Du machst, wie alt Du bist, ob zugezogen oder Urhamburger - bei uns ist jeder <strong>Willkommen</strong>!</p>
                <p>Wir sind bunt gemischt und lieben gutes Essen!</p>
                
                <h3>Was wir machen?</h3>
                <p>Wir versuchen <strong>gutes Essen</strong> in den Alltag zurück zu holen.</p>
                <p>Dafür <strong>organisieren</strong> wir kleinere und größere Events wie die Schnippeldisko und Workshops. Außerdem <strong>treffen</strong> wir uns regelmäßig jeden zweiten Montag im Monat in gemütlicher Runde zum Essen, Schnacken und <strong>Weltverbessern</strong>. :)</p>
                <p>Gerade sind wir dabei uns neue Aktionen für das Jahr 2016 auszudenken. Wir werden Euch in Zukunft auf dieser Seite darüber auf dem Laufenden halten.</p>
            </div>
            <div class="mdl-layout-spacer"></div>                                    
        </div> 
<!--      Blog articles. -->
      <div class="mdl-grid mdl-grid--no-spacing">        
        <div class="articles-header mdl-cell mdl-cell--12-col">
          <h2 class="text--centered">Neuigkeiten</h2>
        </div>        
      </div>
      <div class="articles-container mdl-grid">
        <div class="mdl-layout-spacer"></div>        
        <div class="mdl-cell mdl-cell--6-col">          
          <i class="material-icons">&#xE5C5;</i>
          <div class="vertical-line vertical-line--light vertical-line--50px vertical-line--light"></div>
          
          <div class="article">         
            <a href="Blunk" title="Blunk" target="_self">
              <span class="article__date">9. Januar</span>
              <div class="article__content">
                <div class="article__content--image" style="background: url('imgs/Blunk/goat-web.jpg');"></div>
                <h3 class="article__content--title">Blunk</h3>
              </div>
            </a>
          </div>

          <div class="vertical-line vertical-line--light vertical-line--50px vertical-line--light"></div>
          <i class="material-icons">&#xE5C7;</i>
        </div>
        <div class="mdl-layout-spacer"></div>
      </div>      
      
    </div>        
  </main>
  
  <!--          Footer. -->
  <footer class="mdl-mini-footer">
  <div class="mdl-mini-footer__left-section">
    <div class="mdl-logo">Kontakt</div>
    <ul class="mdl-mini-footer__link-list">
      <li><a href="mailto:slowfoodyouthh@gmail.com" title="Send us some mail!" target="_self" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"><i class="fa fa-envelope"></i> Mail</a></li>
      <li><a href="http://www.facebook.com/slowfoodyouthh" title="Facebook" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"><i class="fa fa-facebook fa-fw"></i> Facebook</a></li>
    </ul>
  </div>
    <div class="mdl-mini-footer__right-section">
      <div class="mdl-logo">Mehr Infos</div>
      <ul class="mdl-mini-footer__link-list">
        <li><a href="http://www.slowfoodyouth.de" title="Slow Food Youth" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Slow Food Youth</a>  </li>
            <li><a href="http://www.slowfood.de" title="Slow Food" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Slow Food</a>  </li>
            <li><a href="http://www.slowfood-hamburg.de" title="Slow Food Hamburg" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Convivium Hamburg</a></li>
      </ul>
  </div>
</footer>
</div>
</body>
</html>
