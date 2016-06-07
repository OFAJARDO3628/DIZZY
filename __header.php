<?php
require_once 'include/functions.php';
require_once './include/bd.php';
iniciarCookie();
session_start();
$hora_ultimo_acceso = getCookieUltimaVisita();
addSession($pdo);
$num_sesiones = getSesiones($pdo);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Dizzy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>

        <div id="contenido"> 
            <div id="container">
                <header class="text-center">
                    <a><img src="images/logo.jpg" class="logo" alt="logo"></a>
                </header>
                <?php
                if (isset($_SESSION["login"])) {
                    ?>
                <p style="float: left;">Bienvenido(a) <b class="font-naranja"><?php echo $_SESSION["nombres"] ?></b></p>
                <p style="float: right;"><a href="close-session.php" class="btn_naranja">Cerrar sesión</a></p>
                    <div class="clear"></div>
                    <?php
                }
                ?>
                <nav id="menu" class="voffset4">
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="menu_dia.php">Menú del día</a></li>
                        <li><a href="prox_eventos.php">Próximos eventos</a></li>
                        <li><a href="carta_bar.php">Carta del bar</a></li>
                        <li><a href="libro.php">Libro de visitas</a></li>
                        <li><a href="mashup.php">Sitios de interés</a></li>
                        <?php
                        if (!isset($_SESSION["login"])) {
                            ?>
                            <li><a href="registro.php">Registro</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </nav>
                    <?php
                    if($hora_ultimo_acceso!=""){
                    echo "<p style='font-size:11px'>Última visita: $hora_ultimo_acceso</p>";
                    }
                    ?>