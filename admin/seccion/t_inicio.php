<?php 
    @session_start();
    include_once '../lib2/config.php';
    include_once '../lib2/functions.php';
    include_once '../conexion/conectar.php';
    if(!empty($_SESSION['codUsu'])){
       $priv_user = $_SESSION['priUsu'];
       $id_user = $_SESSION['codUsu'];
       if($priv_user <> 1){
            redireccionar2("../mod_empleado/");
       }
       $sql = "SELECT *FROM usuario WHERE codUsu='".$id_user."' AND estUsu=1";
       $consulta = $conector->query($sql);
       while($fila = $consulta->fetch_array()){
            $nom_user = $fila['nomUsu'];
            $img_user = $fila['imgUsu'];
            $app_user = $fila['appUsu'];
            $apm_user = $fila['apmUsu'];
            $ema_user = $fila['emaUsu'];
            //$doc_user = $fila['docUsu'];
            $cel_user = $fila['celUsu'];
            if($fila['sexUsu']=="M"){     
                $masculino = "checked";
                $feminino = "";
             }else{
                $masculino = "";
                $feminino = "checked";
             }
            /*if($fila['tdoUsu']==1){
                $dni = "checked";
                $pasaporte = "";
                $carnetExtrajro = "";
            }elseif($fila['tdoUsu']==2){
                $dni = "";
                $pasaporte = "checked";
                $carnetExtrajro = "";
            }else{
                $dni = "";
                $pasaporte = "";
                $carnetExtrajro = "checked";
            }*/
       }
    }else{
        redireccionar2("../");
    }
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Museo Virtual</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        
    </head>