<?php
session_start();
require_once '../database.php';
if (isset($_SESSION['admin']) AND !empty($_SESSION['admin'])) {
    if (isset($_GET['id'])) {
        $req = $db->query('SELECT * FROM film WHERE Id_film = '.$_GET['id']);
        $film = $req->fetch();
        if ($film) {
            $req = $db->query('DELETE FROM film WHERE Id_film = '.$_GET['id']);
            header('location:index.php');
        }
        else{
            header('location:index.php');
        }
    }
}else{
    header('location:index.php');
}