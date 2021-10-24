<?php
echo time()."<br>";

var_dump(time());
echo "<br>";

echo date("Y-m-d H:i:s", time())."<br>";

echo date("Y-m-d H:i:s", 1491980400)."<br>";

echo date("Y年m月d日 H時i分s秒", time())."<br>";

echo strtotime("2017/2/16 11:25:00")."<br>";

// 先週の日曜日
echo strtotime("last Sunday")."<br>";
// 2日後
echo strtotime("+2 day");