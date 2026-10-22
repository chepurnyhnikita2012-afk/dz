<?php
function reverseString($text) {
    return strrev($text);
}
function removeEveryOtherWord($text) {
    $words = explode(" ", $text);
    $result = [];
    foreach ($words as $key => $word) {
        if ($key % 2 == 0) {
            $result[] = $word;
        }
    }
    return implode(" ", $result);
}
?>
