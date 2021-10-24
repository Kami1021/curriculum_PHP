<?php

$time = date("H", time());
$int_time = intval($time);

//時間を表示
echo "今".$int_time."時台です"."<br>";

//ここで時間によって挨拶を分岐
if($int_time == range(5,11)){
    echo "おはようございます";
}elseif($int_time == range(12,16)){
    echo "こんにちは";
}else{
    echo "こんばんは";
}

echo date("Y-m-d H:i:s", time());

?>