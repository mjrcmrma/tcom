<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.maphilight.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.metadata.min.js"></script>
<script>
    $(function(){
       	$('.map').maphilight({
            fade: false
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
        height: 900px; 
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
</style>
<div id="mapaT-Comm" class="map">
    <canvas height="900" width="1058"></canvas>
    <img class="map maphilighted" src="<?php echo base_url();?>/img/mapa.png" width="1058" height="900" usemap="#t-comm">
</div>
<map name="t-comm">
    <?php foreach($lotes as $l): ?>
        <?php if($l['estado'] == 1): ?>
            <area class="{strokeColor: '64fe2e',fillColor:'64fe2e'}" href="#" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php elseif ($l['estado'] == 2): ?>
            <area class="{strokeColor: 'ffff00',fillColor:'ffff00'}" href="#" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php else: ?>
            <area href="#" shape="POLYGON" coords="<?php echo $l['coordenadas'];?>" title="<?php echo $l['lote'];?>"/>
        <?php endif;?>
    <?php endforeach; ?>
</map>