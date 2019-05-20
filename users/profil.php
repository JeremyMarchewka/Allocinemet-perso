<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=allo2', 'root', '');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
   $getid = intval($_GET['id']);
   $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
   $requser->execute(array($getid));
   $userinfo = $requser->fetch();
?>
<html>
   <head>
      <title>Profil</title>
      <meta charset="utf-8">

      <style>
body{
   background-image: url("../img/ab1.jpg") ;
}


#main{
   padding-top: 2%;
   margin-top: 15%;
   margin-left: auto;
   margin-right: auto;
   height: 35%;
   width: 50%;
   border: solid 3px black;
   border-radius: 5px;
   background-color: #c7c3c3;
   opacity: 0.95;
}

#table{
   margin-top: 5%;
   height: 300px;
   font-size: 20px;

}

input{
   margin-left: 20px;
   height: 30px;
}
</style>
   </head>
   <body>
   <?php include('nav.php');?> 
      <div align="center" id="main">
         <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $userinfo['pseudo']; ?>
         <br />
         Mail = <?php echo $userinfo['mail']; ?>
         <br />
         <?php
         if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
         ?>
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
         <?php
         }
         ?>
      </div>
   </body>
</html>
<?php   
}
?>