<style>
#navegador{
        background-image: url("<?php echo base_url();?>/img/btn_active_nvgdrCondo.png");
        cursor:pointer;
    }
    #eventos{
        background-image: url("<?php echo base_url();?>/img/btn_eventos.png");
        cursor:pointer;
    }
     #titulo{
            font-family: Tahoma;
            font-size: 12px;
            font-weight:bold;
            color:#3E7B14;
            padding-left: 20px;
        }
    </style>
    <div id="titulo">
        <?php
// Establecer la zona horaria predeterminada a usar. Disponible desde PHP 5.1
        setlocale(LC_ALL, "ES_ES");
        date_default_timezone_set('America/Mexico_City');?>
        <p><?php echo date('l jS \of F Y h:i:s A'); ?></p>
        <img src="<?php echo base_url();?>/img/camaras_nav.png">
    </div>