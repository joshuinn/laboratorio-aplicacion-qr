<?php

    if(!empty($_POST["IngresarA"])){
        if(empty($_POST["boleta"]) and empty($_POST["contra"])){
            
            echo '<div class = "alert alert-danger"><center>LOS CAMPOS ESTAN VACIOS</center></div>';
            
        } else {
            
            $boleta = $_POST["boleta"];
            $contra = $_POST["contra"];
            
            $conexion->select_db("usuariose");
            $sql = $conexion->query(" select * from users where boleta='$boleta' and contra='$contra' ");
            
            
            if($datos = $sql->fetch_object())
            {
               // echo "Has ingresado";
                
               // mysql_close($conexion);
                
                header("location: ../PruebasP/principal.php ");
                
            } else {
                
                 echo '<div class = "alert alert-danger"><center>CREDENCIALES INCORRECTAS</center></div>';
                
            }
            
        }
    }
?>