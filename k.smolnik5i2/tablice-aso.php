
<!-- tablico aso  -->


<!-- <?php

$tablica['imie']='Jan';
$tablica['nazwisko']='Kowalki';
$tablica['adres']='Polna 1';


echo $tablica['imie'].' '.$tablica['nazwisko'].', ul. ' .$tablica['adres'];

?> -->

<!-- tablica array -->
<!-- <?php

$tab=array("Dzień 1"=>'Poniedziałek',
        "Dzień 2"=>'Wtorek',
        "Dzień 3"=>'Środa',
        "Dzień 4"=>'Czwartek',
        "Dzień 5"=>'Piątek',
        "Dzień 6"=>'Sobota',
        "Dzień 7"=>'Niedziela');

foreach ($tab as $item => $description) {
    echo $item,": ", $description,"<br>";
}

?> -->





<!-- petla foreach -->

<!-- <?php

$tab=array("Poniedzialek",'Wtorek','sroda','czwartek','piatek','sobota','niedziela');

foreach ($tab as $item ) {
    echo $item, ' ';
}

?> -->




<!-- tablica prosta tablica foreach  -->


<!-- <?php

$tab = array(3,9,1,2,5,4,7,6,1,3);
echo 'tablica przed doawaniem: ';
foreach($tab as $item){
    echo $item.', ';
}

echo '<br> Tablica po dodawaniu: ';
foreach($tab as $item){
    echo $item+2 . ', ';
}
?> -->

<?php

$data =getdate();
$dzien=$data["mday"];

?>

<!-- tablico aso  -->


<!-- <?php

$tablica['imie']='Jan';
$tablica['nazwisko']='Kowalki';
$tablica['adres']='Polna 1';


echo $tablica['imie'].' '.$tablica['nazwisko'].', ul. ' .$tablica['adres'];

?> -->

<!-- tablica array -->
<!-- <?php

$tab=array("Dzień 1"=>'Poniedziałek',
        "Dzień 2"=>'Wtorek',
        "Dzień 3"=>'Środa',
        "Dzień 4"=>'Czwartek',
        "Dzień 5"=>'Piątek',
        "Dzień 6"=>'Sobota',
        "Dzień 7"=>'Niedziela');

foreach ($tab as $item => $description) {
    echo $item,": ", $description,"<br>";
}

?> -->





<!-- petla foreach -->

<!-- <?php

$tab=array("Poniedzialek",'Wtorek','sroda','czwartek','piatek','sobota','niedziela');

foreach ($tab as $item ) {
    echo $item, ' ';
}

?> -->




<!-- tablica prosta tablica foreach  -->


<!-- <?php

$tab = array(3,9,1,2,5,4,7,6,1,3);
echo 'tablica przed doawaniem: ';
foreach($tab as $item){
    echo $item.', ';
}

echo '<br> Tablica po dodawaniu: ';
foreach($tab as $item){
    echo $item+2 . ', ';
}
?> -->


<!-- DATA -->
<!-- <?php

$data =getdate();

$dzien=$data["mday"];
$miesiac=$data["mon"];
$rok=$data["year"];
$godzina=$data["hours"];
$minuta=$data["minutes"];
$sekunda=$data["seconds"];
if($dzien<10) $dzien ='0'.$dzien;
if($miesiac<10) $miesiac ='0'.$miesiac;
if($godzina<10) $godzina ='0'.$godzina;
if($minuta<10) $minuta ='0'.$minuta;
if($sekunda<10) $sekunda ='0'.$sekunda;
echo "Bieżąca data to: $dzien-$miesiac-$rok r. <br>";
echo "Aktualna godzina to: $godzina : $minuta : $sekunda";

?> -->


<!-- zadanie -->


<?php

$data =getdate();
$dzienm=$data["mday"];

$dzien=$data["weekday"];
$miesiac=$data["month"];
$rok=$data["year"];
$dzienr=$data["yday"];

echo "Dzisiaj jest $dzien <br>";
echo "$dzienm $miesiac $rok r. <br>";
echo "Jest to $dzienr dzień roku";

?>
