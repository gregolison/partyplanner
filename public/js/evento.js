$(function() {
    $('#cadastrarEvento').on('click', function(){
        var nome = $('#nome').val();
        
        $.ajax({
            url: "cadastraEvento",
            method: 'get',
            data: {'nome': nome},
            dataType: 'json',
            success:function(data) {
                $('#eventos').prepend(
                    $('<div>', {class: 'content co-2 photo normal-shadow'}).append(
                        $('<div>', {class: 'card'}).append(
                            $('<img>', {class: 'card-img-top', height: '200px', src: "{{URL::asset('/img/background.png')}}"}),
                            $('<div>', {class: 'card-body'}).append(
                                $('<h5>', {class: 'card-title', html: data.nome})
                            ),
                            $('<div>', {class: 'novoEvento'}).append(
                                $('<i>', {class: 'fas fa-bell'})
                            )
                        )
                    )
                );
                $('#cancelarCadastro').click();
            }
        })
    });
    $('#cancelarCadastro').on('click', function(){
        $('#nome').val('');
    });
});