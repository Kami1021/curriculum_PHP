<?php

function RectangularVolume($vertical,$beside,$height){
    $Volume = $vertical*$beside*$height;
    return $Volume;
}
echo RectangularVolume(5,10,8);

?>