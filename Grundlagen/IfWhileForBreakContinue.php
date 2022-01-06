<?php
    //If&Else
    $datum = "12.10.2021";
    $playBF2042;
    if(!empty($datum)) {
        if ($datum == "19.11.2021") {
            $playBF2042 = true;
        } if ($datum == "18.11.2021") {
            $playBF2042 = false;
            //echo "noch 1 Tag warten."
        } else {
            $playBF2042 = false;
        }
    } else {
        $datum = "12.10.2021"; //Auf Aktuelles Datum setzen.
    }
    echo "<br/><br/>";

    //WhileSchleife
    $zahl = 1;
    while ($zahl < 47) {
        echo $zahl *= 2; // || echo $zahl++; zB.
        echo "<br/>";
    }
    echo "<br/><br/>";

    //ForSchleife
    $zahl2 = 9;
    for ($i=1; $i < 10; $i++) { 
        echo $zahl2 += 9;
        echo "<br/>";
        echo $i . ". i ist kleiner als 10, i = " . $i;
        echo "<br/><br/>";
    }
    echo "<br/><br/>";

    //break & continue
    for ($i=10; $i < 16; $i++) { 
        if ($i == 13) {
            continue;
        }
        echo $i . " ";
    }
    echo "<br/><br/>";
    
    for ($i=0; $i < 16; $i++) { 
        if ($i == 13) {
            break;
        }
        echo $i . " ";
    }
    echo "<br/><br/>";

    //ForEach Schleife
    /* Untere ist ForEach
        echo "<ul>";
            $anzahl = count($warenkorb);
            for ($i=0; $i < $anzahl; $i++) { 
                echo "<li>";
                echo $warenkorb[$i];
                echo "</li>";
            }
        echo "</ul>";
    */
    foreach ($warenkorb AS $produkt) {
        echo "<li>";
        echo $produkt;
        echo "</li>";
    }




    




















?>
