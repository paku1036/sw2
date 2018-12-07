<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Desaparecido </h3>
            </div>
			<?php echo form_open('desaparecido/edit/'.$desaparecido['idDes']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="fechaDes" class="control-label">FechaDes</label>
						<div class="form-group">
							<input type="text" name="fechaDes" value="<?php echo ($this->input->post('fechaDes') ? $this->input->post('fechaDes') : $desaparecido['fechaDes']); ?>" class="has-datepicker form-control" id="fechaDes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="edadDes" class="control-label">EdadDes</label>
						<div class="form-group">
							<input type="text" name="edadDes" value="<?php echo ($this->input->post('edadDes') ? $this->input->post('edadDes') : $desaparecido['edadDes']); ?>" class="form-control" id="edadDes" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="lugarDes" class="control-label">LugarDes</label>
						<div class="form-group">
							<textarea name="lugarDes" class="form-control" id="lugarDes"><?php echo ($this->input->post('lugarDes') ? $this->input->post('lugarDes') : $desaparecido['lugarDes']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vestimentaDes" class="control-label">VestimentaDes</label>
						<div class="form-group">
							<textarea name="vestimentaDes" class="form-control" id="vestimentaDes"><?php echo ($this->input->post('vestimentaDes') ? $this->input->post('vestimentaDes') : $desaparecido['vestimentaDes']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Guardar
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>