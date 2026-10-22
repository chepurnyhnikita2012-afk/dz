<?php
require("string_functions.php");
echo "<h2>Бібліотека рядків</h2>";
echo "<b>1. Перевернути рядок:</b><br>";
echo reverseString("Nikita Hello Kharkiv");
echo "<br><br>";
echo "<b>2. Видалити слова через одне:</b><br>";
echo removeEveryOtherWord("Nikita Hello Kharkiv");
echo "<br><br>";
echo "<b>3. Перші літери слів:</b><br>";
function firstLetters($words) {
    $result = "";
    foreach ($words as $word) {
        $result .= substr($word, 0, 1);
    }
    return $result;
}
$words = ["Nikita", "Hello", "Kharkiv"];
echo firstLetters($words);
?>