<?php
function main($action,$param){
	if($action=="")
		$fcn="inicio";
	else
		$fcn=$action;

	$fcn($param);

}
function inicio($param){
	global $CFG;
	?>
	<div id="contenido">
		<div id="forma">
			<label for="txtNombre">Nombre</label>
			<input type="text" name="txtNombre" id="txtNombre" placeholder="Nombre">
			<br>
			<label for="txtTelefono">Teléfono</label>
			<input type="text" name="txtTelefono" id="txtTelefono" placeholder="Teléfono">
			<br>
			<label for="txtEmail">E-Mail</label>
			<input type="text" name="txtEmail" id="txtEmail" placeholder="E-Mail">
			<br>
			<label for="">Ingresa el código que ves en la imagen</label>
			<br>
			<img src="<?=$CFG->wwwroot?>/vendors/captcha/captcha.php" alt="" class="captchaImg">
			<input type="text" name="txtCode" id="txtCode" placeholder="Captcha">
			<br>
			<label for="txtComentarios"></label>
			<textarea name="txtComentarios" id="txtComentarios" placeholder="comentarios"></textarea>
			<br>
			<!-- Usar es para español y en para inglés-->
			<img src="" alt="" class="sendBtn button" onclick="enviar('es')">
		</div>
	</div>
	<?php
}
?>
