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
            eventos[i++] = [5, ["Evento 1", "Evento 2", "Evento 3", "Evento 4"]];
            eventos[i++] = [13, ["Evento 5", "Evento 6", "Evento 7", "Evento 8"]];
            eventos[i++] = [16, ["Evento 9", "Evento 10"]];
            eventos[i++] = [25, ["Evento 11"]];
            break;
            //Junio
        case 5:
            eventos[i++] = [6, ["Evento 1", "Evento 2", "Evento 3"]];
            eventos[i++] = [20, ["Evento 4", "Evento 5"]];
            eventos[i++] = [28, ["Evento 6", "Evento 7"]];
            break;
    }

    return eventos;
}

// Este es el ejemplo de gestión de eventos
window.addEventListener("load", iniciar, false);