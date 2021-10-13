<?php
require 'menu.php';
?>
<title>F@stochePC11</title>

    <header>
    
        <h1 id="home">Bienvenue !</h1> 

        <div id="presentation">
            <p>Tout d'abord, je vous remercie pour votre visite sur mon site. Je vous invite à découvrir les différentes rubriques qui s'offrent à vous.</p>
            <p>Le moyen le plus simple est de passer en revue la barre de menu. Vous pouvez aussi, aller d'une page à l'autre au gré de vos envies et de vos curiosités.</p>
            <p>Dans quelques minutes, vous en saurez plus sur  moi et sur mes prestations.</p>
        </div>
    </header>

    <!-- Carousel - vue mobile le carousel n'apparaît pas -->
    <section class="container1">
        <div id="carouselSlides" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/slide1.jpg" class="d-block w-90" alt="slide1">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" class="d-block w-90" alt="slide2">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" class="d-block w-90" alt="slide3">
                </div>
            </div>
        </div>
    </section>
  
    <!--Présentation des services de l'entreprise sur 3 colonnes-->
    <section class="container" id="columm">
        <div class="row">
            <div class="col-sm">
                <img class="imageHome" src="images/depannage.jpg" alt="depannage informatique">
                  <h4>Dépannage informatique</h4>
                    <p class="textHome">Quelque soit le problème matériel ou logiciel que vous rencontrez, F@stochePC11 se déplace chez vous pour solutionner votre problème.</p>
            </div>
            <div class="col-sm">
                <img class="imageHome" src="images/initiation.jpg" alt="initiation informatique">
                  <h4>Initiation à l'informatique</h4>
                    <p class="textHome">Apprenez les bases de l'informatique, pour utiliser sans effort votre ordinateur fixe ou portable sous Windows. Apprenez à utiliser internet.</p>
            </div>
            <div class="col-sm">
                <img class="imageHome" src="images/sauvegarde.jpg" alt="sauvegarde informatique">
                  <h4>Analyse et sauvegarde</h4>
                    <p class="textHome">Analyse et suppression des virus. Sauvegarde en toute sécurité de vos données.</p>
            </div>
        </div>
    </section>


<?php
require 'footer.php'; 
?>