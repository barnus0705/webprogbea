<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="res/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
        if(isset($_GET['cim'])){
            echo '<div class="bal"><p>'.$_GET['cim'].'</p></div>';
        }else{
            echo '<div class="bal"><p>Karácsonyi kiárusítás</p></div>';
        }
        
        ?>
        <div class="jobb"><a href="index.php">Főoldal</a></div>
    </header>
    <nav>
        <ul>
            <li><a href="termek.php?cim=Termékek">Termékek</a></li>
            <li><a href="galleria.php?cim=Galléria">Galléria</a></li>
            <li><a href="company.php?cim=Rólunk">Rólunk</a></li>
            <li><a href="contact.php?cim=Kapcsolatok">Kapcsolatok</a></li>
        </ul>
    </nav>