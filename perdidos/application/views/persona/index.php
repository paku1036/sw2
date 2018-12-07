<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Persona</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('persona/add'); ?>" class="btn btn-success btn-sm">Nuevo </a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdPersona</th>
						<th>CI</th>
						<th>Telefono</th>
						<th>Nombre</th>
						<th>Direccion</th>
						<th>Correo</th>
						<th>Sexo</th>
						<th>FechaNac</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($persona as $p){ ?>
                    <tr>
						<td><?php echo $p['idPersona']; ?></td>
						<td><?php echo $p['CI']; ?></td>
						<td><?php echo $p['telefono']; ?></td>
						<td><?php echo $p['nombre']; ?></td>
						<td><?php echo $p['direccion']; ?></td>
						<td><?php echo $p['correo']; ?></td>
						<td><?php echo $p['sexo']; ?></td>
						<td><?php echo $p['fechaNac']; ?></td>
						<td>
                            <a href="<?php echo site_url('persona/edit/'.$p['idPersona']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('persona/remove/'.$p['idPersona']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
