<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'scripts/PHPMailer/PHPMailer.php';
require 'scripts/PHPMailer/SMTP.php';
require 'scripts/PHPMailer/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получаем данные формы
    $userName = htmlspecialchars($_POST['user-name']);
    $position = htmlspecialchars($_POST['position']);
    $company = htmlspecialchars($_POST['company']);
    $userCellphone = htmlspecialchars($_POST['user-cellphone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Создаем новый экземпляр PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Настройки сервера
        $mail->isSMTP();
        $mail->Host = 'smtp.yandex.ru';
        $mail->SMTPAuth = true;
        $mail->Username = 'InvestSibsteklo@yandex.ru';
        $mail->Password = 'qxeaoxunwrpigpfl';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Отправитель и получатель
        $mail->setFrom('InvestSibsteklo@yandex.ru', 'Сибстекло');
        $mail->addAddress('dmitry.fedorovv@gmail.com');

        // Тема и тело письма
        $mail->Subject = 'Новая заявка с формы: Как стать инвестором';
        $mail->Body = "
            Имя: $userName\n
            Должность: $position\n
            Компания: $company\n
            Телефон: $userCellphone\n
            Email: $email\n
            Сообщение: $message\n
        ";

        // Отправка письма
        $mail->send();
        echo 'Ваше сообщение успешно отправлено!';
    } catch (Exception $e) {
        echo "Ошибка при отправке сообщения: {$mail->ErrorInfo}";
    }
} else {
    echo 'Ошибка: Данные формы не были отправлены';
}
