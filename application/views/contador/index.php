<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css" />
<script>
        $(function() {
            function Cambiar(){
                $(".emergente").removeClass('visible');
                $(".emergente").hide("blind");
                $("#empleados").attr("style","background: url('<?php echo base_url();?>img/btn_empleados.png');"); 
            }
            function CambiarCobra(){
                $(".cobra").removeClass('visible');
                $(".cobra").hide("blind");
                $("#cobranza").attr("style","background: url('<?php echo base_url();?>img/btn_asignacion.png');"); 
            }
                $("#empleados").click(function(){
                    CambiarCobra();
                    $("#ajax-loader").clone().appendTo("#main-content").show();
                    
                    $("#main-content").load("<?php echo site_url(array("empleados"));?>");
                    $('.emergente').toggle("blind");
                    if ($(".emergente").hasClass("visible")) {
                        $(".emergente").removeClass('visible');
                        $("#empleados").attr("style","background: url('<?php echo base_url();?>img/btn_empleados.png');");    
                      } else { 
                        $(".emergente").addClass('visible');
                        $("#empleados").attr("style","background: url('<?php echo base_url();?>img/btn_active_empleado.png');");
                      }
                });
                
                
            $("#proveedores").click(function(){
            $("#ajax-loader").clone().appendTo("#main-content").show();
               $("#main-content").load("<?php echo base_url();?>/index.php/vistas/empresas_lista_view");
            });
                
                $("#reportes").click(function(){
                    Cambiar();
                    CambiarCobra();
                    $("#ajax-loader").clone().appendTo("#main-content").show();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/reportes_view");
                });
                $("#cobranza").click(function(){
                    Cambiar(); 
                    $("#ajax-loader").clone().appendTo("#main-content").show();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/cobranza_view");
                    $('.cobra').toggle("blind");
                    if ($(".cobra").hasClass("visible")) {
                        $(".cobra").removeClass('visible');
                        $("#cobranza").attr("style","background: url('<?php echo base_url();?>img/btn_asignacion.png');");    
                      } else { 
                        $(".cobra").addClass('visible');
                        $("#cobranza").attr("style","background: url('<?php echo base_url();?>img/btn_active_cobranza.png');");
                      }
                });
                $("#ocompra").click(function(){
                    Cambiar();
                    CambiarCobra();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/ocompra_view");
                });
                $("#camaras").click(function(){
                    Cambiar();
                    CambiarCobra();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/camaras_view");
                });
                $("#conceptos").click(function(){
                    Cambiar(); 
                    CambiarCobra();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/conceptos_view");
                });
                $("#condominos").click(function(){
                    Cambiar(); 
                    CambiarCobra();
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/mapa_view");
                });
        });
</script>
<style>
    body{
        font-family: tahoma;
        font-size: 12px;
    }
    .visible{
        display: block;
    }
    header{
        background-image: url("<?php echo base_url();?>/img/bannerAdmon.png");
    }
    footer{
        background-color: #2899cb; 
        font-size: 11px;
    }
    #main-content{
        border: 1px solid #2666A0;
        float: right;
        height: auto;
        padding-bottom: 90px;
        position: relative;
        top: 22px;
        width: 629px;
        height: 100%;
    }
    #cobranza{
        background: url('<?php echo base_url();?>/img/btn_asignacion.png');
    }
    #cobranza:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_cobranza.png');
    }
    #reportes{
        background: url('<?php echo base_url();?>/img/btn_reportes.png');
    }
    #reportes:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_reportes.png');
    }
    #empleados{
        background: url('<?php echo base_url();?>/img/btn_empleados.png');
    }
    #empleados:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_empleado.png');
    }
    #conceptos{
        background: url('<?php echo base_url();?>/img/btn_conceptos.png');
    }
    #conceptos:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_conceptos.png');
    }
    #ocompra{
        background: url('<?php echo base_url();?>/img/btn_ocompra.png');
    }
    #ocompra:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_ocompra.png');
    }
    #camaras{
        background: url('<?php echo base_url();?>/img/btn_camaras.png');
    }
    #camaras:hover{
        cursor: pointer;
        background: url('<?php echo base_url();?>/img/btn_active_camaras.png');
    }
    #salir{
        background: url('<?php echo base_url();?>/img/btn_salir.png');
    }
    #salir:hover{
        background: url('<?php echo base_url();?>/img/salir_hover.png');
    }
    .emergente{
        width: 312px;
        display: none;
        margin-top: -3.6px;
    }
    .emergente ul{
        background-color: #FFFFFF;
        border: 1px solid #2767a0;
        width: 311px;
        margin-bottom: -10px;
    }
    .emergente ul li{
        height: 36px;
        margin-top: 12px;
    }
    .emergente ul li:hover{
        cursor: pointer;
    }
    .cobra{
        width: 312px;
        display: none;
        margin-top: -3.6px;
    }
    .cobra ul{
        background-color: #FFFFFF;
        border: 1px solid #2767a0;
        width: 311px;
        margin-bottom: -10px;
    }
    .cobra ul li{
        height: 36px;
        margin-top: 12px;
    }
    .cobra ul li:hover{
        cursor: pointer;
    }
    #eventuales{
        background: url('<?php echo base_url();?>/img/eventuales.png') no-repeat;
    }
    #eventuales:hover{
        background: url('<?php echo base_url();?>/img/eventuales_hover.png') no-repeat;
    }
    #ambulantes{
        background: url('<?php echo base_url();?>/img/ambulantes.png') no-repeat;
    }
    #ambulantes:hover{
        background: url('<?php echo base_url();?>/img/ambulantes_hover.png') no-repeat;
    }
    #proveedores{
        background: url('<?php echo base_url();?>/img/proveedores.png') no-repeat;
    }
    #proveedores:hover{
        background: url('<?php echo base_url();?>/img/proveedores_hover.png') no-repeat;
    }
    #pagadas{
        background: url('<?php echo base_url();?>/img/pagadas.png') no-repeat;
    }
    #pagadas:hover{
        background: url('<?php echo base_url();?>/img/pagadas_hover.png') no-repeat;
    }
    #pendientes{
        background: url('<?php echo base_url();?>/img/pendientes.png') no-repeat;
    }
    #pendientes:hover{
        background: url('<?php echo base_url();?>/img/pendientes_hover.png') no-repeat;
    }
    #base{
        background: url('<?php echo base_url();?>/img/base.png') no-repeat;
    }
    #condominos{
        cursor: pointer;
        background-image: url("<?php echo base_url();?>/img/btn_condomino.png");
        background-repeat:no-repeat; 
    }
    #condominos:hover{
        cursor: pointer;
        background-image: url("<?php echo base_url();?>/img/btn_active_condomino.png");
        background-repeat:no-repeat; 
    }
    #usuario{
        left: 340px;
        position: relative;
        top: 10px;
    }
</style>
<div id="usuario">
    <img src="<?php echo base_url();?>/img/welcome.png"/>&nbsp;&nbsp;<strong><?php echo var_dump($u);?></strong>
</div>
<nav>
    <ul>
        <li id="cobranza"></li>
        <div class="cobra">
           <ul>
               <li id="pendientes"></li>
               <li id="pagadas"></li>
           </ul>
       </div>
        <li id="reportes"></li>
        <li id="empleados"></li>
        <div class="emergente">
           <ul>
               <li id="eventuales"></li>
               <li id="ambulantes"></li>
               <li id="proveedores"></li>
               <li id="base"></li>
           </ul>
       </div>
        <li id="condominos"></li>
        <li id="conceptos"></li>
        <li id="ocompra"></li>
        <li id="camaras"></li>
        <a href="<?php echo base_url();?>index.php/usuarios/logout"><li id="salir"></li></a>
    </ul>
</nav>
<section id="main-content">

</section>