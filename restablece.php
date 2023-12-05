<!doctype html>
<html lang="en">
  <head>
    <title>Restablecer</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="./css/bootstrap.min.css"/>
  </head>
  <body style="background: ; display: flex; justify-content: center; align-items: center; margin : 10%" >

      <div style="background: ; display: flex; justify-content: center; align-items: center;">
    
    <div>
    <form method="POST"action="">
    <h4><center> Restablecer constraseña </center></h4>
    <p><center> Ingrese el correo que proporcionó cuando se registró </center></p>
    <center><input style="border-radius: .5em; background: green;  border:1px solid green; color: white"  type="text" id="miCampoTexto" name="miCampoTexto" placeholder=" &nbsp Correo"></center>
    <p></p>
    <p></p>
    <center><a name="EnviarC" id="IngeA" class="btn btn-outline-danger" href="#" role="button" style=" padding: 3px 55px" onclick="<?php echo 'enviarCorreo()'; ?>">Enviar correo</a></center>
    <p></p>
        <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a name="RegresarInicio" id="RegrI" class="btn btn btn-outline-warning" href="iniciosesion.php" role="button">Regresar</a>
    <script>
    function enviarCorreo() {
        var correo = $("#miCampoTexto").val();

        // Validar si el campo de correo está vacío
        if (correo === "") {
            alert("Por favor, ingrese su correo.");
            return false;
        }

        // Realizar la solicitud AJAX para enviar el correo
        $.ajax({
            type: "POST",
            url: "enviar_correo.php", // Reemplaza esto con la ruta correcta a tu script de PHP
            data: { correo: correo },
            success: function(response) {
                alert(response); // Muestra la respuesta del servidor (puede ser un mensaje de éxito o error)
            },
            error: function() {
                alert("Error al procesar la solicitud.");
            }
        });

        return false;
    }
</script>
          </div>
      </div>
    </form>
  </body>
</html>