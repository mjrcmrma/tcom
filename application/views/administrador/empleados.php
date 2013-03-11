 <script>
        $(function() {
            var areas = [
                "Administración",
                "Promoción y ventas",
                "Seguridad",
                "Jardinería",
                "Gerencia"
                ];
                $("#buscar_area").autocomplete({
                    source: areas
                });
            var personal = [
                "Gerardo Moreno Hernández",
                "Marco Antonio Álvarez Medina",
                "María Teresa Valtierra Estrada",
                "Fermín Espinoza de la Torre",
                "Angélica del Río Robledo"
                ];
                $("#buscar_personal").autocomplete({
                    source: personal
                });
            $("#fecha_ingreso").datepicker();
            $("#contenido_perfil").hide();
            $("#imagen_editar").click(function(){
               $("#contenido_perfil").show("blind"); 
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
        top: -50px;
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
        background: url("http://agenciaunica.com/tcom//img/input_short.png") repeat scroll 0 0 transparent;
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
        top: 335px;
    }
    #contenido_perfil{
        margin-top: 80px;
    }
    #botonera{
        position: relative;
        right: 430px;
        top: 340px;
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
        top: 5px;
    }
</style>
<div id="empleados-content">
    <h2><label for="buscar_area">Seleccionar área de personal</label></h2>
    <input class="buscador" type="text" autocomplete="off" name="buscar_area" id="buscar_area"/><br />
    <div class="opciones">
        <span><strong><a href="#">Agregar</a></strong></span>&nbsp;&nbsp;&nbsp;<span><a href="#">Eliminar</a></span>
    </div>
    <h2><label for="buscar_personal">Listado de personal asignado al área</label></h2>
    <input class="buscador" type="text" autocomplete="off" name="buscar_personal" id="buscar_personal"/><br />
    <div class="opciones">
        <span><strong><a href="#">Agregar</a></strong></span>&nbsp;&nbsp;&nbsp;<span><a href="#">Eliminar</a></span>
    </div>
    <div id="imagen_editar">
        <img src="<?php echo base_url();?>/img/editar_perfil.png" />
    </div>
    <div id="contenido_perfil">
        <h2>Perfil de empleado</h2>
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