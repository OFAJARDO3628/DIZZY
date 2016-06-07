<?php

require_once '__header.php';
?>

<script type="text/javascript">
    function iniciar() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                var section = document.getElementById("menu_lista");
                section.innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "ajax/menu_dia_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send();
    }

    window.addEventListener("load", iniciar, false);
</script>
<div class="page_content">
    <h2 class="text-center">Menú del día</h2>

    <div class="menu_imgs">
        <div>
            <img src="images/menu_1.jpg" alt="menu1">        
        </div>
        <div>
            <img src="images/menu_2.jpg" alt="menu2">
        </div>
    </div>

    <div class="text-center voffset3" id="menu_lista">

    </div>
</div>
<?php

include '__footer.php';
?>