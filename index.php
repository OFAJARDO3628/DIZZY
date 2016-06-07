<?php
require_once '__header.php';
?>

<script type="text/javascript">
    function iniciar() {
        if (document.getElementById("enviar")) {
            document.getElementById("enviar").onclick = function () {
                login();
            };
        }
    }
    function login() {
        var usuario = document.getElementById("usuario").value;
        var password = document.getElementById("password").value;
        if (usuario == "" || password == "") {
            alert("Por favor ingrese todos los campos");
            return false;
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                alert(xhttp.responseText);
                location.reload(true);	
            }
        };
        xhttp.open("POST", "ajax/login_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("usuario=" + usuario + "&password=" + password);
    }

    window.addEventListener("load", iniciar, false);
</script>

<div class="page_content">
    <h2 class="text-center">Index</h2>
    <div style="height:380px">
        <img src="images/index_intro.jpg" class="img-responsive" alt="index">
    </div>
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada velit nisl, 
            id consequat ex pulvinar et. Aenean vitae massa erat. Quisque sodales varius varius. 
            Fusce non ex suscipit, scelerisque libero et, congue felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada velit nisl, 
            id consequat ex pulvinar et. Aenean vitae massa erat. Quisque sodales varius varius. 
            Fusce non ex suscipit, scelerisque libero et, congue felis</p>
    </div>
    <div class="div_bottom">
        <div class="index_col1">
            <h4>Título</h4>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque malesuada velit nisl, id consequat ex pulvinar et. Aenean vitae massa erat. Quisque sodales varius varius. Fusce non ex suscipit, scelerisque libero et, congue felis. Etiam luctus mauris id neque venenatis maximus. Donec nec fermentum felis, in posuere nisi. Lorem ipsum dolor sit amet, consectetur
        </div>
        <div class="index_col1">
            <h4>Título</h4>
            <img src="images/index_art.jpg" class="img-responsive center-block" alt="index1">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        </div>
        <div class="contact_form">
            <?php
            if (!isset($_SESSION["login"])) {
                ?>
                <h3>Login Clientes VIP</h3>
                <br>
                <form>
                    <label>Usuario</label>
                    <input type="text" name="usuario" id="usuario">
                    <label>Contraseña</label>
                    <input type="password" name="password" id="password">
                    <br>
                    <input type="button" name="enviar" id="enviar" value="Enviar">
                </form>
                <br><p style="font-size: 13px">Si aún no es cliente VIP, <a href="registro.php">Regístrese aquí</a></p>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<?php
include '__footer.php';
?>