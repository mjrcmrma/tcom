<style>
    #reportes{
        background: url('<?php echo base_url();?>/img/btn_active_reportes.png');
    }
    #input_buscar{
        position: relative;
        float: left;
    }
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
        color: #333333;
        font-size: 12px;
        position: relative;
        float: right;
        margin: 25px;
    }
</style>
<script>
    $(function(){ 
        var areas = [
            "Reporte de Accesos",
            "Balance General",
            "Reporte de Egresos",
            "Reporte de Ingresos",
        ];
        $("#buscar_area").autocomplete({
            source: areas
        });
        $("#genera_reporte").click(function(){
            $("#dialog-reporte").dialog("open"); 
        });
        $("#dialog-reporte").dialog({
            autoOpen: false,
            modal: true,
            width:600,
            height: 442
        });      
    });
</script>
<div id="reportes-content">
    <div id="input_buscar">
        <h2><label for="buscar_area">Seleccionar tipo de reporte</label></h2>
        <input class="buscador" type="text" autocomplete="off" name="buscar_area" id="buscar_area"/><br />
    </div>
    <div id ="genera_reporte" class="opciones">
        <span><strong>Generar reporte</strong></span>
    </div>
    <div id="dialog-reporte" title="Reporte">
        <strong>Reportes</strong>
        <hr>
        <span>No hay reporte disponible</span>
    </div>
</div>