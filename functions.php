<?php
function cim(){
    if(isset($_GET['cim'])){
        echo '<div class="bal"><p>'.$_GET['cim'].'</p></div>';
    }else{
        echo '<div class="bal"><p>Karácsonyi kiárusítás</p></div>';
    }
}
function Database(){
    $server = "mysql:host=localhost;dbname=Xmas";
    $username = "root";
    $password = "mysql";

    $db = new PDO($server, $username, $password);

    return $db;
}
?>