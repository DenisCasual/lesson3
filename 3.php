<?php
$obl = [
    "Московская область" => ["Москва","Зеленоград","Клин"],
    "Ленинградская область" => ["Санкт-Петербург","Всеволожск","Павловск","Кронштадт"],
    "Рязанская область" => ["Рязань","Скопин","Сасово"]
];
foreach ($obl as $key => $value) {
    echo "$key :<br>";
    foreach ($value as $key => $value) {
        echo "$value<br>";
    }
}

?>