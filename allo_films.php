<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Anton|Gloria+Hallelujah|Righteous" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <link src="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/allo_films.css">
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>

    <?php
    require_once 'database.php';
    ?>
    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('nav.php');?> 



    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="header_films" id="haut">
        <h1>NOS FILMS</h1>
        <div class="ligne">
            <img class="ligne_g fadeInLeft animated" src="img/ligne_g.png">
            <img class="ligne_d fadeInRight animated" src="img/ligne_d.png">
        </div>
    </div>

    <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="row nopadding" id="liste_films">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="menu_films">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">

                    <button>Rechercher</button>

                    <?php 
        $req = $db->query('SELECT * FROM genre');
        $genres = $req->fetchAll();

        foreach ($genres as $genre): ?>

                    <li><a href="allo_films.php?id=<?= $genre['Id_genre']?>" class="collapsible"><?= $genre['Genre']?></a>
                    </li>

                    <?php endforeach ?>

                </ul>
            </div>

            <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <div class="menu_films_portable">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">
                    <button>Rechercher</button>
                    <li><a href="#" class="collapsible">Films</a>
                        <ul>

                        <?php 
        $req = $db->query('SELECT * FROM genre');
        $genres = $req->fetchAll();

        foreach ($genres as $genre): ?>

                            <li><a href="allo_films.php?id=<?= $genre['Id_genre']?>" class="collapsible"><?= $genre['Genre']?>

                            </li>

                            <?php endforeach ?>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->



        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="liens_films fadeInUp animated">
            <div class="titre"> Nouveautés </div><br />
            <?php 
        $req = $db->query('SELECT * FROM film');
        $films = $req->fetchAll();

        foreach ($films as $film): ?>


                <a href="content.php?id=<?= $film['Id_film']?>"><img class="effect " src="<?= $film['Affiche_du_film']?>" id="action">
                    <p><?= $film['Nom_du_film']?></p>
                </a>
                <?php endforeach ?>
            </div>
        </div>


        <!--//////////////////////////////  CAROUSEL SIEMA  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="siema">
        <?php 
        $req = $db->query('SELECT * FROM film');
        $films = $req->fetchAll();

        foreach ($films as $film): ?>
            <img src="<?= $film['Affiche_du_film']?>">
            <?php endforeach ?>
        </div>

        <button class="prev">
            <p>
                <</p> </button> <button class="next">
                    <p>></p>
        </button>
    </div>

    <!--            APPARITION IMAGE SELON SCROLL 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
    <script>
var derniere_position_de_scroll_connue = 0;
function faireQuelqueChose(position_scroll) {
  // faire quelque chose avec la position du scroll
}
window.addEventListener(function(e) {
           //     TweenMax.to('.liens_films', 4, {y: -800, ease: Elastic.easeOut.config(0.5, 0.2) });
                TweenLite.to('.liens_films', 0.8, {delay: 1, ease: Power1.easeOut, y: -800, opacity: 1 });
            })
        
        </script>
        -->


    <!--//////////////////////////////  FOOTER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('footer.php');?> 

    <!--//////////////////////////////  BACK TO TOP BTN  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div><a id="cRetour" class="cInvisible" href="#haut"></a></div>


    <!--//////////////////////////////  SCRIPTS  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <script>
$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
            if (scroll > 400) {
          $(".navbar").addClass("navbar-scroll");
          }
            else{
            $(".navbar").removeClass("navbar-scroll");  	
        }
        if (scroll > 400) {
          $(".navbar").addClass("bg-primary");
        }
  
        else{
            $(".navbar").removeClass("bg-primary");  	
        }
    })
  })
</script>

    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
    <script src="js/siema.min.js"></script>
    <script src="js/allo_films.js"></script>

</body>

</html>