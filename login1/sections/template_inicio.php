<?php 
    @session_start();
    include_once 'lib/config.php';
    include_once 'lib/functions.php';
    if(!empty($_SESSION['codUsu'])){
        if($_SESSION['priUsu']==1){
            $url = "admin/";
            redireccionar2($url);        
        }else{
            $url = "empleado/";
            redireccionar2($url);
        }
    }
?>
<!DOCTYPE html>
<!--[if IE 9]>         
<html class="no-js lt-ie10" lang="es"> <![endif]-->
<!--[if gt IE 9]><!--> 
<html class="no-js" lang="es"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['nom_proyecto'];?></title>

        <meta name="description" content="<?php echo $template['descripcion'];?>">
        <meta name="author" content="<?php echo $template['author'];?>">
        <meta name="robots" content="<?php echo $template['robots'];?>">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="assets/template/admin/css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="assets/template/admin/css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="assets/template/admin/css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="assets/template/admin/css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) -->
        <script src="assets/template/admin/js/vendor/modernizr.min.js"></script>
    </head>
    <body>