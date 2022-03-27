<?php
$text = $_POST['text'];
if (!preg_match("/http:\/\/asozd\.duma\.gov\.ru\/main\.nsf\/\(Spravka\)\?OpenAgent&RN=[0-9-]+&[0-9]+/", $text)) {
    echo "Ошибка! Неверный формат!";
    die();
}
preg_match_all("/[0-9-]+/", $text, $lawAndNumber);
$law = $lawAndNumber[0][0];
$newLink = "http://sozd.parlament.gov.ru/bill/" . $law;
echo $newLink;