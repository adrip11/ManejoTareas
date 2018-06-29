$(function() {
    $('.editar').click(function(e) {
        let id = $(this).attr('data-crear');
        let url = `/tareas`;
        $.get(url, function(result) {

            $('#role-form1').attr('action', '/tareas/' + result.tarea.id);
            $('#input').attr('value', "POST");

            $('#Descripcion').val(result.tarea.Descripcion);

        }).fail(function() {
            alert('algo salio mal');
        });
        $('#Editar').modal();
    });
});