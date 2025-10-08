<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

use Bitrix\Main\Mail\Event;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $response = ['success' => false, 'message' => ''];

    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    // Простая валидация
    /*if (empty($name) || empty($email) || empty($message)) {
        $response['message'] = 'Все поля обязательны для заполнения';
        echo json_encode($response);
        die();
    }*/
    if (empty($name)) {
        $response['error_input'] = 'name';
        $response['message'] = 'Укажите пожалуйста свое имя!';
        echo json_encode($response);
        die();
    }
    if (empty($email)) {
        $response['error_input'] = 'name';
        $response['message'] = 'Укажите пожалуйста свой email для связи!';
        echo json_encode($response);
        die();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = 'Указан некорректный email';
        echo json_encode($response);
        die();
    }

    // Отправка почтового события
    $result = Event::send([
        "EVENT_NAME" => "FEEDBACK_FORM",
        "LID" => SITE_ID,
        "C_FIELDS" => [
            "NAME" => $name,
            "EMAIL" => $email,
            "MESSAGE" => $message
        ],
    ]);

    if ($result->isSuccess()) {
        $response['success'] = true;
        $response['message'] = 'Сообщение успешно отправлено';
    } else {
        $response['message'] = 'Ошибка при отправке сообщения';
    }

    echo json_encode($response);
    die();
}
