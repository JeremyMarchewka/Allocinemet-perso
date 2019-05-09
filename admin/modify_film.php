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
    <link rel="stylesheet" href="../css/allo_films.css">
    <link rel="stylesheet" href="../css/animate.css">

</head>

<body>


<?php
require_once '../database.php';
    require_once 'function.php';

    $film = getFilm($db,1, $_GET['id']);
    if (!isset($_GET['id'])){
        header('location:index.php');
    }

    if (isset($_POST) AND !empty($_POST)) {
        if (!empty($_POST['Nom_du_film']) AND !empty($_POST['Synopsis'])) {
            $req = $db->prepare('UPDATE film SET Nom_du_film = :Nom_du_film, Synopsis = :Synopsis WHERE Id_film = :Id_film');
            $req->execute([
                'Nom_du_film' => $_POST['name'],
                'Synopsis' => $_POST['content'],
                'Id_film' => $_GET['id'],
            ]);
            $_SESSION['flash']['success'] = 'Film modifié !';
        }else{
            $_SESSION['flash']['error'] = 'Champs manquants !';
        }
    }
?>

<div class="container">
    <h3>Modifier l'article "<?= $film->Nom_du_film ?></h3>
    <h4>Laissez vide si aucun changement</h4>
    <?php
    if (isset($_SESSION['flash']['success'])) {
        echo "<div class='success'>".$_SESSION['flash']['success'].'</div>';
    }
    elseif (isset($_SESSION['flash']['error'])) {
        echo "<div class='error'>".$_SESSION['flash']['error'].'</div>';
    }
    ?>
    <form method="POST">
        <h4>Le nom :</h4>
        <input type="text" name="name" value="<?= $film->Nom_du_film ?>"/>
        <h4>Le contenu :</h4>
        <textarea name="content"><?= $film->Synopsis ?></textarea>
        <button>Modifier</button>
    </form>
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