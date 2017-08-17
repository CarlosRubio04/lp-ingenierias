<div class="form-wrapper">
	<div class="form-content">
		<form name="contacto" id="contacto" novalidate>
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
					<select name="programa" id="programa" class="form-control" required>
						<option value="">Programa</option>
						<option value="Excel y Access para el análisis de información y la generación de reportes efectivos">Excel y Access para el análisis de información y la generación de reportes efectivos</option>
						<option value="Minería de Datos">Minería de Datos</option>
						<option value="BPM (Business Process Management)">BPM (Business Process Management)</option>
						<option value="Inteligencia de Negocios">Inteligencia de Negocios</option>
						<option value="Sistemas Integrados de Gestión HSEQ">Sistemas Integrados de Gestión HSEQ</option>
						<option value="Arquitectura Interior">Arquitectura Interior</option>
						<option value="Virtual - Compensaciones por pérdida de biodiversidad">Virtual - Compensaciones por pérdida de biodiversidad</option>
						<option value="Diseño y montaje de vitrinas">Diseño y montaje de vitrinas</option>
						<option value="ITIL - Gestión de Tecnología Informática">ITIL - Gestión de Tecnología Informática</option>
						<option value="Revit Architecture">Revit Architecture</option>
						<option value="Virtual - Teórico práctico en Derecho Ambiental">Virtual - Teórico práctico en Derecho Ambiental</option>
						<option value="Turismo de naturaleza responsable">Turismo de naturaleza responsable</option>
					</select>
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