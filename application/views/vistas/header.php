<html>
    <head>
        
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>T-COM</title>
        <script src="http://code.jquery.com/jquery-1.9.0.js"></script>
        <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>
        <link href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" type="text/css" rel="Stylesheet" />
<script>
    $(function(){
        $('#detalles_not').hide();
        $('#notificaciones_box').click(function() {
            $('#detalles_not').toggle();
          });
    });
</script>
        <style>
     	
#lista_not{
    padding-left: 0px;
}
                body{
        font-family: tahoma;
        font-size: 12px;
    }
            footer{
                font-family: tahoma;
                font-size: 11.5px;
                padding: 15px 30px 0px 30px;
                color: white;
                height: 50px;
                position: relative;
                width: 960px;
                margin: 0px auto; 
            }
            #derechos{
                
            }
            #empresa{
                position: relative;
                float: right;
            }
            header{
                width: 960px;
                height: 330px;
                margin: 0px auto;
            }
            section {
                overflow: hidden;
                width: 100%;
                position: relative;
            }

            .wrapperSecond{
                margin: 0px auto;
                width: 960px;
                overflow: hidden;
/*                height: 1500px;*/
            }
            #logo{
                margin: 0px auto;
            }
            #leer_info{
                cursor: pointer;
                float: right;
                height: auto;
                position: relative;
                right: 51.5px;
                top: 158.5px;
                width: auto;
                z-index: 1;
            }
            #notificaciones_box{
                cursor: pointer;
                float: right;
                height: 18px;
                position: relative;
                right: 51.5px;
                top: 158.5px;
                width: 10px;
                z-index: 1;
                background-color: white;
                border-radius: 8px;
                padding-right: 3px;
                padding-left: 5px;
            }
            #detalles_not{
                width: 285px;
                height: auto;
                box-shadow: 1px 1px 10px 1px;
                background-color: whitesmoke;
                border-radius: 8px;
                padding-bottom: 20px;
                padding-top: 20px;
                padding-left: 20px;
                position: relative;
                float: right;
                top: 180px;
                right: -35px;
            }
            #lista_not{
                list-style: none;
            }
            .lista_not_element{
                margin-bottom: 10px;
            }
            
            #ajax-loader {
                text-align: center;
                width: 100%;
                background: black;
                opacity: 0.6;
                filter:alpha(opacity=60);
                padding: 20px;
                display: none;
                position: absolute;
                height: 100%;
                min-height: 400px;
                top: 0px;
                padding-top: 100px;
            }
            
            #ajax-loader span {
                color: white;
                font-size: 22px;
                padding: 10px;
            }
            #ajax-loader img {
                width: 350px;
            }
        </style>
    </head>
    <body>
        <header>
            <div id="leer_info">
                <img src="<?php echo base_url();?>/img/index_info.png"/>
            </div>
            <div id="notificaciones_box">
                <span>1</span>
            </div>
            <div id="detalles_not">
                <ul id="lista_not">
                    <li class="lista_not_element">1. Usted tiene una notificación de Doña toña</li>
                    <li class="lista_not_element">2. Mañana se regalarán Paletas en casa de Juanita</li>
                </ul>
            </div>
        </header>
        <section>
            <div class="wrapperSecond">