<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Huellas Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('huella/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdHuella</th>
						<th>DESAPARECIDOSidDes</th>
						<th>Imagen</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($huellas as $h){ ?>
                    <tr>
						<td><?php echo $h['idHuella']; ?></td>
						<td><?php echo $h['DESAPARECIDOSidDes']; ?></td>
						<td><?php echo $h['imagen']; ?></td>
						<td>
                            <a href="<?php echo site_url('huella/edit/'.$h['idHuella']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('huella/remove/'.$h['idHuella']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
