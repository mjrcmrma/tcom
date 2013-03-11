<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

<script>
       $(function() {
            var espacios = [
                "Sala de juntas",
                "Jardín pricipal",
                "Salón de usos múltiples",
                "Alberca",
                "Terraza"
                ];
                $("#buscar_espacios").autocomplete({
                    source: espacios
                });
        });
</script>

<style>
#reservaciones{
        background-image: url("<?php echo base_url();?>/img/btn_active_reservaciones.png");
        cursor:pointer;
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
    #eventos{
        background-image: url("<?php echo base_url();?>/img/btn_eventos.png");
        cursor:pointer;
    }
     
    </style>
    <br>
            <br>
            <p><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Seleccionar espacio</b></p>
            <br>
            <input class="buscador" type="text" autocomplete="off" name="buscar_espacios" id="buscar_espacios"/>
            <br>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>