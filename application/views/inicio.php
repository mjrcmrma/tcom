<!DOCTYPE html>


<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>LOGIN</title>
        <script src="http://code.jquery.com/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
<script>

    $(function () {
        $("#login").submit(function () {
            
            $.post('http://agenciaunica.com/tcom/server.php/usuarios/idusuarionombreusuario?X-API-KEY=android', $("#login").serialize(), function(response) {
                alert(response[0].idUsuario);
                // Do something with the request
            }, 'json');
            return false;
        });
    });




</script>
    </head>
    <body>
    <div class="content-secondary">
    <form id="login" method="post">
        <ul data-role="listview" data-inset="false" data-theme="c" data-dividertheme="f">
        <li data-role="list-divider">Autentificación</li>
        <li><label>Correo </label>
        <input type="text" id="correo" name="correo" placeholder="Correo"/></li>
        
        <li><label for="contrasenia">Contraseña </label>
        <input type="password" id="contrasenia" name="contrasenia" placeholder="Contraseña"/></li>
        
       <li><input type="submit" value="Entrar" /></li>

            </ul>
    </form>

</div>
        <div id="mostrar">
            <span> Cambiara </span>
        </div>
</body>
</html>