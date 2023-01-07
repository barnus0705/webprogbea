<?php include 'res/pages/startpage.php'?>
<main>
    <?php
    $pdo = Database();
    $data = "SELECT * FROM termek";
    $query = $pdo->query($data);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $sor) {
        echo '
            <div class="termekbox">
                <h2>'.$sor["nev"].'</h2>
                <div class="termek">
                    <img src="'.$sor["keppath"].'" alt="">
                    <p class="text">'.$sor["leiras"].'</p>  
                </div>
                <a href="'.$sor["wiki"].'">bővebben</a>
            </div>';
    }
    ?>
</main>
<?php include 'res/pages/endpage.php'?>