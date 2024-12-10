<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $birthdate = htmlspecialchars($_POST['birthdate']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = "tu-correo@gmail.com";
    $subject = "Nuevo mensaje de contacto";
    $body = "Nombre: $name\nFecha de Nacimiento: $birthdate\nTeléfono: $phone\nEmail: $email\nMensaje: $message";

    if (mail($to, $subject, $body)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
