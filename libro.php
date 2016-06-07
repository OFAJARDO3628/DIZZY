<?php

require_once '__header.php';
?>

<script type="text/javascript">
    function iniciar() {
        getRegistros();
        document.getElementById("enviar").onclick = function () {
            enviarRegistro();
        };
    }


    function getRegistros() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                document.getElementById("libro").innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "ajax/libro_visitas_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("registro=0");
    }

    function enviarRegistro() {
        var nombres = document.getElementById("nombres").value;
        var correo = document.getElementById("correo").value;
        var opinion = document.getElementById("opinion").value;
        if (nombres == "" || correo == "" || opinion == "") {
            alert("Por favor ingrese todos los campos");
            return false;
        }
        if (!validaEmail(correo)) {
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
        xhttp.open("POST", "ajax/libro_visitas_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("registro=1&nombres=" + nombres + "&correo=" + correo + "&opinion=" + opinion);
    }
    function validaEmail(email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }
    window.addEventListener("load", iniciar, false);
</script>

<div class="page_content">
    <h2 class="text-center">Libro de visitas</h2>

    <br>
    <p>Por favor diligencie el siguiente formulario:</p>
    <form id="form_registro">
        <label>Nombres</label>
        <input type="text" name="nombres" id="nombres">
        <label>Correo</label>
        <input type="email" name="correo" id="correo">
        <label>Opinión</label>
        <textarea name="opinion" id="opinion" cols="30" rows="5"></textarea>
        <br><br>
        <input type="button" name="enviar" id="enviar" value="Enviar">
    </form>

    <div id="libro" class="voffset4">

    </div>
</div>
<?php

include '__footer.php';
?>