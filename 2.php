<?php
$n = 10;
$i = 0;
function vyvod($i) {
    if ($i == 0) {
        return "$i" . 'Ноль<br>';
    }
    if ($i % 2) {
        return "$i" . 'Нечетное число<br>';
    }
    else {
        return "$i" . 'Четное число<br>';
    }
}
do {
    echo vyvod($i);
    $i++;
} 
while ($i <= $n);

?>
