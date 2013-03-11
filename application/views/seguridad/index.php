<html>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" />
<script>

        $(function () {
            $("#navegador").click(function(){
                $("#main-content").load("<?php echo base_url();?>index.php/vistas/navegadorS_view");
            })
        });
        $(function () {
            $("#notificaciones").click(function(){
                $("#main-content").load("<?php echo base_url();?>index.php/vistas/notificacionesS_view");
            })
        });
</script>

<style>
    body{
        font-family: tahoma;
        font-size: 12px;
    }
    header{
        background-image: url("<?php echo base_url();?>/img/bannerSeguridad.png");
    }
    footer{
        background-color: #656565;
        font-size: 11px;
    }
    
    #menu-left{
        
        padding-top: 50px;
        color: black;
       
       
    }

    #navegador{
        background-image: url("<?php echo base_url();?>/img/btn_nvgdrSeguridad.png");
        cursor:pointer;
    }
    #notificaciones{
        background-image: url("<?php echo base_url();?>/img/btn_notificacionesSeguridad.png");
        cursor:pointer;
    }
    #main-content{
        width: 629px;
        border: 1px solid #656565;
        height: auto;
        position: relative;
        float: right;
        top: 20px;
    }
    .wrapperSecond{
        height: 1000px;
    }
    #salir{
        background: url('<?php echo base_url();?>/img/btn_salirS.png');
    }
#usuario{
        left: 340px;
        position: relative;
        top: 10px;
    }
</style>
<div id="usuario">
    <img src="<?php echo base_url();?>/img/welcome.png"/>&nbsp;&nbsp;<strong><?php echo $u['usuario'];?></strong>
</div>
<nav>
    <ul>
        <li id="navegador"></li>
        <li id="notificaciones"></li>
        
        <a href="<?php echo base_url();?>index.php/usuarios/logout"><li id="salir"></li></a>
    </ul>
    </nav>
    <div id="main-content"></div>
