<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Reconocimiento</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('reconocimiento/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdRec</th>
						<th>DESAPARECIDOSidDes</th>
						<th>Imagen</th>
						<th>Patron</th>
						<th>Json</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($reconocimiento as $r){ ?>
                    <tr>
						<td><?php echo $r['idRec']; ?></td>
						<td><?php echo $r['DESAPARECIDOSidDes']; ?></td>
						<td><?php echo $r['imagen']; ?></td>
						<td><?php echo $r['patron']; ?></td>
						<td><?php echo $r['json']; ?></td>
						<td>
                            <a href="<?php echo site_url('reconocimiento/edit/'.$r['idRec']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('reconocimiento/remove/'.$r['idRec']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
