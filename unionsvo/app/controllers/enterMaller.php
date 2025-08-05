<?php


//чистка данных
function clearData($val)
{
    $val = trim($val);
    $val = stripslashes($val);
    $val = htmlspecialchars($val);
    return $val;

}


//получение данных при отправке формы
if ($_SERVER["REQUEST_METHOD"] == 'POST') {

    $last_name = clearData($_POST['last_name']);
    $first_name = clearData($_POST['first_name']);
    $middle_name = clearData($_POST['middle_name']);
    $phone = clearData(($_POST['phone']));
    $email=clearData($_POST['email']);



$subject="Заявка на вступление";


$to = "";//Прописать почту хостинга
$from = $email;

$message = "$last_name" . " " . "$first_name" . " " . $middle_name . "\r\n"
    . "$phone"." "."$from";

$headers = "From: $from" . "\r\n" .
    "Reply-To: $from" . "\r\n";

if(mail($to, $subject, $message, $headers)){
    $ms_mail= '<div class="container-fluid text-center mt-5 mt-lg-5"><strong class="text-danger">Отправлено! Подождите 3 секунды</strong>  </div>';
    header('Refresh: 3; URL= http://localhost/unionsvo/');//прописывается домен для перенаправления
}
else{
    $ms_mail= '<div class="container-fluid text-center text-danger"><strong class="text-danger">Не отправлено! Подождите 3 секунды</strong>  </div>';
    header('Refresh: 3; URL= http://localhost/unionsvo/');//прописывается домен для перенаправления
}

}
?>




<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>


    <!-- ========== Start Help ========== -->
    <div class="content_mail">
        <?=$ms_mail?>
    </div>
    <!-- ========== End Help ========== -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>