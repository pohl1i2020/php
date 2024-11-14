
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h2>Dodaj czytelnika</h2>
<form action="biblioteka.php" method="POST">
<label for="">Imię:
    <input type="text" name='imie'>
</label>
<label for="">Nazwisko:
    <input type="text" name='nazwisko'>
</label>
<label for="">Symbol:
    <input type="number" name='symbol' >
</label>
<input type="submit" name='Wyślij' value='Dodaj'>
</form>    
<?php


$connect=mysqli_connect('localhost', 'root', '','biblioteka2');
if(!$connect){
    echo "nie polaczyles sie z baza danych";

exit;

}else{
    // echo 'polaczyles sie z baza danych';

    $zapytanie = mysqli_query($connect, 'SELECT imie,nazwisko from autorzy order BY nazwisko;');

    if (!$zapytanie) {
        mysqli_close($connect); 
        echo 'bląd w zapytaniu <br>';

        exit;
    }else{

        $name = $_POST['imie'];
        $surname =$_POST['nazwisko'];
        $symbol = $_POST['symbol']; 
        
        if ($name != '' && $surname !='' && $symbol !=''){
        $zapytanie3 = mysqli_query($connect, "Insert into czytelnicy(imie, nazwisko, kod) VALUES('$name', '$surname', '$symbol')");   
        
        }
        
        // echo $zapytanie3;
                echo '<h3> Polecamy dzieła autorów: </h3>';
                echo '<ol>';
        
            while ($row = mysqli_fetch_array($zapytanie)) { 
                echo "<li>", "$row[imie]", " ", "$row[nazwisko]", "</li>";
            }
            echo "</ol>";
            mysqli_close($connect);
        }
    }



?>







</body>
</html>
