<meta charset="utf-8">

<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.maphilight.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.metadata.min.js"></script>
<script>
    $(function(){
       	$('.map').maphilight({
            fade: false
        }); 
        var dialog_compartir = $("<div id='loteDialog' tittle='Asignación de Lote'/>");
        dialog_compartir.dialog({
                                autoOpen: false,
                                height: 600,
                                width: 900,
                                modal: true,
                                position: 'top' 
                        });
            $( ".lote" ).click(function() {
                                        dialog_compartir.dialog( "open" );
                                        dialog_compartir.html($('#ajax-loader').clone());
                                        dialog_compartir.load(this.href);
                                        return false;
                                });


            
    });
</script>
<style>
    #mapaT-Comm{
        display: block; 
        background-image: url(<?php echo base_url();?>/img/mapa.png); 
        position: relative; 
        padding: 0px; 
        width: 1058px; 
        max-height: 900px; 
        background-position: initial initial; 
        background-repeat: initial initial;
    }
    .map maphilighted{
        opacity: 0; 
        position: absolute; 
        left: 0px; 
        top: 0px; 
        padding: 0px; 
        border: 0px;
    }
    #main-content{
        overflow-x:scroll;
        overflow-y:scroll;
        
        
    }
    .lote{
        position: absolute; zoom: 70%; border: solid 1px; z-index:10;
    }
    #mp{
        margin-left:-100px;
    }

</style>
<div id="mp">
<div id="mapaT-Comm" class="map">
    <canvas height="900" width="1058"></canvas>
    <img class="map maphilighted" src="<?php echo base_url();?>/img/mapa.png" width="1058" height="900" usemap="#t-comm">
</div>
<map name="t-comm">
    <?php foreach($lotes as $l): ?>
        <?php if($l['estado'] == 1): ?>
    <area class="lote" class="{strokeColor: '64fe2e',fillColor:'64fe2e'}"   href="<?php echo base_url(); ?>index.php/lotes/loteVer/<?php echo $l['idLote'];?>" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php elseif ($l['estado'] == 2): ?>
            <area class="lote" class="{strokeColor: 'ffff00',fillColor:'ffff00'}" href="<?php echo base_url(); ?>index.php/lotes/loteVer/<?php echo $l['idLote'];?>" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php else: ?>
            <area class="lote" href="<?php echo base_url(); ?>index.php/lotes/loteVer/<?php echo $l['idLote'];?>" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php endif;?>
    <?php endforeach; ?>
</map>
</div>
