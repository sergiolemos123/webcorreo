<fieldset>
					<legend class="naran">Inbox:
						<?php
							if(isset($_SESSION['email'])){
									echo $_SESSION['email'];
							}
						?>
					</legend>
						<form name="register" method="post" action="http://localhost/webcorreo/app/http/controllers/controller.php">
							<p>
								<input type="email" value="<?php echo $asunto_msg; ?>" readonly>
							</p>
							<p>
								<input type="text" value="<?php echo $dest_msg; ?>" readonly>
							</p>
							<p>
								<textarea rows="5" cols="100" readonly><?php echo $msg; ?></textarea>
							</p>
						</form>
					</fieldset>
© 2018 GitHub, Inc.