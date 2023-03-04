<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $to = 'alfarojasson@gmail.com';
  $subject = 'Mensaje de ' . $name . ': ' . $subject;
  $message = 'De: ' . $name . ' (' . $email . ')' . "\r\n\r\n" . $message;
  $headers = 'From: ' . $email . "\r\n" . 'Reply-To: ' . $email . "\r\n" . 'X-Mailer: PHP/' . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo '¡Gracias por contactarnos, ' . $name . '! Nos pondremos en contacto contigo lo antes posible.';
  } else {
    echo 'Lo siento, hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.';
  }
}
?>
