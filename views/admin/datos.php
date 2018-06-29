<?php 
if (isset($_GET['datos'])){
	
	session_start();

}


include ('templates/head.php');

if(isset($_GET['error'])){
	include ('errors/errors.php');
}
?>

<div class="container spacing-top">
	<div class="row">
		<div class="col-4 bg-dark">


			<center>
				
				<figure>
					
						<?php include('partials/genere.php') ?> 
					
				</figure>

			</center>

		</div>
		<div class="col-8 bg-dark">

				<?php
				  	if (isset($_SESSION['usuario'])){
				  		echo '<h4 class="title-h1"><span class="naran">Nombre De usuario:</span> <i>',$_SESSION['usuario'] . '</i></h4>'; 
				  		echo '<h4 class="title-h1"><span class="naran">correo:</span> <i>', $_SESSION['email'] . '</i></h4>';
				  		echo '<h4 class="title-h1"><span class="naran">Genero: </span><i>', $_SESSION['genero'] . '</i></h4>';
				  	}
				  	?>

		</div>

<?php include ('templates/foot.php'); ?>