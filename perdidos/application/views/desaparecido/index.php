<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Lista de Desaparecidos</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('desaparecido/add'); ?>" class="btn btn-success btn-sm">Agregar</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Fecha Desap.</th>
						<th>Edad</th>
						<th>Lugar</th>
						<th>Vestimenta</th>
						<th>Acciones</th>
                    </tr>
                    <?php foreach($desaparecidos as $d){ ?>
                    <tr>
						<td><?php echo $d['idDes']; ?></td>
						<td><?php echo $d['fechaDes']; ?></td>
						<td><?php echo $d['edadDes']; ?></td>
						<td><?php echo $d['lugarDes']; ?></td>
						<td><?php echo $d['vestimentaDes']; ?></td>
						<td>
                            <a href="<?php echo site_url('desaparecido/edit/'.$d['idDes']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editar</a> 
                            <a href="<?php echo site_url('desaparecido/remove/'.$d['idDes']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Eliminar</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
