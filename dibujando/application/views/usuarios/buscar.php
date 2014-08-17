<script type="text/javascript" src="/assets/js/jquery-2.1.0.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#usuario").keyup(function() {
            var parametros = {
                "usuario"   :   $("#usuario").val()
            }
            
            //$("#resultado").html($("#usuario").val());
            
            $.ajax({
                data:   parametros,
                url:    '/usuarios/busqueda/',
                type:   'post',
                beforeSend: function() {
                    
                },
                success:    function(respuesta) {
                    $("#resultado").html(respuesta);
                }
            });
        });
        
        
        $.ajax({
            data:   parametros,
            url:    'controladores/articuloControlador.php',
            type:   'post',
            beforeSend: function() {
                $("#resultadoCodigo").html("<img src=\"imagenes/ajax-loader-chico.gif\" />");
                $("#resultadoOrden").html("<img src=\"imagenes/ajax-loader-chico.gif\" />");
            },
            success: function(respuesta) {
                $("#resultado").html(respuesta);
            }
        });
    });
</script>
<a href="/usuarios/buscar/">Buscar usuarios</a> | <a href="/fotos/buscar/">Buscar fotos</a> | <a href="/fotos/aprobar/">Aprobar</a> | <a href="/usuarios/logout/">Logout</a>
<br>
<label>Usuario: </label><input type="text" id="usuario" autofocus>
<div id="resultado"></div>