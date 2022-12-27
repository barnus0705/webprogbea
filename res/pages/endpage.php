<div class="space"></div>
    <footer>
        <ul>
            <li><a href="index.php">Főoldal</a></li>
            <li><a href="termek.php">Termékek</a></li>
            <li><a href="galleria.php">Galléria</a></li>
            <li><a href="company.php">Rólunk</a></li>
            <li><a href="contact.php">Kapcsolatok</a></li>
        </ul>
        <?php

            $left = 24-date('d');
            if($left == 24)
            {
                echo '<p>Main nap Karácsony van.</p>';
            }   
            elseif($left<24){
                echo '<p>Karácsonyig '.$left.' nap van vissza.</p>';
            }
            elseif($left>26){
                echo '<p>Karácsony már elmúlott';
            }
        ?>
    </footer>
</body>
</html>