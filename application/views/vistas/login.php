<style>
    body{
        font-family: tahoma;
        font-size: 12px;
    }
    header{
        background-image: url("<?php echo base_url();?>/img/bannerHome.png");
    }
    #login_fondo{
        width: 340px;
        height: 265px;
        background: url("<?php echo base_url();?>img/fondo_login.png") no-repeat;
        color: #ffffff;
        font-weight: bold;
        font-family: tahoma;
        padding-top: 140px;
/*        background: #e5e5e5;  Old browsers 
         IE9 SVG, needs conditional override of 'filter' to 'none' 
        background: -moz-linear-gradient(top, #e5e5e5 0%, #ffffff 100%);  FF3.6+ 
        background: -webkit-linear-gradient(top, #e5e5e5 0%,#ffffff 100%);  Chrome10+,Safari5.1+ 
        background: -o-linear-gradient(top, #e5e5e5 0%,#ffffff 100%);  Opera 11.10+ 
        background: -ms-linear-gradient(top, #e5e5e5 0%,#ffffff 100%);  IE10+ 
        background: linear-gradient(to bottom, #e5e5e5 0%,#ffffff 100%);  W3C 
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#e5e5e5', endColorstr='#ffffff',GradientType=0 );  IE6-8 
        border: 1px solid #ccc;
        -moz-box-shadow: 4px 4px 4px 4px #CCC;
        -webkit-box-shadow: 0px 0px 10px 1px #CCC;
        box-shadow: 0px 0px 10px 1px #CCC;*/
        position: relative;
        margin: 0px auto;
        padding-left: 35px;
        text-shadow: 1px 1px #333333;
    }
    footer{
        background-color: #A4AF37; 
    }
    #btn_login{
        background-image:url("<?php echo base_url();?>/img/btn_entrar.png");
        width: 108px;
        height: 44px;
        border: 0 none;
        cursor: pointer;
        outline: none;
        position: relative;
        top: 40px;
        left: 95px;
    }
    input{
        width: 275px;
        height: 35px;
    }
    #dialog{
        position: relative;
        width: 960px;
    }
    #cerrar_info{
        position: relative;
        left: 920px;
        top: -280px;
    }
</style>
<script>
    $(function(){
       $("#notificaciones_box").hide();
        $("#informacion").hide();
        $("#leer_info").click(function(){
          $("#login_fondo").hide();
          $("#informacion").show('blind');
        });
        $("#cerrar_info").click(function(){
           $("#informacion").hide(); 
           $("#login_fondo").show('blind');
        });
    });
</script>
<div id="login_fondo">
    <form  id="login" action = "<?php echo base_url() ?>index.php/usuarios/login" method = "post">
        <label class="label"for="correo">Correo:</label><br />
        <input type="text" id="correo" name="correo" /><br /><br />
        <label for="contrasenia">Contraseña:</label><br />
        <input type="password" id="contrasena" name="contrasena" />
        <button type="submit" id="btn_login"></button>
    </form>
</div>
<div id="informacion">
    <img id="dialog" src="<?php echo base_url();?>img/info_tcom.png" />
    <img id="cerrar_info" src="<?php echo base_url();?>img/cerrar_info.png" />
</div>