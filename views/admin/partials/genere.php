<?php
if(isset($_SESSION['genero'])){

					$genre = $_SESSION['genero'];

					if ($genre == 'hombre') {
						echo '<img src="http://localhost/webcorreo/public/images/user1.png" class="img-email">';
					}elseif($genre == 'mujer'){
						echo '<img src="http://localhost/webcorreo/public/images/user2.png" class="img-email">';
					}
				}

?>