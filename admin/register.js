$("#register_php").submit(function(event){
    event.preventDefault();
    var parametros = new FormData($("#register_php")[0]);
    $.ajax({
        type:'POST',
        datatype:'json',
        data:parametros,
        url:"register_cli.php",
        contentType:false,
        processData:false,
        beforeSend: function(objeto){
            $('#div_login').html("Enviando datos del login");
        },
        success:function(datos){
            $('#div_login').show();
            var valor = datos.toString();
            var busc = valor.indexOf('Error');
            if(busc != -1){
                $('#div_login').html(datos);
                setTimeout("jQuery('#div_login').hide();",4000); 
            }else{
                $('#div_login').html(datos);
                setTimeout("jQuery('#div_login').hide();",6000); 
                $("#register_php")[0].reset();
            }
        }
    });
})