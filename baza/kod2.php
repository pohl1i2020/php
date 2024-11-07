<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <table>
    <tr><th>Id</th><th>Imie</th><th>Nazwisko</th><th>Miejscowosc</th></tr>

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
    // echo ' Polaczona z  baza danych';
    }
$wynik=mysqli_query($connect, 'SELECT * FROM klienci order by miejscowosc ASC');


echo '<br>';
while ($wiersz = mysqli_fetch_array($wynik) ) {
echo '<tr><td>'.$wiersz[0].'</td><td> '. $wiersz[1].'</td><td> '. $wiersz[2].'</td><td> '. $wiersz[3]. "</td></tr>";
}




// $result = mysqli_fetch_row("Id: ".$wynik[0]."Imię: ".$wynik[1]."Nazwisko: ".$wynik[2]);


// echo $wynik;
mysqli_close($connect);
?>
</table>
</body>
</html>