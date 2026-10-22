<?php
function manager() {
    return 2000;
}
function programmer() {
    return 300;
}
function director() {
    return 70000;
}
$position = "programmer";
$salary = call_user_func($position);
echo "<h2>Зарплата</h2>";
echo "Посада: програміст<br>";
echo "Зарплата: $salary грн";
?>
