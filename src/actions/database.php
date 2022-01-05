<?php
try{
    $bdd = new PDO ('mysql:host=mysql; dbname=dataBaseForum; port=3306; ', 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}

