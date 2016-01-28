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

  <link rel="stylesheet" href="../css/styles.css" type="text/css">

  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js">
  </script>
  <![endif]-->
</head>
  
<?php
function getUrl() {    
  if (file_exists("../proof_local"))
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
      <button class="mdl-layout-icon mdl-button mdl-js-button mdl-button--icon" onclick="history.go(-1);">
      <i class="material-icons">arrow_back</i>
    </button> 
      <!-- Title -->
      <a href="<?php echo getUrl();?>"><span class="mdl-layout-title">Slow Food Youth Hamburg</span></a>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
            
      </nav>
    </div>
  </header>
  <main class="mdl-layout__content" style="flex: 1 0 auto;">
    <div class="page-content">        
      <div class="mdl-grid ">
        <div class="mdl-layout-spacer"></div>
          <div class="mdl-cell mdl-cell--6-col">
            <div class="article__content--text">
              <h2 class="text--centered">Blunk Reisebericht</h2>
              <p dir="ltr">
                  Am 9. Januar 2016 haben wir uns gemeinsam auf einen kleinen Ausflug begeben. Morgens um 10 Uhr ging es am Hamburger Hauptbahnhof los. Ganz gemütlich fuhren
                  wir durch verschneite Landschaften unter strahlend blauem Himmel nach Bad Segeberg und weiter in das kleine Nachbarörtchen Blunk.
              </p>
              <p dir="ltr">
                  Dort empfingen uns fröhlich Inken und Hardy, die den Arche-Hof Bredland führen. Wir durften es uns im wunderschönen Gästezimmer gemütlich machen und Inken
                  versorgte uns mit leckeren Broten.
              </p>
              <p dir="ltr">
                  Nachdem wir uns dort kurz ausgeruht hatten, nahm sich Hardy Zeit für uns. Er zeigte uns die verschiedenen Hoftiere und erklärte ausführlich die Geschichten
                  der einzelnen Rassen und die Arbeit von Arche Höfen.
              </p>
              <p dir="ltr">
                  Die Einrichtung solcher Höfe wurde durch die Gesellschaft zur Erhaltung alter und gefährdeter Haustierrassen initiiert. Denn durch die intensive
                  Tierhaltung in der industriellen Landwirtschaft sind viele Haustierarten vom Aussterben bedroht. Höfe, die sich dazu entscheiden, solche gefährdeten Rassen
                  auf ihrem Hof zu halten, können sich als Arche-Hof zertifizieren lassen.
              </p>
              <p dir="ltr">
                  So lebt auf dem Hof in Blunk beispielsweise Ronja, ein Pferd der Rasse Schleswiger Kaltblut. Von dieser Rasse gibt es insgesamt nur noch 215 Tiere, sie ist
                  also stark gefährdet. Ein paar Meter weiter wohnt ein kleiner Haufen Angler Sattelschweine. Diese konnten wir ausgiebig streicheln, während uns die Meißner
                  Widder Kaninchen von ihrem Stall im “Obergeschoss” zuguckten. Die Angler Sattelschweine gehören zu einer extrem gefährdeten Tierart, sie haben nur noch
                  etwa 90 Artgenossen. Außerdem trifft man bei Inken und Hardy Thüringer Wald Ziegen, Skudden (Schafe), Vorwerkhühner und noch einige mehr.
              </p>
              <figure>
                <img src="../imgs/Blunk/horse3-web.jpg"/>
                <figcaption>Ronja das Schleswiger Kaltblut</figcaption>
              </figure>              
              <p dir="ltr">
                  Nachdem wir Hof und Tiere bestaunt hatten und jede Menge Wissen gesammelt haben, machten wir uns auf den Weg zum Landhaus Schulze-Hamann. In diesem Slow
                  Food, Bio und Fairtrade zertifizierten Restaurant aßen wir ein ganz vorzügliches Mittagessen, das uns gestärkt in den Nachmittag schickte. Den verbrachten
                  wir planend und debattierend im Gästezimmer.
              </p>
              <p dir="ltr">
                  Fleißig haben wir überlegt, was wir im neuen Jahr so alles auf die Beine stellen wollen. So soll es im Sommer wieder eine Schnippeldisko geben im Inselpark
                  in Wilhelmsburg. Beim Käsemarkt auf dem Kiekeberg am letzten Wochenende im Mai werden wir für kulinarische Köstlichkeiten sorgen. Ansonsten haben wir noch
                  einige kleinere Veranstaltungen, Ausflüge und Workshops geplant. Über diese werden wir im Laufe der Zeit ausführlicher berichten.
              </p>
              <p>
                  Spät abends machten wir uns dann auf die Heimreise. Der Tag in Blunk hat viel Spaß gemacht und wir haben einiges geschafft. Ganz so, wie man sich einen
                  entspannten Tag mit leckerem Essen in Slow Foodiger Atmosphäre vorstellt.
              </p>
              
              <figure>
                <img src="../imgs/Blunk/chicken-web.jpg"/>
                <figcaption>Ein schönes Vorwerkhuhn</figcaption>
              </figure>
              <figure>
                <img src="../imgs/Blunk/horse2-web.jpg"/>                
              </figure>      
              <figure>
                <img src="../imgs/Blunk/pigs-web.jpg"/>
                <figcaption>Angler Sattelschweine beim futtern</figcaption>
              </figure>
              <figure>
                <img src="../imgs/Blunk/sheep-web.jpg"/>
                <figcaption>Eine niedliche kleine Skudde</figcaption>
              </figure>
              <figure>
                <img src="../imgs/Blunk/pigs-web.jpg"/>
                <figcaption>Angler Sattelschweine</figcaption>
              </figure>
              <figure>
                <img src="../imgs/Blunk/horse-web.jpg"/>
              </figure>
              <figure>
                <img src="../imgs/Blunk/sheep2-web.jpg"/>
                <figcaption>Pommernschafe im Wintersonnenschein</figcaption>
              </figure>
              <figure>
                <img src="../imgs/Blunk/chicken2-web.jpg"/>
                <figcaption>Diese Henne ist schon 12 Jahre alt!</figcaption>
              </figure>
              
              <p>Mehr Infos:</p>
              <a href="http://www.arche-hof-bredland.de" title="Arche Hof Bredland" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Arche Hof Bredland</a>
              <p></p>
              <a href="http://www.landhaus-schulze-hamann.de" title="Landhaus Schulze Hamann" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Landhaus Schulze Hamann</a>
              <p></p>
              <a href="http://www.g-e-h.de" title="G-E-H" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">G-E-H</a>
              <p></p>
              <a href="http://www.kiekeberg-museum.de/nc/aktuelles/aktuell/browse/1/article/1/kaesemarkt.html" title="Käsemarkt am Kiekeberg" target="_blank" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">Käsemarkt am Kiekeberg</a>
            </div>
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
