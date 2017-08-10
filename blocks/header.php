<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">INSCRÍBETE</h4>
			</div>
			<div class="modal-body">
				<form name="contacto" id="contacto2" novalidate>
					<div class="form-inputs-groups">
						<div class="form-group">
							<input type="hidden" name="campaignId" value="<?php echo $campaignId ?>">
							<input type="text" class="form-control" name="nombre" placeholder="Nombre completo" required/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="telefono" placeholder="Teléfono" required/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="correo" placeholder="Email" required/>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="programa" id="programa" readonly="readonly"/>
						</div>
						<div class="form-group-big">
							<label for="terminos">
								<input type="checkbox" name="terminos" checked required> 
								<a href="http://www.javeriana.edu.co/documentos/tratamiento_datos_personales.pdf" target="blank">Autorizo ser contactado por teléfono y correo electrónico, y seguir recibiendo información académica por parte de la Universidad</a>
							</label>
						</div>
						<div>
							<input type="hidden" name="partnerId" value="<?php echo $partnerId ?>">
							<input type="hidden" name="type" value="<?php echo $type ?>">
						</div>
						<div class="form-group-big">
							<button type="submit" class="btn btn-sub center-block">ENVIAR</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>