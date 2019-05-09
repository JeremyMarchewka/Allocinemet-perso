<?php session_start(); ?>
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
    <link rel="stylesheet" href="../css/allo_films.css">
    <link rel="stylesheet" href="../css/animate.css">

</head>

<body>

    <?php
    require_once '../database.php';
    ?>
    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('../nav.php');?> 


<div class="container">
<h3>Se connecter</h3>
    <?php 
    if (isset($_POST) AND !empty($_POST)) {
        if (!empty(htmlspecialchars($_POST['Nom'])) AND !empty(htmlspecialchars($_POST['MDP']))) {
            $req = $db->prepare('SELECT * FROM user WHERE Nom = :Nom AND MDP = :MDP');
            $req->execute([
                'Nom' => $_POST['Nom'],
                'MDP' => $_POST['MDP']
            ]);
            $user = $req->fetch();
            if ($user) {
                $_SESSION['admin'] = $_POST['Nom'];
                header('location:index.php');
            }
            else{
                $error = 'identifiant incorrect !';
            }
        }
        else{
            $error = 'veuillez remplir tous les champs !';
        }
    }
    if (isset($error)) {
        echo '<div class="error">'. $error .'</div>';
    }


    ?>

    <form action="login.php" method="post">
        <input type="text" name="Nom"/>
        <input type="text" name="MDP"/>
        <button>Se connecter</button>

    </form>
</div>
    <!--//////////////////////////////  HEADER  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="header_films" id="haut">
        <h1>NOS FILMS</h1>
        <div class="ligne">
            <img class="ligne_g fadeInLeft animated" src="../img/ligne_g.png">
            <img class="ligne_d fadeInRight animated" src="../img/ligne_d.png">
        </div>
    </div>

    <!--//////////////////////////////  LISTE GAUCHE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <div class="row nopadding" id="liste_films">
        <div class="col-lg-3 col-md-4 col-sm-4">
            <div class="menu_films">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">

                    <button>Rechercher</button>

                    <li><a href="#" class="collapsible">Action</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="collapsible">Science-fiction</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="collapsible">Comédie</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="collapsible">Drame</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="collapsible">Animation</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="collapsible">Horreur</a>
                        <ul>
                            <li><a href="#">Top 2019</a></li>
                            <li><a href="#">Meilleurs films</a></li>
                            <li><a href="#">Box office</a></li>
                            <li><a href="#">Tous les films</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!--//////////////////////////////  LISTE GAUCHE POUR SMARTPHONE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

            <div class="menu_films_portable">
                <ul id="menu-accordeon">
                    <input type="search" id="site-search" name="q" aria-label="Search through site content">
                    <button>Rechercher</button>
                    <li><a href="#" class="collapsible">Films</a>
                        <ul>
                            <li><a href="#" class="collapsible">Action</a>

                            </li>
                            <li><a href="#" class="collapsible">Science-fiction</a>

                            </li>
                            <li><a href="#" class="collapsible">Comédie</a>

                            </li>
                            <li><a href="#" class="collapsible">Drame</a>

                            </li>
                            <li><a href="#" class="collapsible">Animation</a>

                            </li>
                            <li><a href="#" class="collapsible">Horreur</a>

                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!--//////////////////////////////  MINIATURES FILMS DROITE  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="col-lg-9 col-md-8 col-sm-8">
            <div class="liens_films fadeInUp animated">
                <div class="titre"> Nouveautés </div><br />
                <a href="content.php"><img class="effect " src="../img/1.jpg" id="action">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/2.jpg" id="science-fiction">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/3.jpg" id="horreur">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/4.jpg" id="action">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/5.jpg" id="science-fiction">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/6.jpg" id="horreur">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/7.jpg" id="action">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/8.jpg" id="science-fiction">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/9.jpg" id="horreur">
                    <p>blablabla</p>
                </a>
                <a href="content.php"><img class="effect " src="../img/10.jpg" id="action">
                    <p>blablabla</p>
                </a>
            </div>
        </div>

        <!--//////////////////////////////  CAROUSEL SIEMA  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

        <div class="siema">
            <img src="../img/1.jpg">
            <img src="../img/2.jpg">
            <img src="../img/3.jpg">
            <img src="../img/4.jpg">
            <img src="../img/5.jpg">
            <img src="../img/6.jpg">
            <img src="../img/7.jpg">
            <img src="../img/8.jpg">
            <img src="../img/9.jpg">
            <img src="../img/10.jpg">
            <img src="../img/1.jpg">
            <img src="../img/2.jpg">
            <img src="../img/3.jpg">
            <img src="../img/4.jpg">
            <img src="../img/5.jpg">
            <img src="../img/6.jpg">
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

    <?php include('../footer.php');?> 

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
    <script src="../js/siema.min.js"></script>
    <script src="../js/allo_films.js"></script>

</body>

</html>