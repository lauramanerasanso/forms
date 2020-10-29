<?php
    if(isset($_COOKIE['countVisits'])){
        setcookie('countVisits', $_COOKIE['countVisits']+1, time(31536000));
        echo "Has visitat la pàgina un total de " .$_COOKIE['countVisits']." vegades en el darrer any.";

    } else {
        setcookie('countVisits', 1, time(31536000));
        echo "Has visitat la pàgina un total de " .$_COOKIE['countVisits']." vegades en el darrer any.";
    }
?>
