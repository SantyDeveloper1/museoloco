<?php
@session_start();
error_reporting(0);
include_once '../conexion/conectar.php';
include_once '../lib/functions.php';
include_once '../lib/config.php';

if (empty($_POST["nomUsu"])) {
    $errors[] = "Ingrese el Nombre";
} elseif (empty($_POST["appUsu"])) {
    $errors[] = "Ingrese el Apellido Paterno";
} elseif (empty($_POST["apmUsu"])) {
    $errors[] = "Ingrese el Apellido Materno";
} elseif (empty($_POST["celUsu"])) {
    $errors[] = "Ingrese el Número de Celular";
} elseif (empty($_POST["sexUsu"])) {
    $errors[] = "Seleccione su Género";
} elseif (empty($_POST["emaUsu"])) {
    $errors[] = "Ingrese el Correo Electrónico";
} elseif (empty($_POST["pass1"])) {
    $errors[] = "Ingrese su Contraseña";
} elseif (empty($_POST["pass2"])) {
    $errors[] = "Repetir la contraseña es obligatorio";
} else {
    $nom = $_POST["nomUsu"];
    $app = $_POST["appUsu"];
    $apm = $_POST["apmUsu"];
    //$doc = $_POST["docUsu"];
    $cel = $_POST["celUsu"];
    $sexo = $_POST["sexUsu"];
    $email = $_POST["emaUsu"];
    $pass1 = $_POST["pass1"];
    $pass2 = $_POST["pass2"];
    $est = 1;
    $priUsu = 1; // Asignar por defecto como usuario normal
    $img = "assets/uploads/2023/05/perfil.png";
    $reg = date("Y-m-d H:i:s");

    if ($pass1 == $pass2) {
        $llave = $template['clave_publica'];
        $password = encrypt($pass1, $llave);

        // Verificar si el número de celular ya está registrado
        $sql = "SELECT * FROM usuario WHERE celUsu='$cel'";
        $consulta = $conector->query($sql);
        if ($consulta->num_rows > 0) {
            $errors[] = "El número de celular ya está registrado, intenta con otro diferente";
        } else {
            // Verificar si el correo ya está registrado
            $sql = "SELECT * FROM usuario WHERE emaUsu='$email'";
            $consulta = $conector->query($sql);
            if ($consulta->num_rows > 0) {
                $errors[] = "El correo ya está registrado, intenta con otro diferente";
            } else {
                // Validaciones de correo y celular
                if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    if (preg_match("/^[0-9]{9}$/", $cel)) {
                        // Insertar usuario en la base de datos
                        $sql = "INSERT INTO usuario (nomUsu, appUsu, apmUsu, celUsu, sexUsu, emaUsu, pasUsu, priUsu, estUsu, imgUsu, regUsu) 
                                VALUES ('$nom', '$app', '$apm', '$cel', '$sexo', '$email', '$password', '$priUsu', '$est', '$img', '$reg')";

                        $insert = $conector->query($sql);
                        if ($insert === TRUE) {
                            $messages[] = "Registro exitoso";
                        } else {
                            $errors[] = "No se pudo registrar el usuario";
                        }
                    } else {
                        $errors[] = "Ingrese un número de celular válido de 9 dígitos";
                    }
                } else {
                    $errors[] = "Ingrese una dirección de correo electrónico válida";
                }
            }
        }
    } else {
        $errors[] = "Las contraseñas no coinciden";
    }
}

// Mostrar errores si existen
if (isset($errors)) {
    echo '<div class="alert alert-danger" role="alert">';
    echo '<b>Error</b>: ';
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    echo '</div>';
}

// Mostrar mensajes de éxito si existen
if (isset($messages)) {
    echo '<div class="alert alert-success" role="alert">';
    echo '<b>Éxito</b>: ';
    foreach ($messages as $msg) {
        echo $msg . "<br>";
    }
    echo '</div>';
}
?>
