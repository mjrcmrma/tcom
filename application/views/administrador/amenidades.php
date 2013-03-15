<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<style>
    #galeria_amenidades{
        list-style: none;
        width: 629px;
    }
    #galeria_amenidades li{
        float: left;
        height: 130px;
        width: 250px;
    }
    #galeria_amenidades li a{
        text-decoration: none;
        color: #ffffff;
    }
    .info{
        visibility: hidden;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        position: relative;
        top: -130px;
    }
    #galeria_amenidades li:hover .info{
        visibility: visible;
    }
</style>
<ul id="galeria_amenidades">
    <?php foreach($amenidades as $a): ?>
        <li>
            <a href="#"><img width="250px" src="<?php echo base_url();?>amenidades/<?php echo $a['idAmenidad'];?>.jpg" alt="<?php echo $a['amenidad'];?>" />
                <div class="info _<?php echo $a['idAmenidad'];?>">
                      <span><?php echo $a['amenidad'];?></span><hr>
                </div>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
