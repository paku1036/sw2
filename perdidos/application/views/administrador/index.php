<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Administradores</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('administrador/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdAdmin</th>
						<th>idPersona</th>
						<th>Admin</th>
						<th>Pass</th>
						<th>Acciones</th>
                    </tr>
                    <?php foreach($administrador as $a){ ?>
                    <tr>
						<td><?php echo $a['idAdmin']; ?></td>
						<td><?php echo $a['PERSONAidPersona']; ?></td>
						<td><?php echo $a['admin']; ?></td>
						<td><?php echo $a['pass']; ?></td>
						<td>
                            <a href="<?php echo site_url('administrador/edit/'.$a['idAdmin']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('administrador/remove/'.$a['idAdmin']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
