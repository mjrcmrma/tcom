<style>
    #consulta
    {
        
        background-image: url("<?php echo base_url();?>img/btn_active_consultaC.png");
    }
    #labels{
        margin-top:20px;
        font-family: Tahoma;
        font-size: 14px;
        font-weight: bold;
        color:#3E7B14;
        padding-left: 20px;
    }
    #tablas{
        margin-left:20px; 
        margin-right: 20px;
        margin-top: 10px;
    }
    .wrapperSecond{
        height: 1000px;
    }
    #tablas-header{
        background:#EFEFEF;
        width:auto;
        height:22px;
        color: black;
        font-family: Tahoma;
        font-size: 12px;
        font-weight: bold;
        margin-right: 20px;
        
    }
    .tablas-rows{
        width:auto;
        height:22px;
        color: black;
        font-family: Tahoma;
        font-size: 12px;
        margin-right: 20px;
        
    }
    .periodo{
        font-family: Tahoma;
        font-size: 12px;
        font-weight: bold;
        color:black;
        padding-left: 20px;
    }
    .tabla-periodo{
        margin-top: 20px;
        margin-left: 20px;
        margin-bottom: 20px;
    }
</style>
<br>
<label id="labels">Estado de Cuenta</label>
<br>
<div>
    <table class="tabla-periodo" border="1" cellpadding="10" cellspacing="0" bordercolor="#D2D2D2">
        <tr>
            <th class="periodo">Periodo</th>
            <th class="periodo" style="font-weight:normal;">Enero-Febrero 2013</th>
        </tr>
    </table>
</div>


<table id="tablas" border="1" cellpadding="10" cellspacing="0">
    <tr id="tablas-header">
        <th>ID</th>
        <th>Concepto</th>
        <th>Cantidad a pagar</th>
        <th>Descuento</th>
        <th>Total a pagar</th>
        <th>Fecha de inicio</th>
        <th>Fecha de corte</th>
    </tr>
    <tr class="tablas-rows">
        <td>1</td>
        <td>Servicio: Agua potable</td>
        <td>$299.50</td>
        <td>$0.00</td>
        <td>$299.50</td>
        <td>16/01/2013</td>
        <td>16/02/2013<td>
    </tr>
    <tr class="tablas-rows">
        <td>2</td>
        <td>Servicio: Luz electrica</td>
        <td>$1009.50</td>
        <td>$10.00</td>
        <td>$999.50</td>
        <td>12/01/2013</td>
        <td>12/03/2013<td>
    </tr>
</table>
<img src="<?php echo base_url();?>img/exportarImprimir.png" style="margin-left: 10px; margin-top: 10px; cursor: pointer;">
<br>
<br>
<img src="<?php echo base_url();?>img/numerosFrecuentes.png" style="margin-left: 20px; margin-top: 20px;">
<br>
<br>
