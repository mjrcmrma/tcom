<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<script>
    $(function(){
        $("#destinatario").autocomplete({
          source: "<?php echo base_url();?>index.php/mensaje/get_nombres" // path to the get_birds method
        });
      });
    var id = "<?php echo $this->session->userdata("idUsuario");?>";
    $('#form-mensaje').submit(function(){
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>index.php/mensaje/nuevo",
                dataType: 'json',
                data: $("#form-mensaje").serialize(),
                success: function (result) {
                    alert("Notificacion enviada correctamente");
                    $("#main-content").load("<?php echo base_url();?>index.php/vistas/notificacionesA_view/"+id);
                    this.dialog('close');
                    
                },
                error: function (error){
                    alert("Notificacion no enviada");
                }
                
            });
            return false;
        });
</script>
<div id="nuevo" tittle="Escriba su mensaje">
    <form id="form-mensaje"  >
    <label>To: </label><input type="text" name="idUsuario1" id="destinatario"/><span>  </span><input id="todos" type="checkbox" name="todos"/>
    <br>
    <input type="text"  name="idUsuario2" hidden="true" value="<?php echo $this->session->userdata('idUsuario');?>">
    <label>Contenido: </label><br>
    <textarea id="mensaje" name="mensaje"></textarea>
    <input type="submit" name="enviar" value="Enviar" class="btn_mensaje">
    </form>
</div>
