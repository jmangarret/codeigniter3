
<h3 class="text-center">
	<a href='<?php echo site_url() ?>/usercrud'><i class="glyphicon glyphicon-user"></i> REGISTRO DE USUARIOS</a>
	<a href='<?php echo site_url() ?>/usercrud/list'><i class="glyphicon glyphicon-user"></i> LISTADO DE USUARIOS</a>
</h3>

<form action="save" name="form1" id="form1" method="post">
	<div class="tab-pane active" id="paso1" role="tabpanel">    
	    <div class="form-group col-xs-12 col-sm-12">
	        <label for="first_name">Nombre * :</label>
	        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Nombre completo" required="required" autocomplete="off">
	    </div>	    
	    <div class="form-group col-xs-12 col-sm-12">
	        <label for="last_name">Apellido * :</label>
	        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Apellido completo" required="required" autocomplete="off">
	    </div>
	    <div class="form-group col-xs-12 col-sm-12">
	        <label for="email">Email * : </label>
	        <input type="email" class="form-control" id="email" name="email" placeholder="Correo eletronico xxxxx@dominio.com" required="required" autocomplete="off">
	    </div>
	   	<div class="form-group col-xs-12 col-sm-12">
	        <label for="gender">Género * : </label>
	        <select class="form-control" id="gender" name="gender" required="required" >
	        	<option value="">--Seleccione--</option>
	        	<option value="M">Masculino</option>
	        	<option value="F">Femenino</option>
	        </select>
	    </div>
	   	<div class="form-group col-xs-12 col-sm-12">
	        <label for="telephone">Teléfono:</label>
	        <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Num. de Telf." autocomplete="off">
	    </div>
	   	<div class="form-group col-xs-12 col-sm-12">
	        <label for="age">Edad * :</label>
	        <input type="number" class="form-control" id="age" name="age" placeholder="Edad" required="required" autocomplete="off">
	    </div>
	    <div class="col-xs-12 col-sm-12 text-center">
	        <input type="submit" 	class="btn btn-primary" value="Guardar" 	id="guardar">
	        <input type="reset" 	class="btn btn-danger" 	value="Cancelar" 	id="cancelar">
	        <input type="hidden" 	name="id" 				value="" 			id ="edit_id">
	    </div>    	    
	</div>
</form>
<?php
if (isset($action) && $action=='edit'){
	?>
	<script type="text/javascript">
		var nombre 	= '<?php echo $data->first_name ?>';
		var apellido= '<?php echo $data->last_name ?>';
		var email 	= '<?php echo $data->email ?>';
		var genero 	= '<?php echo $data->gender ?>';
		var telef 	= '<?php echo $data->telephone ?>';
		var edad 	= '<?php echo $data->age ?>';
		var id 		= '<?php echo $data->id ?>';
		$('#first_name').val(nombre);
		$('#last_name').val(apellido);
		$('#email').val(email);
		$('#gender').val(genero);
		$('#telephone').val(telef);
		$('#age').val(edad);
		$('#edit_id').val(id);
		$('#guardar').attr('value','Actualizar');
		$('#form1').attr('action', '<?php echo site_url() ?>/usercrud/save/'+id);
	</script>
	<?php
}

?>
