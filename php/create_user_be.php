<?php
    $conexion = mysqli_connect("localhost", "root", "", "Loggin");

    if (!$conexion) {
        echo "No se a podido conectar a la base de datos"
    } else {    
        $button = isset($_REQUEST['Create_user']);
            if ($button) {
                crear_usuario($conexion);
            }
    }

    function crear_usuario($conexion) {
        
            $nombre_completo = $_POST['Nombre_completo'];
            $mail = $_POST['Mail'];
            $nombre_usuario = $_POST['Nombre_usuario'];
            $contrasena = $_POST['Password'];
    
            $query = "INSERT INTO User (nombre_y_apellido, mail, nombre_cuenta, contraseña) VALUES ('$nombre_completo', '$mail', '$nombre_usuario', '$contrasena')";
            $query2 = "INSERT INTO Logg_in_user (nombre_cuenta, mail, contraseña) VALUES ('$nombre_usuario', '$mail', '$contrasena')";

    
            $ask_querry_mail = "SELECT mail FROM User WHERE mail = '$mail'";
            $ask_querry_name = "SELECT nombre_cuenta FROM User WHERE nombre_cuenta = '$nombre_usuario'";
            
            $results_mail = mysqli_query($conexion, $ask_querry_mail);
            $results_name = mysqli_query($conexion, $ask_querry_name);
    
            if ($results_mail && mysqli_num_rows($results_mail) > 0) {
                if ($results_name && mysqli_num_rows($results_name) > 0) {
                    echo "Nombre de cuenta y mail ya en uso";
                } else {
                    echo "Mail ya en uso";
                }
            } else if ($results_name && mysqli_num_rows($results_name) > 0) {
                echo "Nombre ya en uso";
            } else {
                $ejecutar = mysqli_query($conexion, $query);
    
                if ($ejecutar) {
                    echo "Cuenta creada exitosamente";
                } else {
                    echo "Error al crear el usuario: " . mysqli_error($conexion);
                }
            }

        }

?>


