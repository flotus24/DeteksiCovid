<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){//jika input submit di klik
  //variabel yang ngambil data dari form contact
  $name         = $_POST['name'];
  $email        = $_POST['email'];
  $message      = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bigeilish1999@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'shafiraichsani'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('bigeilish1999@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('bigeilish1999@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Form Kontak DeteksiCovid to Email Message';//subject pesan
    /*isi pesan*/
    $mail->Body = "
    <h1>subject</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>: $name</td>
        </tr>
        
        <tr>
            <td>Email</td>
            <td>: $email</td>
        </tr>
        
        <tr>
            <td>Message</td>
            <td>: $message</td>
        </tr>
    </table>
    ";

    $mail->send();//pesan dikirim ke email perusahaan
    header("location:../index.php");//direct ke index.php
      
  
  } catch (Exception $e){
     $e->getMessage();
  }
}
?>
