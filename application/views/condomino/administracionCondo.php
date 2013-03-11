<style type="text/css">
      @import "<?php echo base_url();?>/media/css/demo_page.css";
      @import "<?php echo base_url();?>/media/css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="<?php echo base_url();?>/media/js/jquery.js"></script>
<script class="jsbin" src="http://datatables.net/download/build/jquery.dataTables.nightly.js"></script>
<script>
    $(function(){
        $("#tabla-moviles").dataTable();
        $("#form-moviles").submit(function(){
                        $.ajax({
                           url: '<?php echo base_url(); ?>index.php/unidadesMoviles/nuevaUM',
                           type: "post",
                           data: $("#form-moviles").serialize(),
                           beforeSend: function() {
                               
                           },
                           success: function(result) {
                               window.location.reload();
                           }
                       });
                    return false;
               });
    });
</script>
<style>
.input{
        -moz-box-shadow:inset 0 0 17px #c8c8c8;
        box-shadow:inset 0 0 17px #c8c8c8;
        border: 1px solid #999999;
        outline: 0 none;
        padding-left: 15px;
    }
        .contenido{
        width: 412px;
        height: 37px;
        margin-left: 23px;
        
    }
    .corto{
        width: 130px;
        height: 36px;
    }
    #content-invitados{
        margin-top: 20px;
    }
    #listas{
        position:relative;
        float: left;
    }
    #vehiculos{
        position: relative;
        float: right;
        right: 20px;
    }
    .boton{
        width: 113px;
        height: 53px;
        position: relative;
        float: left;
        margin-left: 10px;
        margin-top: 5px;
        cursor: pointer;
        display: block;
        border: 0 none;
        cursor: pointer;
        outline: none;
   }
        #crear{
            background-image: url("<?php echo base_url();?>/img/btn_crear.png");   
        }
        
        #consultar{
            background-image: url("<?php echo base_url();?>/img/btn_consultar.png");
        }
        #guardar{
            margin-top: 50px;
            background-image: url("<?php echo base_url();?>/img/btn_guardar.png");
        }
        #cancelar{
            margin-top: 30px;
            background-image: url("<?php echo base_url();?>/img/btn_cancelar.png");
        }
        #administracion{
        background-image: url("<?php echo base_url();?>/img/btn_active_administracionC.png");
        cursor:pointer;
        }
        #eventos{
        background-image: url("<?php echo base_url();?>/img/btn_eventos.png");
        cursor:pointer;
    }
    #botonera{
        position: relative;
        right: 430px;
    }
</style>
<form id="form-moviles">
<div id="content-invitados">
    <table id="tabla-moviles">
        <thead>
          <tr>
            <th>Descripción</th>
            <th>Placas</th>
          </tr>
        </thead>
        <tbody>
            <tr>
                <td>AAAAAAAA</td>
                <td>121332543</td>
            </tr>
        </tbody>
    </table>
        <div id="listas">
            <label><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Descripción de la unidad móvil</b></label>
            <br>
            <input type="text" class="contenido input" name="descripcionMovil" id="descripcionMovil">
            <br>
        </div>
        <div id="vehiculos">
            <label><b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Placas</b></label>
            <br>
            <input type="text" class="contenido corto input" name="placas" id="placas"><br>
        </div>
</div>
<div id="botonera">
    <input type="submit" id="guardar" class="boton" value="" />
</div>
</form>
