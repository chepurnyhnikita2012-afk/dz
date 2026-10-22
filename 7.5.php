<?php
function changeDate($date) {
    return preg_replace_callback('/(\d{2})\.(\d{2})\.(\d{4})/', function($matches) {
        $day = $matches[1];
        $month = (int)$matches[2];
        $year = $matches[3];
        switch ($month) {
            case 1: $monthName = "січня"; break;
            case 2: $monthName = "лютого"; break;
            case 3: $monthName = "березня"; break;
            case 4: $monthName = "квітня"; break;
            case 5: $monthName = "травня"; break;
            case 6: $monthName = "червня"; break;
            case 7: $monthName = "липня"; break;
            case 8: $monthName = "серпня"; break;
            case 9: $monthName = "вересня"; break;
            case 10: $monthName = "жовтня"; break;
            case 11: $monthName = "листопада"; break;
            case 12: $monthName = "грудня"; break;
            default: return $matches[0];
        }
        return "$day $monthName $year року";
    }, $date);
}
echo "<h2>Дата</h2>";
echo changeDate("31.12.2027");

?>
