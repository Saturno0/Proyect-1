<?php 

    $conexion = mysqli_connect("localhost", "root", "", "Loggin");

    $button = isset($_REQUEST['Loggin_user']);

    if($conexion && $button) {
        loggin();
    }

    function loggin() {
        $user_name_or_mail = $_POST['Nombre-U_Mail'];
        $password = $_POST['Contraseña'];

        $query = "SELECT * FROM Logg_in_user
                  where (nombre_cuenta = '$user_name_or_mail' or mail = '$user_name_or_mail')
                  and contraseña = '$password'";

        
        $ask_if_user_exist = mysqli_querry($conexion, $query);

        if ($ask_if_user_exist) {
            echo "Inicio exitoso";
        } else {
            echo "Nombre de cuenta, mail o contraseña incorrectos";
        }
    }

?>