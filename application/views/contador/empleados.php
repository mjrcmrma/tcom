 <script>
        $(function() {
            
            $("#fecha_ingreso").datepicker();
            $("#eventuales").click(function(){
               $("#dinamico").html("Empleados Eventuales >> "); 
            });
            $("#ambulantes").click(function(){
               $("#dinamico").html("Empleados Ambulantes >> "); 
            });
            $("#base").click(function(){
               $("#dinamico").html("Empleados Base >> "); 
            });
        });
</script>
<style>
/*    .wrapperSecond{
        height: 1200px;
    }*/
    h2{
        font-family: tahoma;
        font-size: 14px;
        margin-left: 24px;
        margin-top: 20px;
        margin-bottom: 20px;
        color: #2899cb;
    }
    .buscador{
        width: 412px;
        height: 37px;
        margin-left: 23px;
        background: url("<?php echo base_url();?>/img/imagen_buscador.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        padding-right: 55px;
        padding-left: 15px;
    }
    .opciones{
        margin-left: 25px;
        color: #333333;
        font-size: 12px;
    }
    #imagen_editar{
        float: right;
        position: relative;
        right: 80px;
    }
    #largo{
        font-weight: bold;
        width: 412px;
        height: 37px;
        margin-left: 23px;
        background: url("<?php echo base_url();?>/img/input_large.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        padding-right: 15px;
        padding-left: 15px;
    }
    .corto{
        background: url("http://agenciaunica.com/tcom/img/input_short.png") repeat scroll 0 0 transparent;
        border: medium none;
        height: 37px;
        margin-left: 23px;
        margin-right: -100px;
        margin-top: 10px;
        outline: 0 none;
        padding-left: 15px;
        padding-right: 15px;
        position: relative;
        right: -92px;
        width: 319px;
    }
    #inputs{
        position: relative;
        float: left;
    }
    #labels{
        float: left;
        font-size: 12px;
        left: 16px;
        position: absolute;
        top: 110px;
    }
    #botonera{
        position: relative;
        float: right;
        right: 300px;
        width: 300px;
        top: 20px;
    }
    .button{
        display: block;
        border: 0 none;
        cursor: pointer;
        outline: none;
        width: 110px;
        height: 44px;
    }
    .save{
        background: url("<?php echo base_url();?>/img/btn_guardar_azul.png");
        position: relative;
        float: left;
    }
    .cancel{
        background: url("<?php echo base_url();?>/img/btn_cancelar.png");
        position: relative;
        top: -4px;
    }
    #empleados{
        background: url('<?php echo base_url();?>/img/btn_active_empleado.png');
    }
</style>
<div id="empleados-content">
    <div id="imagen_editar">
        <img src="<?php echo base_url();?>/img/editar_perfil.png" />
    </div>
    <div id="contenido_perfil">
        <h2><span id="dinamico"></span>Perfil de empleado</h2>
        <div id="inputs">
            <input id="largo" type="text" id="empleado" name="empleado" value="Marco Antonio Álvarez Medina"/><br />
            <input class="corto" type="text" id="area" name="area" /><br />
            <input class="corto" type="text" id="clave_checador" name="clave_checador" /><br />
            <input class="corto" type="text" id="telefono" name="telefono" /><br />
            <input class="corto" type="text" id="direccion" name="direccion" /><br />
            <input class="corto" type="text" id="fecha_ingreso" name="fecha_ingreso" /><br />
            <input class="corto" type="text" id="empleo_prev" name="empleo_prev" /><br />
        </div>
        <div id="labels">
            <label for="area">Área de trabajo</label><br /><br /><br />
            <label for="clave_checador">Clave de checador</label><br /><br /><br />
            <label for="telefono">Teléfono</label><br /><br /><br />
            <label for="direccion">Dirección</label><br /><br /><br />
            <label for="fecha_ingreso">Fecha Ingreso</label><br /><br /><br />
            <label for="empleo_prev">Empleo anterior</label><br /><br /><br />
        </div>
        <div id="botonera">
            <button class="button save" id="btn_guardar" type="submit"></button>
            <button class="button cancel" id="btn_cancelar" type="submit"></button>
        </div>
    </div>
</div>