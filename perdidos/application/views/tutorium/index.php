<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tutoria Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('tutorium/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTutoria</th>
						<th>PERSONAidPersona</th>
						<th>DESAPARECIDOSidDes</th>
						<th>Parentesco</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($tutoria as $t){ ?>
                    <tr>
						<td><?php echo $t['idTutoria']; ?></td>
						<td><?php echo $t['PERSONAidPersona']; ?></td>
						<td><?php echo $t['DESAPARECIDOSidDes']; ?></td>
						<td><?php echo $t['parentesco']; ?></td>
						<td>
                            <a href="<?php echo site_url('tutorium/edit/'.$t['idTutoria']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('tutorium/remove/'.$t['idTutoria']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
