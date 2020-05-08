<?php
$_POST = json_decode(file_get_contents('php://input'), true);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (!empty($_POST['uname']) /*&& (!empty($_POST['uemail'])*/ || !empty($_POST['uphone'])) /*)*/ {
    if (isset($_POST['uname'])) {
      if (!empty($_POST['uname'])) {
        $uname = strip_tags($_POST['uname']) . "<br>";
        $unameFieldset = "<b>Имя пославшего:</b>";
      }
    }
    if (isset($_POST['uemail'])) {
      if (!empty($_POST['uemail'])) {
        $uemail = strip_tags($_POST['uemail']) . "<br>";
        $uemailFieldset = "<b>Почта:</b>";
      }
    }
    if (isset($_POST['uphone'])) {
      if (!empty($_POST['uphone'])) {
        $uphone = strip_tags($_POST['uphone']) . "<br>";
        $uphoneFieldset = "<b>Телефон:</b>";
      }
    }
    if (isset($_POST['utext'])) {
      if (!empty($_POST['utext'])) {
        $utext = strip_tags($_POST['utext']) . "<br>";
        $utextFieldset = "<b>Сообщение:</b>";
      }
    }
    if (isset($_POST['formInfoUrl'])) {
      if (!empty($_POST['formInfoUrl'])) {
        $formInfoUrl = strip_tags($_POST['formInfoUrl']) . "<br>";
        $formInfoUrlFieldset = "<b>Заявка со страницы:</b>";
      }
    }
    if (isset($_POST['formInfo'])) {
      if (!empty($_POST['formInfo'])) {
        $formInfo = strip_tags($_POST['formInfo']);
        $formInfoFieldset = "<b>Тема:</b>";
      }
    }

    $to = "egorik580@gmail.com"; /*Укажите адрес, на который должно приходить письмо*/
    $sendfrom = "test"; /*Укажите адрес, с которого будет приходить письмо */
    $headers  = "From: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "Reply-To: " . strip_tags($sendfrom) . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html;charset=utf-8 \r\n";
    $headers .= "Content-Transfer-Encoding: 8bit \r\n";
    $subject = "$formInfo";
    $message = "$unameFieldset $uname
                $uemailFieldset $uemail
                $uphoneFieldset $uphone
                $utextFieldset $utext
                $formInfoUrlFieldset $formInfoUrl
                $formInfoFieldset $formInfo";

    $send = mail($to, $subject, $message, $headers);
    if ($send == 'true') {
      echo '<p class="success">Спасибо за отправку вашего сообщения!</p>';
    } else {
      echo '<p class="fail"><b>Ошибка. Сообщение не отправлено!</b></p>';
    }
  } else {
    echo '<p class="fail">Ошибка. Вы заполнили не все обязательные поля!</p>';
  }
} else {
  header("Location: http://smartlanding.biz"); // главная страница вашего лендинга
}
