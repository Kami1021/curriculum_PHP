<?php
//count&sort
$fluits = ["apple","orange","banana"];

sort($fluits);
echo "sort:";

for($i=0;$i<count($fluits);$i++){
    echo $fluits[$i]." ";
}

echo "<br>";

//in_array

echo "in_array:";
echo (in_array("tomato",$fluits)) ? "トマトはフルーツです！"."<br>" : "トマトフルーツではありません！"."<br>";

//implode
echo "implode:";
$re_fluits = implode("_",$fluits);
echo $re_fluits."<br>";

//explode
echo "explode:";
$rere_fluits = explode("_", $re_fluits);

for($i=0;$i<count($rere_fluits);$i++){
    echo $rere_fluits[$i]." ";
}


?>