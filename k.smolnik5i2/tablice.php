<?php

function isPrime($num){
    if($num<2) return false;

    for($i=2;$i<$num;$i++){
        if($num%$i==0)
            return false;
    }
    return true;
}

$a=isPrime(2);
if ($a==1){


    echo"liczba jest pierwsza";
}else{
    echo 'Liczba nie jest pierwsza';
}
?>