<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Huella Edit</h3>
            </div>
			<?php echo form_open('huella/edit/'.$huella['idHuella']); ?>
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
									$selected = ($desaparecido['idDes'] == $huella['DESAPARECIDOSidDes']) ? ' selected="selected"' : "";

									echo '<option value="'.$desaparecido['idDes'].'" '.$selected.'>'.$desaparecido['idDes'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="imagen" class="control-label">Imagen</label>
						<div class="form-group">
							<textarea name="imagen" class="form-control" id="imagen"><?php echo ($this->input->post('imagen') ? $this->input->post('imagen') : $huella['imagen']); ?></textarea>
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