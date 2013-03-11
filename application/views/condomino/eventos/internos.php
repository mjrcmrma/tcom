<script>
$(function() {
    $( "#prueba" ).dialog({
      height:500,
      width:800,
      modal: true,
      autoOpen: false,
      show: {
        effect: "blind",
        duration: 1000
      },
      hide: {
        effect: "explode",
        duration: 1000
      }
    });
 
    $( "#calendario" ).click(function() {
      $( "#prueba" ).dialog( "open" );
    });
  });
</script>
    <style>
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
        #calendario{
            background-image: url("<?php echo base_url();?>/img/calendarioEventos.png");
            background-repeat: no-repeat;
            width:594px;
            height:369px;
            margin-top: 81px;
            margin-left: 19px;
            cursor:pointer;
        }
        

    .wrapperSecond{
        height: 800px;
    }
    #eventos{
        background-image: url("<?php echo base_url();?>/img/btn_active_eventos.png");
        cursor:pointer;
    }
    #encabezado{
        background-image: url("<?php echo base_url();?>/img/logEventos.png");
        width: 593px;
        height: 166px;
        margin-left: 19px;
        margin-top: 18px;
        background-repeat:no-repeat;
    }
    #activo{
        background:#6C9D3A;
        border: 1px solid black;
        width: 83px;
        height: 44px;
        
        
        margin-left:422px;
    }
    #titulo{
            font-family: Tahoma;
            font-size: 30px;
            font-weight:bold;
            color:#3E7B14;
            padding-left: 20px;
        }
        #internos{
        cursor: pointer;
        background-image: url("<?php echo base_url();?>/img/btn_eventos_internos_active.png");
        background-repeat:no-repeat;  
    }
     
    </style>
            
    <p id="titulo">Eventos Internos</p>
    <div id="calendario">
    
    </div>
    <div id="prueba" title="EVENTO INTERNO">
        <img src="<?php echo base_url();?>/img/eventoInterno1.png">
    </div>
            
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>
            <span>&nbsp;&nbsp;&nbsp;</span>