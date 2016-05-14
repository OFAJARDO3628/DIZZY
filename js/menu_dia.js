function iniciar() {
    var tipo_menu = 0;
    var titulos = new Array();
    var menu = new Array();
    var date = new Date();
    var hora = date.getHours();
    if (date.getDay() == 0) {
        tipo_menu = 4;
    } else if (1 <= hora && hora < 7) {
        tipo_menu = 0;
    } else if (7 <= hora && hora < 11) {
        tipo_menu = 1;
    } else if (11 <= hora && hora < 15) {
        tipo_menu = 2;
    } else if (15 <= hora || hora <= 1) {
        tipo_menu = 3;
    }

var t = 0;
    switch (tipo_menu) {        
        case 0:
            alert("En este momento nuestro establecimiento se encuentra cerrado. Lo esperamos a partir de las 7am");
            break;
        case 1:
            titulos[0] = ["Desayuno", "Bebida", "Acompañamientos", "Jugos"];
            menu[t++] = ["Café", "Chocolate"];
            menu[t++] = ["Pan", "Arepa"];
            menu[t++] = ["Naranja", "Mandarina"];
            mostrar_menu(titulos, menu);
            break;
        case 2:
            titulos[0] = ["Almuerzo", "Sopa", "Entrada", "Proteína", "Guarnición", "Acompañamientos"];
            menu[t++] = ["Sopa del día"];
            menu[t++] = ["Fruta"];
            menu[t++] = ["Carne de res"];
            menu[t++] = ["Lentejas", "Fríjoles"];
            menu[t++] = ["Ensalada de repollo y zanahoria"];
            mostrar_menu(titulos, menu);
            break;
        case 3:
            alert("En estos momentos lo redirigiremos a la carta del bar.\nGracias");
            location.href = "carta_bar.html";
            break;
        case 4:
            alert("Lo esperamos mañana lunes a partir de las 7am");
            break;

    }
}

function mostrar_menu(titulos, menu) {
    var section1 = document.getElementById("menu_lista");
    var html = "<h2>" + titulos[0][0] + "</h2><br><br>";
    for (i = 0; i < menu.length; i++) {
        html += "<h2>" + titulos[0][i + 1] + "</h2>";
		j=0;
		while(j<menu[i].length){
            html += "<p>" + menu[i][j] + "</p>";
			j++;
        }
        html += "<br>";
    }
    section1.innerHTML = html;
}
window.addEventListener("load", iniciar, false);