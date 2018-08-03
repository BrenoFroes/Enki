<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';


$mail = new PHPMailer();


// =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
$mail->IsSMTP(); // Define que a mensagem será SMTP
$mensagem = $_POST['eemail'];
try {
     $mail->Host = 'p3plcpnl0840.prod.phx3.secureserver.net';
     $mail->SMTPAuth   = true;
     $mail->Port       = 587;
     $mail->Username = 'enki@enkisolucoes.com.br';
     $mail->Password = '250719na';
     $mail->SMTPSecure = 'tls';

     //Define o remetente
     // =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=
     $mail->SetFrom('enkisolucoes@gmail.com', 'Enki');
     $mail->AddReplyTo('nathann-s@outlook.com', 'Nathan');
     $mail->Subject = 'Site da Enki';



     $mail->AddAddress('enkisolucoes@gmail.com', 'Site da Enki');
     $mail->AddAddress('nathann-s@outlook.com', 'Site da Enki');
     $mail->AddAddress('bfroes58@gmail.com', 'Site da Enki');




     $mail->MsgHTML($mensagem);



    $mail->Send();
    echo "<script language='javascript' type='text/javascript'>alert('Mensagem enviada com sucesso');window.location.href='index.html';</script>";






    }catch (phpmailerException $e) {
      echo $e->errorMessage();
}
?>
