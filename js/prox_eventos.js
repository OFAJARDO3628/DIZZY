var meses = new Array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

function iniciar() {
    var eventos = crear_eventos();
    mostrar_eventos(eventos);
}

function mostrar_eventos(eventos) {
    var date = new Date();
    var nombre_mes = meses[date.getMonth()];
    var section = document.getElementById("agenda_mes");
    var html = "<h3 class='voffset3'>Agenda para el mes de " + nombre_mes + ":</h3>";
    console.log(eventos);
    if (eventos.length > 0) {
        for (i = 0; i < eventos.length; i++) {
            html += "<article>";
            html += "<h4>" + eventos[i][0] + " de " + nombre_mes + "</h4>";
            html += "<ul>";
            var eventos_mes_descripcion = eventos[i][1];
            j = 0;
            while (j < eventos_mes_descripcion.length) {
                html += "<li>" + eventos_mes_descripcion[j] + "</li>";
                j++;
            }
            html += "</ul>";
            html += "</article>";
        }
    } else {
        html += "<article>";
        html += "<h4>No existen eventos para el mes de " + nombre_mes + "</h4>";
        html += "</article>";
    }
// Ejemplo de DOM	
    section.innerHTML = html;
}

function crear_eventos() {
    var i = 0;
    var d = new Date();
    var mes = d.getMonth();
    var eventos = new Array();
    switch (mes) {
        //Mayo
        case 4:
            eventos[i++] = [8, ["Celebración día de la Madre", "Almuerzo Familiar"]];
            eventos[i++] = [14, ["Aniversario", "Cumpleaños", "Almuerzo Familiar", "Cena Familiar"]];
            eventos[i++] = [15, ["Almuerzo de Trabajo", "Cena de Aniversario"]];
            eventos[i++] = [22, ["Cumpleaños"]];
            break;
            //Junio
        case 5:
            eventos[i++] = [5, ["Almuerzo Familiar", "Almuerzo de Trabajo", "Cumpleaños"]];
            eventos[i++] = [12, ["Cumpleaños", "Aniversario"]];
            eventos[i++] = [19, ["Celebración día del padre"]];
            break;
    }

    return eventos;
}

// Este es el ejemplo de gestión de eventos
window.addEventListener("load", iniciar, false);
