<?php
function nikita($array) {
    return array_map('strtolower', $array);
}
$words = ['KHARKIV', 'HELLO', 'I', 'NIKITA'];
$result = nikita($words);
foreach ($result as $word) {
    echo $word . '<br>';
}
?>