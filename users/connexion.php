<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=allo2', 'root', '');

if(isset($_POST['formconnexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) {
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: profil.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>
<html>
   <head>
      <title>Connexion</title>
      <meta charset="utf-8">
      <style>
body{
   background-image: url("../img/ab1.jpg") ;
}

h2{
   font-size: 1.3em;
   font-family: Arial, Helvetica, sans-serif;
	letter-spacing: 0.1em;
	color: rgba(190, 0, 0, 0.993)!important;
   margin-right: 1.2em;
   font-weight: 600;
}

h2 span{
   letter-spacing: 0.1em;
	color: black!important;
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
      <h2 style=" font-size: 40px">CONNEX<span>ION</span></h2>
         <br /><br />
         <form id="table" method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="submit" name="formconnexion" value="Se connecter !" />
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
      </div>
   </body>
</html>