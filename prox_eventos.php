<?php

require_once '__header.php';
?>

<script type="text/javascript">
    function iniciar() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var section = document.getElementById("agenda_mes");
                section.innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "ajax/prox_eventos_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }

    window.addEventListener("load", iniciar, false);
</script>

<div class="page_content">
    <h2 class="text-center">Próximos eventos</h2>

    <?php
    if(!isset($_SESSION["login"])){
        echo "<p>Solo clientes registrados pueden consultar los eventos VIP (<a href='index.php'>Ingrese aquí</a>)</p><br>";
    }
    ?>
    
    <div id="agenda_mes" style="min-height: 400px" class="text-center">

    </div>
</div>

<?php

include '__footer.php';
?>