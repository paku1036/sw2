<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Tutorium Add</h3>
            </div>
            <?php echo form_open('tutorium/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="PERSONAidPersona" class="control-label">Persona</label>
						<div class="form-group">
							<select name="PERSONAidPersona" class="form-control">
								<option value="">select persona</option>
								<?php 
								foreach($all_persona as $persona)
								{
									$selected = ($persona['idPersona'] == $this->input->post('PERSONAidPersona')) ? ' selected="selected"' : "";

									echo '<option value="'.$persona['idPersona'].'" '.$selected.'>'.$persona['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
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
						<label for="parentesco" class="control-label">Parentesco</label>
						<div class="form-group">
							<textarea name="parentesco" class="form-control" id="parentesco"><?php echo $this->input->post('parentesco'); ?></textarea>
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