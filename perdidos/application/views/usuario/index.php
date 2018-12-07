<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Usuario </h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('usuario/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdUsuario</th>
						<th>PERSONAidPersona</th>
						<th>User</th>
						<th>Pass</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($usuario as $u){ ?>
                    <tr>
						<td><?php echo $u['idUsuario']; ?></td>
						<td><?php echo $u['PERSONAidPersona']; ?></td>
						<td><?php echo $u['user']; ?></td>
						<td><?php echo $u['pass']; ?></td>
						<td>
                            <a href="<?php echo site_url('usuario/edit/'.$u['idUsuario']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('usuario/remove/'.$u['idUsuario']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
