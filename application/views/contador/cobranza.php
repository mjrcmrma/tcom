<script>
    $(function(){
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
            $("#pagadas").click(function(){
               $("#dinamico").html("Cuentas Pagadas >> "); 
            });
            $("#pendientes").click(function(){
               $("#dinamico").html("Cuentas Pendientes >> "); 
            });
    });
</script>
<style>
    #cobranza{
        background: url('<?php echo base_url();?>/img/btn_active_cobranza.png');
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
        margin-left: 25px;
        color: #333333;
        font-size: 12px;
    }
</style>
<div id="cobranza-content">
    <h2><span id="dinamico"></span><label for="buscar_personal">Listado de personal asignado al área</label></h2>
    <input class="buscador" type="text" autocomplete="off" name="buscar_personal" id="buscar_personal"/><br />
    <div class="opciones">
        <span><strong><a href="#">Agregar</a></strong></span>&nbsp;&nbsp;&nbsp;<span><a href="#">Eliminar</a></span>
    </div>
</div