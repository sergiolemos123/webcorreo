<fieldset>
					<legend class="naran ">Mensaje recibido..</legend>
						<form name="register" method="post" action="http://localhost/webcorreo/app/http/controllers/controller.php">
							<p>
								<label  class=" naran ">Asunto: </label><input type="submit" name="btn-read" value="<?php echo $asunto_msg; ?>" class="btn-read">
							</p>
							<p>
								<!-- Envio de datos ocultos -->
				
								<input type="hidden" name="dest_msg" value="<?php echo $dest_msg; ?>">
								<input type="hidden" name="asunto_msg" value="<?php echo $asunto_msg; ?>">
								<input type="hidden" name="msg" value="<?php echo $msg; ?>">
							</p>
						</form>
					</fieldset>