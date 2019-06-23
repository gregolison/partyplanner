$(function() {
    $('#cadastrarEvento').on('click', function(){
        var nome = $('#nome').val();
        
        $.ajax({
            url: "cadastraEvento",
            method: 'post',
            data: {'nome': nome},
            dataType: 'json',
            success:function(data) {
                console.log(data);
            }
        })
    });
});