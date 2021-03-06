<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Persona </h3>
            </div>
			<?php echo form_open('persona/edit/'.$persona['idPersona']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="CI" class="control-label">CI</label>
						<div class="form-group">
							<input type="text" name="CI" value="<?php echo ($this->input->post('CI') ? $this->input->post('CI') : $persona['CI']); ?>" class="form-control" id="CI" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telefono" class="control-label">Telefono</label>
						<div class="form-group">
							<input type="text" name="telefono" value="<?php echo ($this->input->post('telefono') ? $this->input->post('telefono') : $persona['telefono']); ?>" class="form-control" id="telefono" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nombre" class="control-label">Nombre</label>
						<div class="form-group">
							<textarea name="nombre" class="form-control" id="nombre"><?php echo ($this->input->post('nombre') ? $this->input->post('nombre') : $persona['nombre']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="direccion" class="control-label">Direccion</label>
						<div class="form-group">
							<textarea name="direccion" class="form-control" id="direccion"><?php echo ($this->input->post('direccion') ? $this->input->post('direccion') : $persona['direccion']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="correo" class="control-label">Correo</label>
						<div class="form-group">
							<textarea name="correo" class="form-control" id="correo"><?php echo ($this->input->post('correo') ? $this->input->post('correo') : $persona['correo']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sexo" class="control-label">Sexo</label>
						<div class="form-group">
							<textarea name="sexo" class="form-control" id="sexo"><?php echo ($this->input->post('sexo') ? $this->input->post('sexo') : $persona['sexo']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="fechaNac" class="control-label">FechaNac</label>
						<div class="form-group">
							<textarea name="fechaNac" class="form-control" id="fechaNac"><?php echo ($this->input->post('fechaNac') ? $this->input->post('fechaNac') : $persona['fechaNac']); ?></textarea>
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