<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Moja strona WWW</title>
    </head>
    <body>
        <form enctype="multipart/form-data" action="index.php" method="post">
            <div>
                <p>Napisz opinie</p>
                <textarea name="opinia" id="opinia" cols="30" rows="10" maxlength="511"></textarea>
                Nick:<input type="text" name="nickname" id="nickname">
                <input type="submit" value="prześlij">
            </div>
        </form>

        <br>

        <?php
        function czysc($nazwa_pliku)
        {
            $odczyt = fopen($nazwa_pliku, 'w');
            file_put_contents("nazwa_pliku.txt", "");
            fclose($odczyt);
        }

        $name = 'opinie.txt';

        if (isset($_POST['opinia'])) {
            $zapis_pliku = fopen($name, 'a');

            // Get the current date and time
            $currentDate = date("Y-m-d H:i:s");

            // Get the nickname from the form
            $nickname = isset($_POST['nickname']) ? $_POST['nickname'] : "Anonymous";

            // Format the entry with date, nickname, and opinion
            $entry = "Data: $currentDate Nick: $nickname Opinia: " . ltrim($_POST['opinia']) . "\n";

            // Write the entry to the file
            fwrite($zapis_pliku, $entry);

            // Clear the form values
            $_POST['opinia'] = null;
            $_POST['nickname'] = null;

            fclose($zapis_pliku);
        }

        // czysc($name);

        if (is_file($name)) {
            $opinie = [];
            $odczyt_pliku = fopen($name, 'r');
            while (($line = fgets($odczyt_pliku)) !== false) {
                $opinie[] = $line;
            }
            $licznik = 0;
            foreach ($opinie as $zmienna) {
                $licznik++;
                $text = "<h4>Opinia nr. {$licznik}</h4><p>{$zmienna}</p>";
                print $text;
            }
        } else {
            echo "Brak wcześniejszych opinii";
        }
        ?>
    </body>
</html>
