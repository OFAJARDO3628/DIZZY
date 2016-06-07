<?php

require_once '__header.php';
?>

<script type="text/javascript">
    function iniciar() {
        document.getElementById("enviar").onclick = function () {
            enviarRegistro();
        };
    }
    function enviarRegistro() {
        var usuario = document.getElementById("usuario").value;
        var nombres = document.getElementById("nombres").value;
        var correo = document.getElementById("correo").value;
        var password = document.getElementById("password").value;
        if (usuario == "" || nombres == "" || correo == "" || password == "") {
            alert("Por favor ingrese todos los campos");
            return false;
        }
        if(!validaEmail(correo)){
            alert("Por favor ingrese un correo válido");
            return false;
        }
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                alert(xhttp.responseText);
                location.reload(true);
            }
        };
        xhttp.open("POST", "ajax/registro_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("usuario=" + usuario + "&nombres=" + nombres + "&correo=" + correo + "&password=" + password);
    }

    function validaEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    window.addEventListener("load", iniciar, false);
</script>

<div class="page_content">
    <h2 class="text-center">Registro Clientes VIP</h2>

    <p>Por favor diligencie todos los campos del siguiente formulario:</p>
    <form id="form_registro">
        <label>Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <label>Nombres</label>
        <input type="text" name="nombres" id="nombres">
        <label>Correo</label>
        <input type="email" name="correo" id="correo">
        <label>Contraseña</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="button" name="enviar" id="enviar" value="Enviar">
    </form>
</div>
<?php

include '__footer.php';
?>