<?php

$recepient = "Olegmeister.9@yandex.ru";
$sitename = "Название сайта";

$name = trim($_POST["name"]);
$phone = trim($_POST["tell"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nТелефон: $tell \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");