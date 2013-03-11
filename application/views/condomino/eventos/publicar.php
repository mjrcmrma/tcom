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
                var eventos = [
                "Internos",
                "Externos",
                "Asambleas",
                "Días Festivos"
                ];
                $("#buscar_eventos").autocomplete({
                    source: eventos
                });
        });
</script>
    <style>

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
        #publicar{
        cursor: pointer;
        background-image: url("<?php echo base_url();?>/img/btn_eventos_publicar_active.png");
        background-repeat:no-repeat; 
    }
      #titulo{
            font-family: Tahoma;
            font-size: 30px;
            font-weight:bold;
            color:#3E7B14;
            padding-left: 20px;
        }
        .contenido{
        width: 412px;
        height: 37px;
        margin-left: 23px;
        background: url("<?php echo base_url();?>/img/input_large.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        
        padding-left: 15px;
    }
    #vehiculos{
        position: absolute;
        left: 460px;
    }
        .contenidoCorto{
        width: 152px;
        height: 36px;
        
        background: url("<?php echo base_url();?>/img/input_shorty.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        
        padding-left: 15px;
    }
    #listas{
        position:relative;
        float: left;
    }
    .vacioC{
        width: 152px;
        height: 36px;
        margin-left: 0px;
        
        outline: 0 none;
        border: 1px solid #D2D2D2;
       
        padding-right: 15px;
        padding-left: 15px;
    }
    .vacio{
        width: 412px;
        height: 37px;
        margin-left: 23px;
        
        outline: 0 none;
        border: 1px solid #D2D2D2;
        
        padding-left: 15px;
    }
    .boton{
            background-repeat:no-repeat;
            width: 138px;
            height: 53px;
            position: relative;
            float: left;
            margin-left: 10px;
            margin-top: 5px;
            cursor: pointer;
        }
        #crear{
            background-image: url("<?php echo base_url();?>/img/btn_crear.png");   
        }
        
        #consultar{
            background-image: url("<?php echo base_url();?>/img/btn_consultar.png");
        }
        #guardar{
            margin-top: 30px;
            background-image: url("<?php echo base_url();?>/img/btn_guardar.png");
        }
        #cancelar{
            margin-top: 30px;
            background-image: url("<?php echo base_url();?>/img/btn_cancelar.png");
        }
        #content-invitados{
        margin-top: 20px;
        
        
    }
    #separa{
        margin-top:140px;
    }
    #calendario{
            background-image: url("<?php echo base_url();?>/img/calendarioEventos.png");
            background-repeat: no-repeat;
            width:594px;
            height:369px;
            margin-left: 19px;
        }
        .wrapperSecond{
        height: 1500px;
    }

    </style>
            
    <p id="titulo">Publicar</p>
    <div id="calendario"></div>
     <br>
            <br>
            <p><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Seleccionar tipo evento</b></p>
            <br>
            <input class="buscador" type="text" autocomplete="off" name="buscar_eventos" id="buscar_eventos"/>
            <br>
            <p><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Nombre del evento</b></p>
            <br>
            <input class="contenido" name="primero" value="XV años de Alice">
            <br>
            
            <div id="content-invitados">
                            <div id="listas">
                                <label for="primero"><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Seleccionar espacio</b></label>
                                <br>
                        <input class="buscador" type="text" autocomplete="off" name="buscar_espacios" id="buscar_espacios"/>
                        <br>
            </div>
            <div id="vehiculos">
                    <label for="primeroCorto"><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Inicia</b></label>
                    <br>
                    <input class="contenidoCorto" name="primeroCorto" value="11:00 am"><br>
                    <br>
                    <label for="primeroCorto"><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Termina</b></label>
                    <br>
                    <input class="contenidoCorto" name="primeroCorto" value="02:00 pm"><br>
             </div>
            <br>
           <br>
           
           
           <div id="separa">
           <div id="content-invitados">
                <div id="listas">
                    <label for="primero"><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Lista de invitados</b></label>
                    <br>
                    <input class="contenido" name="primero" value="Luis Alberto Salazar Hernández">
                    <input class="vacio" name="no-invitados">
                    <input class="vacio" name="no-invitados">
                    <input class="vacio" name="no-invitados">
                    <input class="vacio" name="no-invitados">
                    <br><a href="#" style="margin-left: 380px; font-size: 12px;">Agregar</a>
                </div>
                <div id="vehiculos">
                    <label for="primeroCorto"><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Vehículos</b></label>
                    <br>
                    <input class="contenidoCorto" name="primeroCorto" value="AER 5084"><br>
                    <input class="vacioC" name="no-invitados"><br>
                    <input class="vacioC" name="no-invitados"><br>
                    <input class="vacioC" name="no-invitados"><br>
                    <input class="vacioC" name="no-invitados"><br>
                </div>
            </div>
           </div>
           <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p id="guardar" class="boton"></p>
            <p id="cancelar" class="boton"></p>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
