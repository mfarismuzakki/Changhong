<?php
  include 'config.php';
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require_once "PHPMailer/src/Exception.php";
  require_once "PHPMailer/src/PHPMailer.php";
  require_once "PHPMailer/src/SMTP.php";
    
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = mysqli_connect($server, $user, $pass, $db);

    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $email = $_POST['email'];
    $ponsel = $_POST['ponsel'];

    $query = "SELECT * FROM users WHERE email = '$email' OR username = '$username' OR ponsel = '$ponsel'";

    $check = mysqli_fetch_array(mysqli_query($conn, $query));

    if (isset($check)) {
      echo 'Username/email/nomor ponsel sudah terdaftar';
    } else {
    $query = "INSERT INTO users VALUES (null, '$username', '$password', '$email', '$ponsel')";

      if (mysqli_query($conn, $query)) {
        echo 'Registrasi berhasil';
        
		$mail = new PHPMailer(true);                             
		$mail->isSMTP();

		try {
		    
		    $mail->SMTPDebug = 0;                                 
		    $mail->isSMTP();                                      
		    $mail->Host = 'smtp.gmail.com';  
		    $mail->SMTPAuth = true;                          
		    $mail->Username = 'admyoker@gmail.com';          
		    $mail->Password = 'farisganteng';                
		    $mail->SMTPSecure = 'tls';                       
		    $mail->Port = 587;                               

		    //Recipients
		    $mail->setFrom('admyoker@gmail.com', 'YOKER');
		    $mail->addAddress($_POST['email'], $_POST['username']);     
		    

		    //Content
		    $mail->isHTML(true);                                 
		    $mail->Subject = 'PENGGUNA FORUM YOKER';
		    $mail->Body    = 'Selamat Bergabung dengan FORUM Yoker';
		  
		    $mail->send();
		} catch (Exception $e) {
		  //  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
		}
        
      } else {
        echo 'Ada Kesalahan Server. Mohon Daftar lagi Kembali';
      }
    }
  }
  
  mysqli_close($conn);
?>