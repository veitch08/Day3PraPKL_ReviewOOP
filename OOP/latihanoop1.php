<?php

class game{
    var $genre;
    var $gameplay;

    function season(){
        echo "Game Ini Baru Akan Memulai Season Pertama";
    } 
    function campaign(){
        echo "Campaign dalam Game ini banyak";
    }
    function mode(){
        echo "Tersedia Mode RANKED dan CLASSIC";
    }   
}

$print = new game();

echo $print->season();
echo "<br>";
echo $print->campaign();
echo "<br>";
echo $print->mode();
?>