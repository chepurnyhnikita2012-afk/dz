<?php
function bookCard($title = '-',
  $author = '-',
  $year = '-',
  $publisher = '-') {
    return "Книга: $title | Автор: $author | Рік: $year | Видавництво: $publisher";
}
echo bookCard('Історія Харкова', 'Дмитро Багалій', 1905, '-');
echo '<br><br>';
echo bookCard('Вулиці Харкова', 'Леонід Мачулін', 2007, 'Мачулін');
?>