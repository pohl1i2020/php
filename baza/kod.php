<?php
$serwer = 'localhost';
$login = 'root';
$password = '';
$bazadanych = 'klienci';

$connect=mysqli_connect($serwer, $login, $password, $bazadanych);
if(mysqli_connect_errno())
{
    exit('Błąd połaczenia z serwerem MYSQL: '. mysqli_connect_errno());
}else{
    echo ' Polaczona z  baza danych';}
$wynik=mysqli_query($connect, 'SELECT * FROM klienci');


echo '<br>';
while ($wiersz = mysqli_fetch_array($wynik) ) {
echo $wiersz[0].' '. $wiersz[1].' '. $wiersz[2].' '. $wiersz[3]. "<br>";
}




// $result = mysqli_fetch_row("Id: ".$wynik[0]."Imię: ".$wynik[1]."Nazwisko: ".$wynik[2]);


// echo $wynik;
mysqli_close($connect);
?>