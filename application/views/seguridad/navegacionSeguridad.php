<script src="<?php echo base_url();?>/js/jquery.watch.js"></script>
<style>
    #navegador{
        background-image: url("<?php echo base_url();?>/img/btn_active_nvgdrSeguridad.png");
        cursor:pointer;
    }
    #navegacionSeguridad-content{
        padding: 20px;
    }
</style>
<script>
    $(function(){
        
    });
</script>
<div id="navegacionSeguridad-content">
    <div id="reloj"><strong><?php echo date('d-m-y')?>&nbsp;&nbsp;<?php echo date('h:i:s', time())?></strong></div><br /><br />
    <img src="<?php echo base_url();?>img/camaras_nav.png" />
</div>