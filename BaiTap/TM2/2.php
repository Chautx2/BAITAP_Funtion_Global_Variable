<?php
function demo(){
    GLOBAL $mang;
    $x = $mang[0];
    for($i= 1; $i< 5; $i++){
        if($x < $mang[$i]){
            $x = $mang[$i];
        }
    }
    return $x;      
}
?>
