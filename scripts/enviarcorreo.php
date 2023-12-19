<?php

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["correo"])) {
        $correo = $_POST["correo"];

        // Verificar si el correo tiene un formato válido
        if (filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            // Aquí puedes agregar la lógica para generar una nueva contraseña y enviar el correo
            // Por ejemplo, podrías usar la función mail() de PHP para enviar el correo

            // Generar nueva contraseña
            $nuevaContraseña = generarNuevaContraseña();

            // Enviar correo
            $to = $correo;
            $subject = 'Restablecimiento de contraseña';
            $message = 'Su nueva contraseña es: ' . $nuevaContraseña;
            $headers = 'From: meow.coffee28@gmail.com';

            if (mail($to, $subject, $message, $headers)) {
                echo "Correo de restablecimiento enviado con éxito.";
            } else {
                echo "Error al enviar el correo. Por favor, inténtelo de nuevo más tarde.";
            }
        } else {
            echo "El formato del correo electrónico no es válido.";
        }
    } else {
        echo "Por favor, proporcione su dirección de correo electrónico.";
    }
}

// Función para generar una nueva contraseña
function generarNuevaContraseña() {
    return substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
}
?>

?>