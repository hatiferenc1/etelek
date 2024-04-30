<?php
    session_start();
    date_default_timezone_set("Europe/Budapest");

    include("adbkapcsolat.php");

    if(isset($_GET['p'])) $p = $_GET['p']; 
    else $p = "";

?>



<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Étlap</title>
</head>
<body>

    <div class="topnav">
        <a class="active" href="./?p=etlap">Étlap</a>
        <a href="./?p=adminfelulet">Adminfelület</a>
    </div>

    <?php
    if($p=="etlap"          )   include("etlap.php")                                            ; else
    if($p=="adminfelulet"   )   include("adminpanel.php")                                       ; else
    
    include("etlap.php");
    ?>

    <iframe name='kisablak' xstyle="display:none;" x_width=640 y_height=480 z_frameborder=0></iframe>
</body>
</html>