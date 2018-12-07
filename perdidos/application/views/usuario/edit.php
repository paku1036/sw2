<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Editar Usuario </h3>
            </div>
			<?php echo form_open('usuario/edit/'.$usuario['idUsuario']); ?>
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
									$selected = ($persona['idPersona'] == $usuario['PERSONAidPersona']) ? ' selected="selected"' : "";

									echo '<option value="'.$persona['idPersona'].'" '.$selected.'>'.$persona['nombre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user" class="control-label">User</label>
						<div class="form-group">
							<textarea name="user" class="form-control" id="user"><?php echo ($this->input->post('user') ? $this->input->post('user') : $usuario['user']); ?></textarea>
						</div>
					</div>
					<div class="col-md-6">
						<label for="pass" class="control-label">Pass</label>
						<div class="form-group">
							<textarea name="pass" class="form-control" id="pass"><?php echo ($this->input->post('pass') ? $this->input->post('pass') : $usuario['pass']); ?></textarea>
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