<?
if($uri == '/mail/send/')
{
    $_POST = json_decode(file_get_contents('php://input'), true);
    // if($_POST['token'] == $_COOKIE['PHPSESSID'])
    // {
        if(!empty($_POST['name']) && !empty($_POST['phone']))
        {
            $to = 'web-77@mail.ru';
            $subject = 'Заявка с сайта ЭкоСистем';
            $message = 'Имя: '.$_POST['name'].'
Номер: '.$_POST['phone'].'
Комментарий: '.$_POST['textarea'];
            mail($to, $subject, $message);
            echo 'Успешно отправлено';
        } else {
            echo 'Заполните все обязательные поля';
        }
    // } else {
    //     echo 'Ошибка токена. Перезагрузите страницу';
    // }
    
    exit;
}