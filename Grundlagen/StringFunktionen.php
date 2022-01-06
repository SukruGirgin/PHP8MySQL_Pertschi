<?php

    $name = "Dilan Kaya";
    echo strtolower($name);
        echo "<br/>";
    echo strtoupper($name);
        echo "<br/>";
    echo str_replace("Kaya", "Girgin", $name);
        echo "<br/>";
    echo $erg = strpos($name, "Dilan");
        echo "<br/>";
    //bei strpos wenn 0 als ergebnis kommt, wird das als bool(false) wahrgenommen, deshalb nicht:
    if (!empty($erg)) { //Dilan ist an Nullter stelle, deshalb denkt PHP its a boolean, und macht es false
        echo "Begriff gefunden 1";
    } if ($erg != false) { //Da Dilan als return 0 hat, ist $erg null, und mit != setzt du $erg zu einem Bool statt zu einem Int.
        echo "Begriff gefunden 2";
    }
    //sondern:
    if ($erg !== false) { //nur so funktioniert es, weil er die 0 von Dilan als Int behält und dann das als inhalt besitzt und somit true im inhalt ist.
        echo "Begriff gefunden 3";
    }
    echo "<br/><br/>";
?>
