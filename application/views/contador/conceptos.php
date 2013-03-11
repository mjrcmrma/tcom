<script>
    $(function(){
        $("#limpiar").click(function(){
            $(".element-asignado").remove();
        });
        $(".agua").click(function(){
            $(this).remove();
            $("<li/>").addClass("element-asignado").addClass("aguaq").html("Agua").appendTo("#lista-asignados");
        });
        $(".tel").click(function(){
            $(this).remove();
            $("<li/>").addClass("element-asignado").addClass("telq").html("Teléfono").appendTo("#lista-asignados");
        });
        $(".luz").click(function(){
            $(this).remove();
            $("<li/>").addClass("element-asignado").addClass("luzq").html("Luz").appendTo("#lista-asignados");
        });
        $(".int").click(function(){
            $(this).remove();
            $("<li/>").addClass("element-asignado").addClass("intq").html("Internet").appendTo("#lista-asignados");
        });
        var areas = [
                "Manuel Rodríguez Vázquez",
                "Marco Antonio Álvarez Medina",
                "Carlos Alejandro Varela",
                "Fernando Medrano",
                "Gerardo Moreno"
                ];
                $("#buscar_usuario").autocomplete({
                    source: areas
                });
    });
</script>
<style>
    #conceptos{
        background: url('<?php echo base_url();?>/img/btn_active_conceptos.png');
    }
    #input_buscar{
        width: 590px;
        margin-left: 20px;
        margin-top: 20px;
    }
    .element-concept{
        text-align: left;
        width: 238px;
        height: 35px;
        margin-left: -60px;
        border: 1px solid #d2d2d2;
        padding-top: 10px;
        padding-left: 20px;
    }
    .element-asignado{
        text-align: left;
        width: 238px;
        height: 35px;
        margin-left: -60px;
        border: 1px solid #d2d2d2;
        background-color: #efefef;
        padding-top: 10px;
        box-shadow: inset 0px 0px 3px 1px rgba(0,0,0,.5);
        padding-left: 20px;
    }
    #conceptos-container{
        position: relative;
        float: right;
        border: 1px solid #2666A0;
        background-color: #efefef;
        width: 220px;
        height: 300px;
        padding: 20px;
        margin-top: 20px;
        margin-right: 20px;
        font-family: tahoma;
    }
    #usuarios-container{
        position: relative;
        float: left;
        border: 1px solid #2666A0;
        width: 220px;
        height: 300px;
        padding: 20px;
        margin-top: 20px;
        margin-left: 20px; 
    }
    #botonera{
        position: relative;
        float: right;
        right: 20px;
        top: 20px;
        width: 250px;
    }
    .listas{
        list-style: none;
        margin-top: -20px;
    }
    .element-concept:hover{
        cursor: pointer;
        font-weight: bold;
    }
    .element-asignado:hover{
        cursor: pointer;
    }
    .buscador{
        width: 502px;
        height: 37px;
        background: url("http://agenciaunica.com/tcom/img/input_xtra_large.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        padding-right: 55px;
        padding-left: 15px;
        position: relative;
        float: right;
    }
    h2{
        font-family: tahoma;
        font-size: 12px;
        position: relative;
        float: left;
    }
    #flechas{
        position: relative;
        float: right;
        top: 22px;
        margin-right: 13px;
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
    #titulos{
        
    }
    #cargo{
        font-family: tahoma;
        font-size: 12px;
        font-weight: bold;
        position: relative;
        float: left;
        top: 15px;
        left: 120px;
    }
    #concepton{
        font-family: tahoma;
        font-size: 12px;
        font-weight: bold;
        position: relative;
        float: right;
        top: 15px;
        left: 380px;
    }
    #limpiar{
        color: #333333;
        font-family: tahoma;
        font-size: 12px;
        font-weight: bold;
        position: absolute;
        top: 360px;
    }
    #limpiar:hover{
        cursor: pointer;
    }
</style>
<div id="conceptos-content">
    <div id="input_buscar">
        <h2><label for="buscar_usuario">Condómino</label></h2>
        <input class="buscador" type="text" autocomplete="off" name="buscar_area" id="buscar_usuario"/><br />
    </div>
    <div id="titulos">
        <span id="cargo">Cargo</span><span id="concepton">Conceptos</span>
    </div>
    <div id="conceptos-container">
        <ul id="lista-conceptos" class="listas">
            <li class="element-concept agua">Agua</li>
            <li class="element-concept luz">Luz</li>
            <li class="element-concept tel">Teléfono</li>
            <li class="element-concept int">Internet</li>
        </ul>
    </div>
    <div id="flechas">
        <img src="<?php echo base_url();?>/img/flechas.png"/>
    </div>
    <div id="usuarios-container">
        <ul id="lista-asignados" class="listas">
            
        </ul>
        <span id="limpiar">Limpiar</span>
    </div>
    <div id="botonera">
        <button class="button save" id="btn_guardar" type="submit"></button>
        <button class="button cancel" id="btn_cancelar" type="submit"></button>
    </div>
</div