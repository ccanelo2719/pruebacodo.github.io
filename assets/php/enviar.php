<?php
// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];

// Validar los datos (puedes agregar más validaciones según tus necesidades)
if (empty($nombre) || empty($email) || empty($mensaje)) {
  echo "Por favor, completa todos los campos.";
} else {
  // Enviar el correo electrónico con los datos del formulario
  $to = "canelo.mauricio@gmail.com";
  $subject = "Nuevo mensaje de contacto";
  $message = "Nombre: $nombre\n";
  $message .= "Email: $email\n";
  $message .= "Mensaje: $mensaje\n";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo "Gracias por contactarnos. Te responderemos pronto.";
  } else {
    echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.";
  }
}
?>
