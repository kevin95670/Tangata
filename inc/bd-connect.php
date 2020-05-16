<?php 
try{ 
    $bd = new PDO("mysql:host=localhost;dbname=tangata;charset=utf8",'root','root');
}
catch(Exception $e){
    echo "Erreur de Connexion";
}

?>