$(obtener_registros());

function obtener_registros(pacientes)
{
    $.ajax({
        url: '../logica/visualizarPacientes.php', //fichero a realizar petición
        type: 'POST', //Procesamiento de datos
        dataType: 'html', //Fichero de resultado
        data: {pacientes: pacientes}, //Datos procesados
    })

    .done(function(resultado){
        $("#div_resultado").html(resultado);
    })
}

$(document).on('keyup', '#busqueda', function()
{
    var valorBusqueda=$(this).val();
    if(valorBusqueda!="")
    {
        obtener_registros(valorBusqueda);
    }
    else
    {
        obtener_registros();
    }
});