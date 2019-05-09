<?php
function getFilm($db, $nb = null, $id = null){
    if ($nb AND !$id) {
        $req = $db->query('SELECT * FROM film LIMIT' .$nb);
        $films = $req->fetchAll();
    }
    elseif($id){
        $req = $db->query('SELECT * FROM film WHERE Id_film =' .$id);
        $films = $req->fetchObject();
    }
    else{
        $req = $db->query('SELECT * FROM film');
        $films = $req->fetchAll();
    }
    return $films;
}