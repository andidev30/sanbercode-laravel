<?php 

    require "Animal.php";

    $sheep = new Animal("shaun");

    echo $sheep->nama; //shaun
    echo "<br>";
    echo $sheep->legs; // 2
    echo "<br>";
    echo $sheep->cold_blooded ;// false
    echo "<br>";
    echo "<br>";


    require "Ape.php";
    require "Frog.php";

    $sungokong = new Ape("kera sakti");
    echo $sungokong->yell();
    echo "<br>";
    echo "<br>";


    $kodok = new Frog("buduk");
    echo $kodok->jump() ; // "hop hop"