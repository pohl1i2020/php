<?php

$connect=mysqli_connect('localhost', 'root', '','klienci');
if (!$connect) {
    exit("blad polaczenia z serwerem mysql");
}
$dodaj = mysqli_query($connect, "Insert into klienci values(23, 'anna','lisek','waadowice')");
if (!$dodaj) {
    # code...
    mysqli_close($connect);
    exit('blad w zapytaniu');
}
$ile=mysqli_affected_rows($connect);
echo "Liczba rekordow dodanych do tabeli whnosi: ", $ile, "<br>";
mysqli_close($connect);
?>