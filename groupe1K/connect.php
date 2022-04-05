<?php

try{
    $bdd = new PDO('mysql:host=localhost;dbname=grouped','root','');
}
catch(PDOException $e){
    echo $e->getMessage();
}
