<?php
    // index.php
    $a = 1.55;
    printf("ceil：%s<br>",ceil($a));

    printf("floor:%s<br>",floor($a));

    printf("round:%s<br>",round($a));

    //半径が5の円の面積 
    $menseki = 5 * 5 * pi();
    printf("pi:%.02f<br>",$menseki);

    printf("rand:");
    for($i=0;$i<5;$i++){
    printf("%d ",mt_rand(1,100));
    }
    printf("<br>");

    $mozi = "curriculum";
    printf("strlen:curriculumは%d文字です。<br>",strlen($mozi));
    printf("strpos:curriculumにuは%d文字目で使われています。<br>",strpos($mozi,"u"));
    printf("substr:%s<br>",substr($mozi,-2,3));
    printf("str_replace:%s<br>",str_replace("u","U",$mozi));

    $sprintf = sprintf("sprintf:%s<br>",str_replace("u","U",$mozi));
    echo $sprintf;
    ?>