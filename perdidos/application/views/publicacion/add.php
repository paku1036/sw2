<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Publicacion Add</h3>
            </div>
            <?php echo form_open('publicacion/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="DESAPARECIDOSidDes" class="control-label">Desaparecido</label>
						<div class="form-group">
							<select name="DESAPARECIDOSidDes" class="form-control">
								<option value="">select desaparecido</option>
								<?php 
								foreach($all_desaparecidos as $desaparecido)
								{
									$selected = ($desaparecido['idDes'] == $this->input->post('DESAPARECIDOSidDes')) ? ' selected="selected"' : "";

									echo '<option value="'.$desaparecido['idDes'].'" '.$selected.'>'.$desaparecido['idDes'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="USUARIOidUsuario" class="control-label">Usuario</label>
						<div class="form-group">
							<select name="USUARIOidUsuario" class="form-control">
								<option value="">select usuario</option>
								<?php 
								foreach($all_usuario as $usuario)
								{
									$selected = ($usuario['idUsuario'] == $this->input->post('USUARIOidUsuario')) ? ' selected="selected"' : "";

									echo '<option value="'.$usuario['idUsuario'].'" '.$selected.'>'.$usuario['PERSONAidPersona'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fecha" class="control-label">Fecha</label>
						<div class="form-group">
							<input type="text" name="fecha" value="<?php echo $this->input->post('fecha'); ?>" class="has-datepicker form-control" id="fecha" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="celular" class="control-label">Celular</label>
						<div class="form-group">
							<input type="text" name="celular" value="<?php echo $this->input->post('celular'); ?>" class="form-control" id="celular" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="estado" class="control-label">Estado</label>
						<div class="form-group">
							<textarea name="estado" class="form-control" id="estado"><?php echo $this->input->post('estado'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>