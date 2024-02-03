<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["name"];
    $phone = $_POST["phone"];
    $mensaje = $_POST["text"];
    $service = $_POST["service"];

    $to = ""; // Reemplaza con tu dirección de correo electrónico
    $subject = "Nuevo mensaje del formulario de contacto";

    $message = "Nombre: $nombre\n";
    $message .= "Número de contacto: $phone\n\n";
    $message .= "Servicio: $service\n";
    $message .= "Mensaje:\n$mensaje";

    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    // Agregar toast de Boostrap al enviar el correo
    exit();
}
?>
