<?php
$menuArr = [
    'Главная',
    'Контакты' => ['Телефон','Адрес'],
    'О нас' => ['История','Награды']
];
    function menuRender($arr)
    {
        if(!is_array($arr)) {
            return 'Error';
        }
        
        $renderArr[] = '<ul>';
        foreach ($arr as $key => $value) {
            if (is_array($value)) {
                $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
            } else {
                $renderArr[] = '<li>' . $value. '</li>';
            }
        } $renderArr[] = '</ul>';
        return implode($renderArr);
    }
echo menuRender($menuArr);
echo '<hr>';
?>