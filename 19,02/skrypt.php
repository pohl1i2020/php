<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>Moja strona WWW</title>
 </head>
 <body>
 <p>
 <?php
 $zmienna = $_GET['pole1'];
 $zmienna2 = $_GET['pole2'];
 $zmienna3 = $_GET['radio'];

 if ($zmienna3 == 'dodawanie') {
   $suma = $zmienna + $zmienna2;
    
 }else if($zmienna3 == 'odejmowanie' ){
    $suma = $zmienna - $zmienna2;
 }else if($zmienna3 == 'mnozenie'){
    $suma = $zmienna* $zmienna2;
 }else if($zmienna3== 'dzielenie'){
    $suma = $zmienna/$zmienna2;
 }
 else
 {
     echo "Wybierz równanie";

 }
 
echo "wartosc równania = $suma"

 ?>
 </p>
 </body>
</html>