//GUARDAMOS LA INSCRIPCION
$("#enviar").off("click");
$("#enviar").on("click", function(e) {
    $('enviar').attr("disabled", true);
    var nombre = $("#nombre").val();
    var costo = $("#apellido").val();
    var precio = $("#codigo").val();
    var dui = $("#dui").val();
    var direccion = $("#direccion").val();
    var telefono = $("#telefono").val();
    var email = $("#email").val();

    parametros = {
        'nombre': nombre,
        'apellido': costo,
        'codigo': precio,
        'dui': dui,
        'direccion': direccion,
        'telefono': telefono,
        'email': email
    };
    $.ajax({
        type: "POST",
        url: "recibe_clientes2.php",
        data: parametros,
        beforeSend: function(objeto) {
            $("#Msg").html('Cargando...');
        },
        success: function(datos) {
            $("#Msg").html(datos);
            $('#enviar').attr("disabled", false);
            $('#nombre').val(''),
                $('#apellido').val(''),
                $('#codigo').val('')
            $('#dui').val('')
            $('#direccion').val('')
            $('#telefono').val('')
            $('#email').val('')

        }
    });
    event.preventDefault();
});