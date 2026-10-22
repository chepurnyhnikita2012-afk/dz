<?php
require("students.php");
echo '<h2>РОЗПОРЯДЖЕННЯ ДЕКАНАТУ</h2>';
echo '<p>Дата: 999 р. до н. е.</p>';
echo '<h3>1. Нарахувати стипендію студентам:</h3>';
foreach ($students['stipendia'] as $student) {
    echo $student['name'] . ' ';
    echo $student['surname'] . ' — ';
    echo $student['money'] . ' грн<br>';
}
echo '<h3>2. Відрахувати неуспішних студентів:</h3>';
foreach ($students['expulsion'] as $student) {
    echo $student['name'] . ' ';
    echo $student['surname'] . '<br>';
}
echo '<h3>3. Оголосити подяку відмінникам за успіхи в навчанні:</h3>';
foreach ($students['gratitude'] as $student) {
    echo $student['name'] . ' ';
    echo $student['surname'] . '<br>';
}
echo '<h3>4. Нарахувати премію учасникам олімпіади:</h3>';
foreach ($students['stipendia'] as $student) {
    echo $student['name'] . ' ';
    echo $student['surname'] . ' — ';
    echo $student['money'] . ' грн';

    if ($student['name'] == 'Никита') {
        echo ' — Супер учень 💀';
    }

    echo '<br>';
}
echo '<p><b>Підпис: Деканат НЧ</b></p>';
?>
