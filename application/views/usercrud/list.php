<h3 class="text-center">
	<a href='<?php echo site_url() ?>/usercrud'><i class="glyphicon glyphicon-user"></i> REGISTRO DE USUARIOS</a>
	<a href='<?php echo site_url() ?>/usercrud/list'><i class="glyphicon glyphicon-user"></i> LISTADO DE USUARIOS</a>
</h3>
<table id="table_users" class="table table-bordered table-hover" cellspacing="0" width="100%">
<thead>
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>APELLIDO</th>
        <th>EMAIL</th>
        <th>GENERO</th>
        <th>TELEFONO</th>
        <th>EDAD</th>
        <th>ACCION</th>
    </tr>
</thead>
<tbody>
	<?php
	foreach ($data as $key => $value) {
    	?>
    	<tr>
    		<td><?php echo $value->id;?></td>
    		<td><?php echo $value->first_name;?></td>
    		<td><?php echo $value->last_name;?></td>
    		<td><?php echo $value->email;?></td>
    		<td><?php echo ($value->gender=='M' ? 'Masculino' : 'Femenino');?></td>
    		<td><?php echo $value->telephone;?></td>
    		<td><?php echo $value->age;?></td>
    		<td align="text-center">
				<a href="#" class="edit" 	data-id="<?php echo $value->id;?>"><i class="glyphicon glyphicon-edit"></i></a> | 
				<a href="#" class="delete" data-id="<?php echo $value->id;?>"><i class="glyphicon glyphicon-trash"></i></a>
    		</td>
    	</tr>
    	<?php
	}
	?>
</tbody>
</table>
<div class="col-xs-12 col-sm-12 text-center">
    <input type="button" class="btn btn-primary" value="Nuevo registro" id="add_new">
</div>

<script type="text/javascript">
	$('#add_new').click(function(){
		location.href = 'index';
	});

	$('.edit').click(function(e){
		e.preventDefault();
		location.href = 'edit/'+$(this).attr('data-id');
	});

	$('.delete').click(function(e){
		e.preventDefault();
		if (confirm('Seguro desea eliminar este registro?')){
			location.href = 'delete/'+$(this).attr('data-id');
		}
	});

</script>