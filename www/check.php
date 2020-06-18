<?
header('Content-Type: text/html; charset= utf-8');
$email=$_POST["email"];
$message=$_POST["message"];
$erorr='';
if(trim($email)==''){
    $erorr="<p style=' color:red; font-size:30px; opacity:0.7;'>Поле не заполнено!<a href='about.php'>Вернуться обратно</a></p>";
}
else if(trim($message)==''){
    $erorr="<p style=' color:red; font-size:30px; opacity:0.7;'>Сообщение не написано!<a href='about.php'>Вернуться обратно</a></p>";
}
else if(strlen($message)<10){
    $erorr="<p style=' color:red; font-size:30px; opacity:0.7;'>Сообщение должно содержать не менее 10 символов<a href='about.php'>Вернуться обратно</a></p>";
}
if(!error=='') {
    echo $erorr;
    
}
$subject="=?utf-8?B?".base64_encode("Тема сообщения")."?=";
$headers="From: $email\r\nReply-to: $email\r\nContrnt-type: text/html;charset=utf-8\r\n";
mail($email,$subject, $message,$headers);
header('Location:/about.php');
?>


