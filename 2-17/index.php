<?php

$sum=0;
$saikoro=0;

for($i=1;$sum<40;$i++){
$saikoro = mt_rand(1,6);
$sum += $saikoro;
printf("%d回目=%d<br>",$i,$saikoro);
}

printf("合計%dでゴールしました",$i-1);
?>
