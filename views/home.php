<!DOCTYPE html>
<html>
    <head>
        <title>SERVICIOS</title>

        <meta name="viewport" content="width=devie-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.2.7/js/dataTables.responsive.min.js"></script>


        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.7/css/responsive.dataTables.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/modal.css">
        <link href="estilos.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>

    <body>

 
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
			    <button id="btn" type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><span class="icon-plus"></span><i class="fa fa-window-restore">Nuevo</i></button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <table id="data" class="display responsive nowrap" style="width:100%">
        <thead>

        					
            <tr>
                <th># Tarea</th>
                <th>Predio</th>
                <th>Nemonico</th>
                <th>Direccion</th>
                <th>Tipo de Instalacion</th>
                <th>Fecha De Actividad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($AbriM1s as $AbriM1) : ?>
            <tr>
                <td><?php echo $AbriM1->idRemedy?></td>
                <td><?php echo $AbriM1->NOMBREPREDIO?></td>
                <td><?php echo $AbriM1->NEMONICOEQUIPO?></td>
                <td><?php echo $AbriM1->DIRECCIONPREDIO?></td>
                <td><?php echo $AbriM1->TIPODEINSLACION?></td>
                <td><?php echo $AbriM1->fecha?></td>
                <td>


                  <a type="button" data-toggle="modal"  data-target="#exampleModal<?php echo $MarM1->idRemedy?>" href="?controller=tarea&method=edit&idTarea=<?php
                  echo $MarM1->idRemedy?>" class="btn btn-primary"><i class="far fa-edit"></i></a>
                  
                  <a href="?controller=tarea&method=delete&idTarea=
                      <?php echo $tarea->idTarea?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>

                </td>
                
            </tr>

              <?php endforeach?>
        </tbody>
      </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

            
            <!-- /.card -->
          </div>
          <!-- /.col -->    
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
       
        <!-- /.row -->
       
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

            
<!-- servicios de mi pagina aunque lo tegno arriba-->
            <section class="about-services">
               
            </section>

        
            
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script>
       $(document).ready(function() {
    tablaOfertaCambioIdioma();
} );

function tablaOfertaCambioIdioma(){

	$('#data').DataTable({

		  "language": {
      "emptyTable":     "<i>No hay datos disponibles en la tabla.</i>",
      "info":         "Del _START_ al _END_ de _TOTAL_ ",
      "infoEmpty":      "Mostrando 0 registros de un total de 0.",
      "infoFiltered":     "(filtrados de un total de _MAX_ registros)",
      "infoPostFix":      "(actualizados)",
      "lengthMenu":     "Mostrar _MENU_ registros",
      "loadingRecords":   "Cargando...",
      "processing":     "Procesando...",
      "search":     "<span style='font-size:15px;'>Buscar:</span>",
      "searchPlaceholder":    "Dato para buscar",
      "zeroRecords":      "No se han encontrado coincidencias.",
      "paginate": {
        "first":      "Primera",
        "last":       "Última",
        "next":       "Siguiente",
        "previous":     "Anterior"
      },
      "aria": {
        "sortAscending":  "Ordenación ascendente",
        "sortDescending": "Ordenación descendente"
      }
    },

     "lengthMenu":   [[15,5,7, 10, 20, 25, 50, -1], [3,5,7, 10, 20, 25, 50, "Todos"]],
    "iDisplayLength": 15,

	});
    }
    </script>
    </body>
    
    <footer class="footer">
        <div class="container">
            <p>@ Todos los derechos reservados | Deyaneira Urrego</p>
        </div>
    </footer>


</html>