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
						<option value="Actualización Tributaria">Actualización Tributaria</option>
						<option value="Gestión del Riesgo Operativo y Continuidad del Negocio">Gestión del Riesgo Operativo y Continuidad del Negocio</option>
						<option value="Estrategias de Marketing y Canales Digitales">Estrategias de Marketing y Canales Digitales</option>
						<option value="Gestión Inmobiliaria">Gestión Inmobiliaria</option>
						<option value="Gerencia Financiera">Gerencia Financiera</option>
						<option value="Finanzas para No Financieros">Finanzas para No Financieros</option>
						<option value="Administración del Riesgo y Auditoría Forense">Administración del Riesgo y Auditoría Forense</option>
						<option value="Gestión del Marketing Estratégico">Gestión del Marketing Estratégico</option>
						<option value="Gerencia Comercial Estratégica">Gerencia Comercial Estratégica</option>
						<option value="Habilidades de Liderazgo y Dirección">Habilidades de Liderazgo y Dirección</option>
						<option value="Gerencia de Proyectos">Gerencia de Proyectos</option>
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