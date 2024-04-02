<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String PHP</title>
</head>

<body>
    <h1>Berlatih String</h1>
    <?php
    echo "<h3>Soal No 1</h3>";
    echo $string = "PHP is never old <br>";
    $panjang_string = strlen($string);
    $jumlah_kata = str_word_count($string);
    echo "Panjang string : $panjang_string karakter <br>Jumlah kata : $jumlah_kata <br> <hr>";

    echo $first_sentence = "Hello PHP! <br>";
    $panjang_first = strlen($first_sentence);
    $jumlah_first = str_word_count($first_sentence);
    echo "Panjang string : $panjang_first karakter <br>Jumlah kata : $jumlah_first <br> <hr>";

    echo $second_sentence = "I'm ready for the challenges <br>";
    $panjang_second = strlen($second_sentence);
    $jumlah_second = str_word_count($second_sentence);
    echo "Panjang string : $panjang_second karakter <br>Jumlah kata : $jumlah_second <br>";
    ?>
    <hr>
</body>

</html>