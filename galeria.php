<?php include 'res/pages/startpage.php'?>
<main>
        <?php
        echo '<div class="galeria">';
            $file = file("res/pictures.txt");
            foreach($file as $sor){
                echo '<img src="' . $sor . '" alt="" class="galeriakep">';
            }
        echo '</div>';
        ?>
    
</main>
<?php include 'res/pages/endpage.php'?>