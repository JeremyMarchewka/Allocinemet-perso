<?php session_start();

 ?>
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
    
    if(!isset($_SESSION['admin'])) {
        header('location: login.php');
    }

    $req = $db->query('SELECT * FROM user');
    $users = $req->fetch();
    ?>


    <!--//////////////////////////////  NAVBAR  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->

    <?php include('../nav.php');?> 


<div class="container">

<h3>Bienvenue <?= $_SESSION['admin'] ?></h3>
<?php 
        $req = $db->query('SELECT * FROM film');
        $films = $req->fetchAll();

        foreach ($films as $film): ?>
            
<div class="row">
    <div class="col s12 m7">
      <div class="card">
        <div class="card-image">
          <img src="<?= $film['Affiche_du_film']?>">
          <span class="card-title"><?= $film['Nom_du_film']?></span>
        </div>
        <div class="card-content">
          <p><?= $film['Synopsis']?></p>
        </div>
        <div class="card-action">
          <a href="single_film.php?id=<?= $film['Id_film']?>">This is a link</a>
        </div>
      </div>
    </div>
  </div>
        
    <?php endforeach ?>
</div>
    


    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"
        integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
    <script src="../js/siema.min.js"></script>
    <script src="../js/allo_films.js"></script>

</body>

</html>