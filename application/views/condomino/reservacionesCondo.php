<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
  <script src="http://code.jquery.com/ui/1.10.0/jquery-ui.js"></script>

<script>
       $(function() {
           var espacios = [
                           "Sala de juntas",
                           "Jardín pricipal",
                           "Salón de usos múltiples",
                           "Alberca",
                           "Terraza"
                           ];
                           $("#buscar_espacios").autocomplete({
                               source: espacios
                           });
//    	   $("#idUsuario").val(<?php echo $this->session->userdata("idUsuario"); ?>);

           $("#usa").click(function() {
               $("#contenido-uso").fadeIn();
               $("#contenido-aparta").hide();
               $("#contenido-historial").hide();
               $("#resultado").show();
               $("#resumen").hide();
               $("#usa").addClass("btnactivo"); 
               $("#usa").removeClass("btninactivo"); 
               $("#aparta").addClass("btninactivo"); 
               $("#aparta").removeClass("btnactivo"); 
               $("#historial").addClass("btninactivo"); 
               $("#historial").removeClass("btnactivo"); 
               //forza
               $('#todo').prop('checked', true);
               refrescaGrid();
});
           $("#aparta").click(function() {
               $("#contenido-uso").hide();
               $("#contenido-aparta").fadeIn();
               $("#contenido-historial").hide();
               $("#resultado").show();
               $("#resumen").hide();
               $("#aparta").addClass("btnactivo"); 
               $("#aparta").removeClass("btninactivo"); 
               $("#usa").addClass("btninactivo"); 
               $("#usa").removeClass("btnactivo"); 
               $("#historial").addClass("btninactivo"); 
               $("#historial").removeClass("btnactivo"); 
               $('#todo').prop('checked', false);
               refrescaGrid();
});
           $("#historial").click(function() {
               $("#contenido-uso").hide();
               $("#contenido-aparta").hide();
               $("#contenido-historial").fadeIn();
               $("#resultado").hide();
               $("#resumen").show();
               $("#historial").addClass("btnactivo"); 
               $("#historial").removeClass("btninactivo"); 
               $("#aparta").addClass("btninactivo"); 
               $("#aparta").removeClass("btnactivo"); 
               $("#usa").addClass("btninactivo"); 
               $("#usa").removeClass("btnactivo"); 
               $('#todo').prop('checked', false);
               refrescaGrid();
});
           
    	   $("#fechaApartado" ).datepicker();
           $("#fechaApartado" ).datepicker("option","dateFormat","yy-mm-dd");

    	   $("#fechaDesde" ).datepicker();
           $("#fechaDesde" ).datepicker("option","dateFormat","yy-mm-dd");
    	   $("#fechaHasta" ).datepicker();
           $("#fechaHasta" ).datepicker("option","dateFormat","yy-mm-dd");
           
           $("#refresca").click(function() {
             refrescaGrid();
           });
           $("#accion-asiste").click(function() {
             $(":checked.acciones").each(
          		  function(index) {
            		    var iden=this.id;
            		    iden=iden.substring(4);
            		    //hacer el post...
            		    var datos={'row_id':iden,'column':"asistio",'value':"1"};
            		    $.ajax({
                            url: '<?php echo base_url(); ?>index.php/apartados/registraAccion',
                            type: "post",
                            data: datos,
                            beforeSend: function() {
                            },
                            success: function(result) {
//                                alert("ok");
                                window.location.reload();
                            },
                            error:function(result) {
                                alert("Detalle en la consulta");
                                //window.location.reload();
                            }
                                
                        }); //ajax
            		  }); //function
//               });//each
               return false;
           });  //click
           $("#accion-cancela").click(function() {
               $(":checked.acciones").each(
            		  function(index) {
              		    var iden=this.id;
              		    iden=iden.substring(4);
              		    //hacer el post...
              		    var datos={'row_id':iden,'column':"cancelada",'value':"1"};
              		    $.ajax({
                              url: '<?php echo base_url(); ?>index.php/apartados/registraAccion',
                              type: "post",
                              data: datos,
                              beforeSend: function() {
                              },
                              success: function(result) {
//                                  alert("ok");
                                  window.location.reload();
                              },
                              error:function(result) {
                                  alert("Detalle en la consulta");
                                  //window.location.reload();
                              }
                                  
                          }); //ajax
              		  }); //function
//                 });//each
                 return false;
             });  //click
           

           });  //jquery
           
       function refrescaGrid() {
           var fechaApartado = $('#fechaApartado').val();
           var idArticulo='No.'+$('#idArticulo').val();
           var misApartados=$('#todo').is(':checked');
           $('#previos tr').show();  // Vuelve a mostrar todo
           $('#previos thead th').show();
           $('#previos tbody td').show();
           // Oculta columnas auxiliares
           //fecha(1) aparato(2) condomino(3) amenidad(4) desde(5) hasta(6)
           if (misApartados) {
              $('#previos thead th:nth-child(3)').hide(); 
              $('#previos tbody td:nth-child(3)').hide();
           }
           else
           {
              $('#previos thead th:nth-child(1)').hide();
              $('#previos thead th:nth-child(2)').hide();
              $('#previos tbody td:nth-child(1)').hide();
              $('#previos tbody td:nth-child(2)').hide();
           }
           // Filtra registros que no cumplan el criterio
    <?php $query = $this->db->query("Select concat(trim(p.apellidoPatPersona),' ',trim(p.apellidoMatPersona),' ',trim(p.nombrePersona)) as condomino From usuarios u Inner join personas p on p.idPersona=u.idPersona Where u.idUsuario=".$this->session->userdata("idUsuario"));
    ?>
    <?php foreach ($query->result() as $row): ?>
    <?php $condomino=$row->condomino; ?>
     <?php endforeach; ?>
           var condomino="<?php echo $condomino ?>";
           if (misApartados ) {
               $('#previos tbody tr:not( :has(td:contains('+condomino+')))').hide();
            }   
           else
           {
               $('#previos tbody tr:not( :has(td:contains('+fechaApartado+')))').hide();
               $('#previos tbody tr:not( :has(td:contains('+idArticulo+')))').hide();
            }
         }
       </script>

<style>
#reservaciones{
        background-image: url("<?php echo base_url();?>/img/btn_active_reservaciones.png");
        cursor:pointer;
    }
    .buscador{
        width: 412px;
        height: 37px;
        margin-left: 23px;
        background: url("<?php echo base_url();?>/img/imagen_buscador.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none;
        padding-right: 55px;
        padding-left: 15px;
    }
    .fechas{
        width: 152px;
        height: 37px;
        margin-left: 23px;
/*        background: url("<?php echo base_url();?>/img/imagen_buscador.png") repeat scroll 0 0 transparent;
        outline: 0 none;
        border: none; */
        padding-right: 55px;
        padding-left: 15px;
}
    #eventos{
        background-image: url("<?php echo base_url();?>/img/btn_eventos.png");
        cursor:pointer;
    }
     
    </style>
    
    <style>
    #navegacion {
      padding:10px;
    }
    #contenido-uso {
       display:none;
       padding-left:5px;
    }
    #contenido-aparta {
       display:none;
       padding-left:5px;
}
    #resultado {
    display:none;
    }
    #resumen {
    display:none;
    }
    
    .btnactivo{
       border:3px solid #3E7B14;
    }
    .btninactivo
    {
       border:0px;
    }
    .tablaapartados {
       margin-top:5px;
       margin-left:5px;
       color:#3E7B14;
       font-size:8pt;
       border:1px dotted gray;    
    }
    .tablaapartados th {
       color:white;
       background-color:#3E7B14;
       font-size:8pt;
    }
    .tablaapartados td {
       padding:2px;
    }
    
    .tablahistorial {
       margin-top:5px;
       margin-left:5px;
       color:#3E7B14;
       font-size:8pt;
       border:1px dotted gray;    
    }
    .tablahistorial th {
       color:white;
       background-color:#3E7B14;
       font-size:8pt;
    }
    .tablahistorial td {
       padding:2px;
    }
    
    #galeria_amenidades{
        list-style: none;
        width: 300px;
    }
    #galeria_amenidadesx li{
        float: left;
        height: 50px;
        width: 60px;
    }
    #galeria_amenidades li a{
        text-decoration: none;
        color: #ff00ff;
    }
    .info{
        width: 100%;
        height: 100%;
        background: rgba(255, 0, 0, 0.6);
        position: relative;
        top: 0px;
    }
    #galeria_amenidades li:hover .info{
        visibility: visible;
    }

</style>

    
    
    <div id="navegacion">
      <input type="button" class="button" value="Apartado de Amenidades" id="aparta"    name="aparta"/>
      <input type="button" class="button" value="Uso de Amenidades"      id="usa"       name="usa"/>
      <input type="button" class="button" value="Historial de Consumos"  id="historial" name="historial"/>
    </div>
    <br />

    <div id="contenido-uso">
      <input type="button" class="button" value="Asiste"  id="accion-asiste"   name="accion-asiste"/>
      <input type="button" class="button" value="Cancela" id="accion-cancela"  name="accion-cancela"/>
    </div>
    
    <div id="contenido-aparta">
      <form method="post" action="<?php echo site_url(array("apartados", "nueva")) ?>" id="form_nuevo">
      <div class="label">Muestra mis apartados
       <input type="checkbox" id="todo" name="todo" />
       <input type="button" class="button" value="Refresca Apartados" id="refresca" name="refresca"/>
      </div>
      <p>
        <b style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Seleccionar Amenidad</b>
      </p>
      <div class="campo clearfix">
         <select name="idArticulo" id="idArticulo">
         <option value="0">(Ninguna)</option>
         <?php $query = $this->db->query("Select idArticulo,idAmenidad,Articulo From articulosamenidad Order By articulo");
         ?>
         <?php foreach ($query->result() as $row): ?>
         <option value="<?php echo $row->idArticulo ?>"><?php echo  $row->Articulo ?></option>
         <?php endforeach; ?>
         </select>
       </div>
      <div class="label"><input type="submit" class="submit" value="Apartar el Espacio" /></div>
      <p>
       <span style="color: #3E7B14; margin-left: 21px; font-size: 14px;">Fecha</span><span style="color: #3E7B14; font-size: 14px;">De las</span><span style="color: #3E7B14; font-size: 14px;">A las</span>
      </p>
       <input class="fechas" type="text"  name="fechaApartado" id="fechaApartado" value=""     />
       <input class="fechas" type="text"  name="horaInicial"   id="horaInicial"   value="00:00"/>
       <input class="fechas" type="text"  name="horaFinal"     id="horaFinal"     value="00:00"/>
       <input type="hidden" name="idUsuario" id="idUsuario" value="<?php echo $this->session->userdata("idUsuario"); ?>"/>
       <input type="hidden" name="asistio"   id="asistio"   value="0"/>
       <input type="hidden" name="cancelada" id="cancelada" value="0"/>
       <input type="hidden" name="minutos"   id="minutos"   value="0"/>
       </form>   
    </div>
 
     <div id="temporal" style="display:none">
            <input class="fechas" type="text"  name="fechaDesde" id="fechaDesde" value="2013-01-01"/>
            <input class="fechas" type="text"  name="fechaHasta" id="fechaHasta" value="<?php echo date('yy-mm-dm')?>"/>
            <input type="button" class="button" value="Refresca" id="refrescaHistorial" name="refrescaHistorial"/>
            </div>
      </div>
    
    
    <!-- Fin controles de apartados -->

    <!-- GRID -->
       <div id="resultado">
         <table id="previos" border="0" cellspacing="0" cellpadding="2" class="tablaapartados">
         <thead>
         <tr>
          <th>Fecha</th>
          <th>Id</th>
          <th>Condomino</th>
          <th>Amenidad</th>
          <th>De las</th>
          <th>A las</th>
          <th>Estatus</th>
          <th>Accion</th>
          </tr>
         </thead>
         <tbody>
         <?php
               $hoy = date('Y-m-d');
               $sql ="Select a.idApartado,a.idUsuario,a.idArticulo";
               $sql.=",concat(trim(p.apellidoPatPersona),' ',trim(p.apellidoMatPersona),' ',trim(p.nombrePersona)) as condomino";
               $sql.=",m.articulo as amenidad"; 
               $sql.=",a.fechaApartado,a.horaInicial,a.horaFinal,asistio,cancelada ";
               $sql.=",case when asistio=1 then 'Asistio' when cancelada=1 then 'Cancelo' when (asistio=0 and cancelada=0 and fechaApartado<=".$hoy.") then 'NO asistio' else 'Pendiente' End As estatus";
               $sql.=" From apartados a ";
               $sql.="  Inner Join usuarios u On a.idUsuario=u.idUsuario ";
               $sql.="  Inner join personas p on p.idPersona=u.idPersona ";
               $sql.="  Inner join articulosamenidad m on m.idArticulo=a.idArticulo ";
               $sql.=" Order By fechaApartado desc,horaInicial,horaFinal"; ?>
       <?php $query = $this->db->query($sql);
       ?>
       <?php foreach ($query->result() as $row):
            $identificador= "chk-" . (string)$row->idApartado;
         ?>
         <tr id="<?php echo $row->idApartado ?>">
          <td><?php echo $row->fechaApartado ?></td>
          <td>No.<?php echo $row->idArticulo ?></td>
          <td><?php echo $row->condomino ?></td>
          <td><?php echo $row->amenidad ?></td>
          <td><?php echo $row->horaInicial ?></td>
          <td><?php echo $row->horaFinal ?></td>
          <td><?php echo $row->estatus ?></td>
          <?php 
          if ($row->fechaApartado>=$hoy and $row->asistio==0 and $row->cancelada==0) { 
          ?>
          <td><input type="checkbox" id="<?php echo $identificador ?>" class="acciones" /></td>
          <?php
          }
          else         
          { 
          ?>
          <td>&nbsp;</td>
          <?php 
          }
          ?>
          
          </tr>
       <?php endforeach; ?>
       </tbody>
       </table>
       <br />
       </div> 
       <!-- RESUMEN -->
       <div id="resumen">
         <table id="previos2" border="0" cellspacing="0" cellpadding="2" class="tablahistorial">
         <thead>
         <tr>
          <th>Amenidad Utilizada</th>
          <th>Primera visita</th>
          <th>Ultima visita</th>
          <th>No. Visitas</th>
          <th>Promedio (min)</th>
          </tr>
         </thead>
         <tbody>
         <?php
               $hoy = date('Y-m-d');
               $sql ="Select m.articulo as amenidad"; 
               $sql.=",Min(fechaApartado) As primera";
               $sql.=",Max(fechaApartado) As reciente";
               $sql.=",Count(minutos) as veces";
               $sql.=",Avg(minutos) as promedio ";
               $sql.=" From apartados a ";
               $sql.="  Inner join articulosamenidad m on m.idArticulo=a.idArticulo ";
               $sql.="  Where idUsuario=".$this->session->userdata("idUsuario");
               $sql.="    and asistio=1";
               $sql.="  Group By m.articulo";
               $sql.=" Order By m.articulo"; ?>
       <?php $query = $this->db->query($sql);
       ?>
       <?php foreach ($query->result() as $row): ?>
         <tr>
          <td><?php echo $row->amenidad ?></td>
          <td style="text-align:center;"><?php echo $row->primera ?></td>
          <td style="text-align:center;"><?php echo $row->reciente ?></td>
          <td style="text-align:center;"><?php echo $row->veces ?></td>
          <td style="text-align:center;"><?php echo $row->promedio ?></td>
          </tr>
       <?php endforeach; ?>
       </tbody>
       </table>
       <br />
       </div> 
             
      
      