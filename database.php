<?php
$db = new PDO('mysql:host=localhost;charset=utf8mb4;dbname=allo2', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>