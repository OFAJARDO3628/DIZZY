function iniciar() {
    var menu_sect1 = document.getElementById("sect1");
    var menu_sect2 = document.getElementById("sect2");
    var section1 = document.getElementById("section1");
    var section2 = document.getElementById("section2");
    menu_sect1.onclick = function () {
        section1.style.display = "block";
        section2.style.display = "none";
    };
    menu_sect2.onclick = function () {
        section2.style.display = "block";
        section1.style.display = "none";
    };
    var carta1 = crear_carta1();
    var carta2 = crear_carta2();
    mostrar_carta(document.getElementById("section1"), "Helados, malteadas y bebidas", carta1, true);
    mostrar_carta(document.getElementById("section2"), "Bocaditos y picadas", carta2, true);
}

function mostrar_carta(section, titulo, carta, mostrar_precio) {
    var html = "<h2>"+titulo+"</h2>";
    for (i = 0; i < carta.length; i++) {
        j = 0;
        html += '<article class="text-center">';
        html += '<h2>' + carta[i][j++] + '</h2>';
        html += '<div class="info_content voffset4">';
        html += '<img src="' + carta[i][j++] + '" alt="img' + i + '">';
        html += '<div class="info_desc"><p>' + carta[i][j++] + '</p></div>';
        html += '</div>';
        if (mostrar_precio == true) {
            html += '<span class="precio_bar">$' + carta[i][j++] + '</span>';
        }
        html += '</article>';
    }
    section.innerHTML = html;
}

//"Helados, malteadas y bebidas"
function crear_carta1() {
    var i = 0;
    var carta = new Array();
    carta[i++] = ["Peach Cream", "http://lorempixel.com/300/150/food/", "descripcion 1", "7.000"];
    carta[i++] = ["Volcano", "http://lorempixel.com/300/150/food/", "descripcion 2", "8.000"];
    carta[i++] = ["Malteadas", "http://lorempixel.com/300/150/food/", "descripcion 3", "6.500"];
    carta[i++] = ["Malteada de Milo", "http://lorempixel.com/300/150/food/", "descripcion 4", "7.800"];
    return carta;
}

//"Bocaditos y picadas"
function crear_carta2() {
    var i = 0;
    var carta = new Array();
    carta[i++] = ["Nachos", "http://lorempixel.com/300/150/food/", "descripcion 1", "8.000"];
    carta[i++] = ["Papa Criolla", "http://lorempixel.com/300/150/food/", "descripcion 2", "4.800"];
    carta[i++] = ["Picada Dizzy 2 Personas", "http://lorempixel.com/300/150/food/", "descripcion 3", "27.000"];
    carta[i++] = ["Picada Dizzy 4 Personas", "http://lorempixel.com/300/150/food/", "descripcion 4", "50.000"];
    return carta;
}

window.addEventListener("load", iniciar, false);