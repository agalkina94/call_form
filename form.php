<?php
if (!empty($_POST)) {
    $data = $_POST;
    $mail = "test@test.ru";
    $subject = "Вопрос";
    $subject = "Заказ";
    $mes = strip_tags("Имя:".trim($data['uname'])."\nE-mail: ".trim($data['uemail']) ."\nТекст: ".trim($data['message']));
    $send = mail($mail, $subject, $mes);
    if ($send) {
        echo 'Данные отправлены';
    } else {
        echo 'Не удалось отправить данные';
    }
}
