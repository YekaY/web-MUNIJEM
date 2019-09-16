<?php include('nav.php'); ?>
<?php include('body_calendario.php');?>
<?php include('footer.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>
		calendario ejm
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/moment.min.js"></script>

	<!-- librerias de fullcalendar-->
	<link rel="stylesheet" href="css/fullcalendar.min.css">
	<script src="js/fullcalendar.min.js"></script>
	<script src="js/es.js"></script>

	<!-- esto se agrega siempre en cuando se haya agregado <script src="js/jquery.min.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style>
		.fc th{
			padding: 10px 0px;
			vertical-align: middle;
			background: #4682B4;
			border: 0px;
		}
		.fc tbody td{
			vertical-align: middle;
			background: #FFFFFF;
			border-color: #87cefa;
			text-decoration-color: #4682B4;
		}
		
	</style>

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col"></div>
			<div class="col-7"><div id="CalendarioWeb"></div></div>
			<div class="col"></div>
		</div>
	</div>
	<script>
		$(document).ready(function(){
			$('#CalendarioWeb').fullCalendar({
				//configurando la cabezera del calendario
				header: {
					left: 'prev, today',
					center: 'title',
					right: 'today, next' 
				},
				//añadiendo botones personalizados
				/*customButtons:{
					bot:{
						text: 'bot',
						click: function(){
							alert("se hiso click en el boton 'bot' ... ");
						}
					}					
				},*/
				//haciendo click en una fecha x
				dayClick: function(date,jsEvent,view){
					$('#btnAgregar').prop("disabled",false);
					$('#btnModificar').prop("disabled",true);
					$('#btnEliminar').prop("disabled",true);

					limpiarFormulario();
					$("#txtFechaI").val(date.format());
					$("#ModalEventos").modal();
				},

				//añadiendo eventos al calendario
				events:'eventos.php',

				//haciendo click o selecionando un evento de fecha x y se muestre en el modal
				eventClick:function(calEvent,jsEvent,view){
					$('#btnAgregar').prop("disabled",true);
					$('#btnModificar').prop("disabled",false);
					$('#btnEliminar').prop("disabled",false);
					//etiqueta H2
					$('#tituloEvento').html(calEvent.title);
					//información a modificar
					$('#txtId').val(calEvent.id);
					$('#txtTitulo').val(calEvent.title);
					$('#txtDescripcion').val(calEvent.descripcion);
					$('#txtFechaI').val(calEvent.start.format());
					//$('#txtFechaF').val(calEvent.end.format());

					$("#ModalEventos").modal();
				}
				
			});
		});
	</script>

	<!-- Modal para el formulario de CRUD de los eventos-->
	<div class="modal fade" id="ModalEventos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="tituloEvento"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <div id="descripcionEvento">
	        	<!--formulario-->
	        	<input type="hidden" id="txtId" name="txtId">

	        	<div class="form-row">
	        		<div class="form-group col-md-4">
	        			<label>Fecha Inicio : </label>
	        			<input type="text" id="txtFechaI" class="form-control" placeholder="AAAA-MM-DD" />
	        		</div>
	        		<div class="form-group col-md-8">
	        			<label>Titulo : </label>
	        			<input type="text" id="txtTitulo" class="form-control" placeholder="Título del evento"  />
	        		</div>
	        	</div>
		        <div class="form-row">
	        		<div class="form-group col-md-12">
	        		<label>Descripción : </label>
	        		<textarea id="txtDescripcion" rows="3" class="form-control" placeholder="Descripción del evento" /></textarea></div>
	        	</div>
		        <!--Fecha Fin:<input type="text" id="txtFechaF" name="txtFechaF" /><br>-->
		        
		        
	        </div>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" id="btnAgregar" class="btn btn-success">Agregar</button>
	      	<button type="button" id="btnModificar" class="btn btn-success">Modificar</button>
	      	<button type="button" id="btnEliminar" class="btn btn-danger">Borrar</button>
	      	<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- Fin Modal -->
	<script>
		var NuevoEvento;
		$('#btnAgregar').click(function(){
			RecolectarDatosGUI();
			EnviarInformacion('agregar',NuevoEvento);
		});
		$('#btnEliminar').click(function(){
			RecolectarDatosGUI();
			EnviarInformacion('eliminar',NuevoEvento);
		});
		$('#btnModificar').click(function(){
			RecolectarDatosGUI();
			EnviarInformacion('modificar',NuevoEvento);
		});
		function RecolectarDatosGUI(){
			NuevoEvento={
				id:$('#txtId').val(),
				title:$('#txtTitulo').val(),
				start:$('#txtFechaI').val(),
				end:$('#txtFechaI').val(),
				descripcion:$('#txtDescripcion').val()
			};
		}
		function EnviarInformacion(accion,objEvento){
			$.ajax({
				type:'POST',
				url:'eventos.php?accion='+accion,
				data:objEvento,
				success:function(msg){
					if(msg){
						$('#CalendarioWeb').fullCalendar('refetchEvents');
						$("#ModalEventos").modal('toggle');
					}
				},
				error:function(){
					alert("hay un error");
				}
			});
		}

		//funcion para limpiar
		function limpiarFormulario(){
			$('#txtId').val('');
			$('#txtTitulo').val('');
			$('#txtDescripcion').val('');
		}
	</script>
</body>
</html>
