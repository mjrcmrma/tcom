<style type="text/css" title="currentStyle">
    @import "<?php echo base_url(); ?>media/css/demo_page.css";
    /*                        @import "<?php echo base_url(); ?>media/css/header.css";*/
    @import "<?php echo base_url(); ?>media/css/demo_table.css";
</style>
<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>media/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf-8">
    var url_borrar = "<?php echo site_url(array("empresas", "borrar")) ?>";
    var url_editar = "<?php echo site_url(array("empresas","editar")) ?>";
    
</script>

<script type="text/javascript" language="javascript" src="<?php echo base_url(); ?>js/abc.js"></script>
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
    
    #tbl{
        clear: both;
    }
</style>
<div class="inner">
    <button id="btn_nuevo">Nueva Empresa</button>
    <div id="nuevo">
        <form method="post" action="<?php echo site_url(array("empresas", "nueva")) ?>" id="form_nuevo">
            <div class="title">Complete el formulario para registrar la empresa</div>
            <div class="label"><label>Empresa</label></div> <div class="campo clearfix"><input type="text" name="nombreEmpresa" /></div>
            <div class="label"><label>Dirección</label></div> <div class="campo clearfix"><input type="text" name="direccionEmpresa" /></div>
            <div class="label"><label>RFC</label></div> <div class="campo clearfix"><input type="text" name="RFCEmpresa" /></div>
            <div class="label">&nbsp;</div><div class="label"><input type="submit" class="submit" /></div>
        </form>
    </div>
    <div id="aviso_ok">
        <img src="<?php echo base_url() ?>img/ok.png" /> <span class="aviso_contenido">La empresa se ha guardado correctamente</span>
    </div>
    <table id="tbl" width="100%" style="padding: 10px; width: 50px;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>RFC</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($empresas as $e): ?>
                <tr idregistro="<?php echo $e["idEmpresa"]; ?>">
                    <td campo="nombreEmpresa"><?php echo $e["nombreEmpresa"] ?></td>
                    <td campo="direccionEmpresa"><?php echo $e["direccionEmpresa"] ?></td>
                    <td campo="RFCEmpresa"><?php echo $e["RFCEmpresa"] ?></td>
                    <td><a href="<?php echo site_url(array("empresas", "borrar", $e["idEmpresa"])) ?>" class="tbl_delete_row" ><img src="<?php echo base_url() ?>img/delete-icon.png" width="18" /></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>