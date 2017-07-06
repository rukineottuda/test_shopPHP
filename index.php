<?php
echo "frontController<br />";
//Получили часть запроса по которому пользователь пришёл на сайт
echo ' you reqouest: '.$_SERVER['REQUEST_URI'];
// после передаём управление на другой файл