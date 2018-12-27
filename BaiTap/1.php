<?php 
include "TM2/2.php";
GLOBAL $mang;
$a=5;
$mang = array($a);
for($i=0;$i<4;$i++){
    $a = $a + 3;
    array_push($mang,$a);    
}
echo "giá trị lớn nhất là: ";
echo demo();
?>