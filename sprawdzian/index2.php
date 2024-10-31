<?php 
$tab = [];
for ($i=0; $i < 10; $i++) {
    $tab[$i] =rand(5,25);  
}
    echo "Tablica: <br>";
    foreach ($tab as $number) {
        echo $number. ' <br>';
    }
    echo "Liczby podzielne przez 5: <br>";
    foreach ($tab as $number) {
        if ($number % 5 == 0) {
            
            echo $number. ' <br>';
 
        }
    }
    $licznik = 0;
    foreach ($tab as $number) {
        if ($number > 10) {
            $licznik +=1;            
        }
    }
    echo "Ilosc liczb wiekszych od 10: $licznik<br>";
   

$data = getdate();

$dzien = $data['mday'];
$miesiac = $data['mon'];
$rok = $data['year'];
$godzina = $data['hours'];
$minuta = $data['minutes'];
if($godzina<10) $godzina ='0'.$godzina;
if($minuta<10) $minuta ='0'.$minuta;

$liczbyrzymskie = array(1 =>'I', 2 => 'II', 3 => 'III', 4 => 'IV', 5=>"V", 6=>'VI', 7=>'VII', 8=>'VIII', 9=>'IX', 10=>'X', 11=>'XI', 12=>'XII');

echo "Dziś jest: $dzien.$liczbyrzymskie[$miesiac].$rok rok. <br>";
echo "Aktualna godzina to $godzina:$minuta.";


?>
