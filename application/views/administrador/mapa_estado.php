<meta charset="utf-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.maphilight.min.js"></script>
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
/*    #canvasT-Comm{
        width: 1058px; 
        height: 900px; 
        position: absolute; 
        left: 0px; 
        top: 0px; 
        padding: 0px; 
        border: 0px; 
    }*/
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
    <!--<canvas height="900" width="1058"></canvas>-->
    <img class="map maphilighted" src="<?php echo base_url();?>/img/mapa.png" width="1058" height="900" usemap="#t-comm">
</div>
<map name="t-comm">
    <area href="#" shape="RECT" coords="168,71,312,143" title="Manzana 10" />
    <area href="#" shape="CIRCLE" coords="132,138,37" title="This is the tooltip." />
    <area href="#" shape="POLYGON" coords="277,17,326,104,234,110" title="This is the tooltip." />
    
    <area href="#" shape="POLYGON" coords="445,686,444,697,442,706,456,706,468,705,470,688,472,673,458,672,453,679" title="1" />
    <area href="#" shape="POLYGON" coords="474,673,472,688,470,706,488,708,489,690,490,675" title="2" />
    <area href="#" shape="POLYGON" coords="492,674,490,690,488,708,506,712,513,694,519,681,507,676" title="3" />
    <area href="#" shape="POLYGON" coords="521,682,514,698,507,712,523,719,528,709,534,696,536,690" title="4" />
    <area href="#" shape="POLYGON" coords="538,689,525,720,541,727,553,697" title="5" />
    <area href="#" shape="POLYGON" coords="555,697,542,726,563,734,564,713,566,701,563,701" title="6" />
    <area href="#" shape="POLYGON" coords="568,700,565,734,581,735,585,702" title="7" />
    <area href="#" shape="POLYGON" coords="586,702,583,736,600,737,603,704" title="8" />
    <area href="#" shape="POLYGON" coords="605,705,601,737,619,739,621,707" title="9" />
    <area href="#" shape="POLYGON" coords="623,706,619,739,635,740,639,739,641,735,640,729,639,721,638,713,637,707" title="10" />
    <area href="#" shape="POLYGON" coords="618,671,615,703,637,706,635,697,635,689,634,679,635,675,633,673,631,672,627,671" title="11" />
    <area href="#" shape="POLYGON" coords="600,669,597,701,613,703,615,688,617,671" title="12" />
    <area href="#" shape="POLYGON" coords="582,667,580,681,578,700,596,702,599,668" title="13" />
    <area href="#" shape="POLYGON" coords="579,666,577,699,566,699,551,693,556,683,561,670,565,663" title="14" />
    <area href="#" shape="POLYGON" coords="563,662,549,692,533,685,541,667,546,654" title="15" />
    <area href="#" shape="POLYGON" coords="544,654,531,684,515,677,527,648" title="16" />
    <area href="#" shape="POLYGON" coords="525,647,513,677,508,674,497,673,505,642,516,645,523,646" title="17" />
    <area href="#" shape="POLYGON" coords="504,642,495,673,476,671,460,670,473,656,482,643,486,640,495,641" title="18" />
    
     <area href="#" shape="POLYGON" coords="434,564,422,597,452,608,458,599,462,590,466,581,469,572,469,567,466,566,460,566,451,566,444,566" title="1" />
    <area href="#" shape="POLYGON" coords="422,599,410,630,428,636,451,609" title="2" />
    <area href="#" shape="POLYGON" coords="420,598,409,629,394,624,404,592" title="3" />
    <area href="#" shape="POLYGON" coords="402,592,391,623,376,617,387,586" title="4" />
    <area href="#" shape="POLYGON" coords="385,586,374,617,358,612,369,580" title="5" />
    <area href="#" shape="POLYGON" coords="367,580,357,610,341,606,352,574" title="6" />
    <area href="#" shape="POLYGON" coords="350,574,339,606,323,602,330,570,341,573" title="7" />
    <area href="#" shape="POLYGON" coords="327,570,321,602,304,599,311,566" title="8" />
    <area href="#" shape="POLYGON" coords="309,566,303,598,286,596,293,563" title="9" />
    <area href="#" shape="POLYGON" coords="291,563,284,597,270,595,271,562,284,562" title="10" />
    <area href="#" shape="POLYGON" coords="269,562,268,595,253,595,253,562" title="11" />
    <area href="#" shape="POLYGON" coords="233,561,232,586,236,595,251,595,251,562" title="12" />
    <area href="#" shape="POLYGON" coords="233,560,233,534,237,526,251,527,251,560" title="13" />
    <area href="#" shape="POLYGON" coords="253,526,252,560,272,560,273,527" title="14" />
    <area href="#" shape="POLYGON" coords="274,528,274,560,283,559,294,562,301,530" title="15" />
    <area href="#" shape="POLYGON" coords="302,531,296,562,314,566,321,533" title="16" />
    <area href="#" shape="POLYGON" coords="323,533,316,565,332,568,339,536" title="17" />
    <area href="#" shape="POLYGON" coords="340,537,334,569,350,573,361,542" title="18" />
    <area href="#" shape="POLYGON" coords="363,543,352,572,368,578,380,547" title="19" />
    <area href="#" shape="POLYGON" coords="381,548,370,579,385,584,397,553" title="20" />
    <area href="#" shape="POLYGON" coords="399,553,387,585,403,591,414,559" title="21" />
    <area href="#" shape="POLYGON" coords="416,559,404,591,420,596,432,564" title="22" />
    
    
    
    
    
</map>