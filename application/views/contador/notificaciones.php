<style type="text/css" title="currentStyle">
    @import "<?php echo base_url(); ?>media/css/demo_page.css";
    /*                        @import "<?php echo base_url(); ?>media/css/header.css";*/
    @import "<?php echo base_url(); ?>media/css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    var url_borrar = "<?php echo site_url(array("mensaje", "borrar")) ?>";
    var url_editar = "<?php echo site_url(array("mensaje","editar")) ?>";
    
</script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/abcd.js"></script>
<script>
    $('#btn_nuevo').button();
    $('#btn_mensaje').button();
    
    
        var dialog = $("<div id='mensajes' />");
        dialog.dialog({
                                autoOpen: false,
                                height: 320,
                                width: 320,
                                modal: true,
                                position: 'top' 
                        });
            $( "#btn_nuevo" ).click(function() {
                                        dialog.dialog( "open" );
                                        dialog.html($('#ajax-loader').clone());
                                        dialog.load(this.href);
                                        return false;
                                });
        
        
    
</script>
<style>
    #btn_nuevo{
        margin-left: 20px;
        margin-top: 20px;
    }
    #mensaje{
        width: 280px;
        height: 180px;
    }
    #notificaciones{
        cursor: pointer;
        background-image: url("<?php echo base_url();?>/img/btn_active_notificacionesAdministrador.png");
        background-repeat:no-repeat; 
    }
</style>

<a id="btn_nuevo" href="<?php echo base_url();?>index.php/mensaje/mensajes" class="button red">Boton</a>


<div class="inner">
    <table id="tb2" width="100%" style="padding: 10px; width: 600px;">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Remitente</th>
                <th>Contenido</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mensajes as $e): ?>
                <tr idregistro="<?php echo $e["idNotificacion"]; ?>">
                    
                    <td><a href="<?php echo site_url(array("mensaje", "borrar", $e["idNotificacion"])) ?>" class="tbl_delete_row" ><img src="<?php echo base_url() ?>img/delete-icon.png" width="18" /></a>
                        </td>
                    <td campo="nombre"><?php echo $e["nombre"] ?></td>   
                    <td campo="mensaje"><?php echo $e["mensaje"] ?></td>
                    
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>