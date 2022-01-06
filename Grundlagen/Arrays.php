<?php //Match lernen
    //Standart Array
    $name = array();
    var_dump($name);
    echo "</br></br>";


    $obst = "Kirche";
    $obst2 = "Kirche2";
    $warenkorb = array("Banane", "Banane2", "Apfel", "Pfirsisch", 123, $obst2, $obst);
    echo $warenkorb[0];
    var_dump($warenkorb);
    echo count($warenkorb);
    echo "</br>";
    var_dump($warenkorb[1]) . " " . var_dump($warenkorb[3]);
    echo "</br>";
    $index = 2;
    var_dump($warenkorb[$index]);
    $warenkorb[] = "Aprikose"; // Aprikose kommt auf letzten platz
    array_unshift($warenkorb, "Kiwi"); //Kiwi kommt auf platz[0]
    echo "</br></br>";
    var_dump(array_shift($warenkorb)); //das entfernt das erste Element vom Array und returnt es
    var_dump(array_pop($warenkorb)); //Entfernt das letzte Element vom Array und returnt es
    echo "</br></br></br></br>";


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
    foreach ($warenkorb AS $key => $produkt) { //mit Key übernimmst du auch den Index des jeweiligen Arrays
        echo "<li>[{$key}] {$produkt}</li>";
        /* obere echo ist übersichtlicher
            echo "<li>";
            echo "[";
            echo $key;
            echo "] ";
            echo $produkt;
            echo "</li>";
        */
    }

    //Assoziative Arrays (#Hashmap)
    $städte = array(
        "Deutschland" => "Berlin",
        "England" => "London",
        "Frankreich" => "Paris"
    );
    $städte["Türkei"] = "Ankara";
    //echo $städte["Deutschland"];
    //var_dump($städte)

    $artikelNr = array(
        "Banane" => 201910210815,
        "Klopapier" => 151910210816
    );

    
?>
