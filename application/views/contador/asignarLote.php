
<style type="text/css" title="currentStyle">
    @import "<?php echo base_url(); ?>media/css/demo_page.css";
    /*                        @import "<?php echo base_url(); ?>media/css/header.css";*/
    @import "<?php echo base_url(); ?>media/css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    var url_borrar = "<?php echo site_url(array("condominos", "borrar")) ?>";
    var url_editar = "<?php echo site_url(array("condominos","editar")) ?>";
    var disponibilidad = "<?php echo $lotes['estado'] ?>";
    if(disponibilidad == "0" || disponibilidad == "2"){
         $(".inner").attr("hidden","true");

    }
    
</script>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/abcd.js"></script>

<style>
    .inner{
        padding: 5px;
    }

    .label {
        width: 100px;
        text-align: right;
        display: inline-block;
        clear: left;
    }

    .campo {
        display: inline;
    }

    .campo input {
        width: 300px;
    }
    .submit {
        width: 100px;
    }
    .clearfix:after {
        visibility: hidden;
        display: block;
        font-size: 0;
        content: " ";
        clear: both;
        height: 0;
    }

    #nuevo {
        display: none;
        border: 1px solid #D3D6FF;
        background-color: #F0F1FA;
        padding: 10px;
        margin: 10px;
    }

    #nuevo .title {
        text-align: center;
        font-size: 14px;
        font-weight: bold;
        background-color: white;
        border: 1px solid #D3D6FF;
        margin: 2px;
        padding: 2px;
    }

    #aviso_ok img {
        width: 30px;
        vertical-align:middle;
    }
    #aviso_ok {
        padding: 5px;
        margin: 5px 0px;
        text-align: center;
        display: none;
        font-size: 14px;
        font-weight: bold;
        background-color: #D1E6D2;
        border: 1px solid #245C26;
    }
    #loteDialog{
        width: 300px;
        height: 200px;
    }
    #tb2{
        clear: both;
       
    }
</style>
<h3>INFORMACIÓN DEL LOTE</h3>
<div id="content-lote">
    <label>Manzana: </label><span><?php echo $lotes['idManzana'];?></span><br>
    <label>Número de lote: </label><span><?php echo $lotes['lote'];?></span><br>
    <label>Superficie: </label><span><?php echo $lotes['superficie'];?> m&#178</span><br>
    <label>Precio(u/m&#178): </label><span><?php echo $lotes['costo'];?></span><br>
    <label>Estado: </label><?php if($lotes['estado']==1) echo 'Disponible'; elseif($lotes['estado']==2) echo 'En construcción'; else echo 'Ocupado';?></span>
</div>

<div class="inner">
    <table id="tb2" width="100%" style="padding: 10px; width: 600px;">
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Tipo</th>
                
                <th>Dirrección</th>
                <th>Telefono</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $e): ?>
                <tr idregistro="<?php echo $e["idUsuario"]; ?>">
                    
                    <td><a href="<?php echo site_url(array("condominos", "insert_lote", $e["idUsuario"],$lotes['lote'])) ?>"class="tbl_update_row" ><img src="<?php echo base_url() ?>img/btn_add.png" tittle="Asingar" width="18" /></a></td>
                    <td campo="nombrePersona"><?php echo $e["apellidoPatPersona"] ?> <?php echo $e["apellidoMatPersona"] ?> <?php echo $e["nombrePersona"] ?></td>   
                    <td campo="correoUsuario"><?php echo $e["correoUsuario"] ?></td>
                    <td campo="idTipo"><?php echo $e["idTipo"] ?></td>
                                   
                    <td campo="direccionPersona"><?php echo $e["direccionPersona"] ?></td>
                    <td campo="telefonoPersona"><?php echo $e["telefonoPersona"] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
</div>