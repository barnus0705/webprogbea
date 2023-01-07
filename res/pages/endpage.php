<div class="space"></div>
    <footer>
        <ul>
            <li><a href="termek.php?cim=Termékek">Termékek</a></li>
            <li><a href="galeria.php?cim=Galéria">Galéria</a></li>
            <li><a href="contact.php?cim=Kapcsolatok">Kapcsolatok</a></li>
        </ul>
        <?php

        $actualdate = strtotime(date("Y-m-d"));
        $date = strtotime(date("Y-12-24"));
        $dateday = abs(round(($actualdate - $date) / 86400));
        if (date("m") == 12 && date("d") > 26){
            echo '<p> Karácsony már elmúllott '.$dateday.' nappal</p>';
        }elseif (date("m") == 12 && date("d") > 23 && date("d") < 27){
            echo '<p> Karácsony van éppen</p>';
        }else{
            echo '<p> Karácsony '.$dateday.' nap múlva lesz</p>';
        }
        ?>
    </footer>
</body>
</html>