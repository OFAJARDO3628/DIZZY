<?php

require_once '__header.php';
?>

<script type="text/javascript">
    
    function iniciar() {
    var menu_sect1 = document.getElementById("sect1");
    var menu_sect2 = document.getElementById("sect2");
    var section1 = document.getElementById("section1");
    var section2 = document.getElementById("section2");
    menu_sect1.onclick = function () {
        section1.style.display = "block";
        section2.style.display = "none";
        get_carta(1, document.getElementById("section1"));
    };
    menu_sect2.onclick = function () {
        section2.style.display = "block";
        section1.style.display = "none";
        get_carta(2, document.getElementById("section2"));
    };
}

    function get_carta(tipo_carta, section) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (xhttp.readyState == 4 && xhttp.status == 200) {
                section.innerHTML = xhttp.responseText;
            }
        };
        xhttp.open("POST", "ajax/carta_bar_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("tipo_carta="+tipo_carta);
    }

    window.addEventListener("load", iniciar, false);
</script>

<div class="page_content">
    <h2 class="text-center">Carta del bar</h2>


    <div id="carta_bar" style="min-height: 400px">
        <ul class="pestanas_section">
            <li id="sect1">Helados, malteadas y bebidas</li>
            <li id="sect2">Bocaditos y picadas</li>
        </ul>
        <section id="section1">        

        </section>
        <section id="section2">   

        </section>
    </div>
</div>
<?php

include '__footer.php';
?>