<?php
    $var1 = "String"; //String
    $var2 = 1; //int
    $var3 = 1.8; //double
    $var4 = true; //boolean
    /* 
        mehrzeiliger
    */
    print $var2 + $var3;
    print "<br/>";
    print $var3 - $var2;
    print "<br/>";
    print "<br/>";
    print 6 - 5;        
    print "<br/>";
    echo 17 - 7;
    print "<br/>";
    echo $var2 + $var3;
    print "<br/>";
    echo $var1 . $var2 . $var3 . $var1;
    echo "<br/>";
    echo $var2++; // var2 + 1

    print "<br/>";
    print "<br/>";
    print "<h3>Übung: <br/><br/><h3/>";
    $größe = 1.78; // Körpergröße
    $gewicht = 94; //Körpergewicht
    $bmi = $gewicht / ($größe * $größe);
    echo "BMI: " . $bmi;
    print "<br/><br/>";

    //String:
    $name = "Sükrü";
    echo "Hallo, " . $name . "!<br/>";
    $name2 = 'Sedat';
    echo "Hallo, $name2!" . "<br/>";
    echo 'Hallo, $name2!';
    echo "Hallo, $name und $name2!" . "\n" . "Schönen guten Tag noch!"; // \n geht nur über view-source:localhost/blabla.php

    print "<br/>";
    print "<br/>";
    //strlen && var_dump;
    echo strlen($name) . "<br/>"; //Ä, Ö, Ü zählt als 2 Buchstaben, wegen ae, oe, ue
    echo var_dump($name);
    print "<br/>";
    print "<br/>";
    echo var_dump($var1) . "<br/>" . var_dump($var2) . "<br/>" . var_dump($var3);


    $boolean1 = true;
    $boolean2 = (false || true); // es geht sowohl || und auch OR
    $boolean3 = (true && false); // es geht sowohl && und auch AND
    $boolean4 = (true AND true);
    var_dump($boolean3);
    var_dump($boolean4);
    print "<br/>";
    print "<br/>";

    $emptyBsp = ""; //oder 0 oder "0"
    var_dump(empty($emptyBsp));
    var_dump(isset($name)); // isset ist nur dann false wenn die Var nicht exisitert, sonst ist sie gesettet.
    unset($name2);
    var_dump(isset($name2));
    print "<br/>";

    //Variable variablen
    $var01 = "text";
    $$var01 = "Text7";
    echo $var01 . " " . $text;

    //Variable Referenzen
    $a = "Eine Variable";
    $b = &$a;
    $a = "Geänderte Variable";
    echo $b; //$b wird zu "Geänderte Variable"

    print "<br/><br/><br/>";
    print "<br/><br/>";

    // include, include_once, require, require_once
    include "BspDateien/header.php"; // view-source:http://localhost/PHP8MySQL_Pertschi/Grundlagen/Variablen.php
    echo "Test123 <br/>"; // dafür dateien header.php & footer.php in Grundlagen ordner packen.
    include "BspDateien/footer.php"; // wenn datei nicht existiert, macht er einfach weiter...

    require "BspDateien/header.php"; // wenn datei nich existiert, bricht er ab
    echo "Test123";
    require "BspDateien/footer.php";

    include "BspDateien/element.php";
    echo "<hr/>";
    include "BspDateien/element.php";

    include_once "BspDateien/element2.php"; //require_once genauso...
    echo "<hr/>";
    include_once "BspDateien/element2.php"; // es wird lediglich 1 mal genutzt und dann nicht mehr.

    echo "<br/><br/><br/>";
    //is_Null
    $test = null;
    if (is_null($test)) {
        echo "Variable ist NULL";
    } else {
        echo "Variable ist nicht NULL, sondern" . $test;
    }
    
    //escape
    $version = "PHP 5"; // \ backslash wonach dann zB. \n kommt für zeilenumbruch.
    echo "Die Variable \$version hat den Wert:\n $version \245"; // https://www.php.net/manual/de/regexp.reference.escape.php

    //Typkonvertierung
    $a = "true";
    $b = (bool) $a;
    echo $b;

    //Typkonvertierung_Automatisch
    $c = "3";
    $d = 5;
    $erg = $c + $d;
    echo $erg; // output: 8


    /*
        Operator are mainly divided by three groups.
            1.Uniary Operators that takes one values
            2.Binary Operators that takes two values
            3.ternary operators that takes three values

        Operator are mainly divided by three groups that are totally seventeen types.
            1.Arithmetic Operator
            + = Addition
            - = Subtraction
            * = Multiplication
            / = Division
            % = Modulo
            ** = Exponentiation

        2.Assignment Operator
            = "equal to

        3.Array Operator
            + = Union
            == = Equality
            === = Identity
            != = Inequality
            <> = Inequality
            !== =    Non-identity

        4.Bitwise Operator
            & = and
            ^ = xor
            | = not
            << = shift left
            >> = shift right

        5.Comparison Operator
            ==  = equal
            === = identical
            !=  = not equal
            !== = not identical
            <>  = not equal
            < = less than
            <= less than or equal
            > = greater than
            >= = greater than or equal
            <=> = spaceship operator

        6.Execution Operator
            `` = backticks 

        7.Error Control Operator
            @ = at sign

        8.Incrementing/Decrementing Operator
            ++$a = PreIncrement
            $a++ = PostIncrement
            --$a = PreDecrement
            $a-- = Postdecrement

        9.Logical Operator
            && = And
            || = Or
            ! = Not
            and = And
            xor = Xor
            or = Or

        10.string Operator
            . =  concatenation operator
            .= concatenating assignment operator

        11.Type Operator
            instanceof = instanceof

        12.Ternary or Conditional operator
            ?: = Ternary operator

        13.Null Coalescing Operator
            ??" = null coalescing

        14.Clone new Operator
            clone new = clone new

        15.yield from Operator

            yield from = yield from

        16.yield Operator
            yield = yield

        17.print Operator
            print = print
    */


?>
