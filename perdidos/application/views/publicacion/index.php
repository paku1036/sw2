<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Publicacion Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('publicacion/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdPubli</th>
						<th>DESAPARECIDOSidDes</th>
						<th>USUARIOidUsuario</th>
						<th>Fecha</th>
						<th>Celular</th>
						<th>Estado</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($publicacion as $p){ ?>
                    <tr>
						<td><?php echo $p['idPubli']; ?></td>
						<td><?php echo $p['DESAPARECIDOSidDes']; ?></td>
						<td><?php echo $p['USUARIOidUsuario']; ?></td>
						<td><?php echo $p['fecha']; ?></td>
						<td><?php echo $p['celular']; ?></td>
						<td><?php echo $p['estado']; ?></td>
						<td>
                            <a href="<?php echo site_url('publicacion/edit/'.$p['idPubli']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('publicacion/remove/'.$p['idPubli']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
