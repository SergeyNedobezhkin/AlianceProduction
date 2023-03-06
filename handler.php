<?php
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);
$token = "6115923777:AAGr9ElsrniFm2vcaagBguHHJD36gwFOeh4";
$chat_id = "-730231440";

$formData = array(
  "Клиент: " => $user_name,
  "Телефон: " => $user_phone,
);
foreach ($formData as $key => $value) {
  $text .= $key . "<b>" . urldecode($value) . "</b>" . "%0A";
}

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");
if ($sendToTelegram) {
  echo "Success";
} else {
  echo "error";
} ?>