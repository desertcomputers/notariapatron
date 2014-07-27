<?php
 
if(isset($_POST['email'])) {
 
     
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
 
    $email_to = "gpbnotario@hotmail.com";
 
    $email_subject = "Mensaje recibido desde la pagina web.";
 
     
 
     
 
    function died($error) {
 
        // your error code can go here
 
        echo "Lo sentimos mucho,  pero hay errores en su formulario.";
 
        echo "Los errores son los siguientes:<br /><br />";
 
        echo $error."<br /><br />";
 
        echo "Por favor regrese y corriga esos errores.<br /><br />";
 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['name']) ||
  
        !isset($_POST['email']) ||
 
        !isset($_POST['message'])) {
 
        died('Lo sentimos pero hay un error con el mensaje que ha enviado..');       
 
    }
 
     
 
    $name = $_POST['name']; // required
 
    $email = $_POST['email']; // required
 
    $message = $_POST['message']; // required
 
     
 
    $error_message = "";
 
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email)) {
 
    $error_message .= 'La direccion de correo electronico parece ser invalida.<br />';
 
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$name)) {
 
    $error_message .= 'El nombre parece ser invalido<br />';
 
  }
 
  if(strlen($message) < 2) {
 
    $error_message .= 'Su comentario parece ser invalido.<br />';
 
  }
 
  if(strlen($error_message) > 0) {
 
    died($error_message);
 
  }
 
    $email_message = "Detalles de su mensaje a continuacion:\n\n";
 
     
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
 
    $email_message .= "Nombre: ".clean_string($name)."\n";
 
    $email_message .= "Correo Electronico: ".clean_string($email)."\n";
 
    $email_message .= "Mensaje: ".clean_string($message)."\n";
 
     
 
     
 
// create email headers
 
$headers = 'From: '.$email."\r\n".
 
'Reply-To: '.$email."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
 
}
 
?>

<?php include './inc/head.php'; ?>
<?php include './inc/nav.php'; ?>
<?php include './inc/jumbotron.php'; ?>
<?php include './inc/content/bodyEmail.php'; ?>
<?php include './inc/footer.php'; ?>