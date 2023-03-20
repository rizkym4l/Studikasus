<?php

$a =10 ;
$b =9 ;
$c =1;


if ($a == $b && $b == $c) {
  
    echo "SAMA SISI";
} elseif ($a == $b || $b == $c || $a == $c) {

    echo "SAMA KAKI";
} else {

    echo "SEMBARANG";
}
?>
