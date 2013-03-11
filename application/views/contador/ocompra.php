<script>
    $(function(){
        $(".open_details").click(function(){
           $("#dialog-detallescompra").dialog("open"); 
        });
        $("#dialog-detallescompra").dialog({
            autoOpen: false,
            modal: true,
            width:600,
            height: 442
        }); 
    });
</script><style>
    #ocompra{
        background: url('<?php echo base_url();?>/img/btn_active_ocompra.png');
    }
    #table_ocompra{
        margin: 0px auto;
        padding-top: 50px;
        border-spacing: 0;
    }
    .element-list td{
        padding: 10px;
        text-align: center;
    }
    .element-list:hover{
        background-color: #2899cb;
        cursor: pointer;
    }
    .teader th{
        color: #2899cb;
        padding-right: 10px;
    }
    
    #opciones {
        float: right;
        position: relative;
        right: 100px;
        top: 40px;
    }
</style>
<div id="ocompra-content">
    <table id="table_ocompra">
        <tbody>
            <tr class="teader">
                <th></th>
                <th>Artículo</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Precio Total</th>
            </tr>
            <tr class="element-list">
                <td><input type="checkbox" name="ocompa_select" id="ocompa_select"/></td>
                <td class="open_details">Martillo</td>
                <td class="open_details">3</td>
                <td class="open_details">50</td>
                <td class="open_details">150</td>
            </tr>
            <tr class="element-list">
                <td><input type="checkbox" name="ocompa_select" id="ocompa_select"/></td>
                <td class="open_details">Manguera</td>
                <td class="open_details">3</td>
                <td class="open_details">200</td>
                <td class="open_details">600</td>
            </tr>
            <tr class="element-list">
                <td><input type="checkbox" name="ocompa_select" id="ocompa_select"/></td>
                <td class="open_details">Pala</td>
                <td class="open_details">1</td>
                <td class="open_details">200</td>
                <td class="open_details">200</td>
            </tr>
            <tr class="element-list">
                <td><input type="checkbox" name="ocompa_select" id="ocompa_select"/></td>
                <td class="open_details">Casco</td>
                <td class="open_details">3</td>
                <td class="open_details">200</td>
                <td class="open_details">600</td>
            </tr>
        </tbody>
    </table>
    <div id="opciones">
        <a href="#">Aceptar</a>
        <a href="#">Rechazar</a>
    </div>
    <div id="dialog-detallescompra" title="Detalles de Órden de Compra">
        <h1>Orden de Compra</h1>
        <hr>
        <span><strong>Artículo:</strong></span><br />
        <span><strong>Cantidad:</strong></span><br />
        <span><strong>Precio Unitario:</strong></span><br />
        <span><strong>Precio Total</strong></span><br />
    </div>
</div>