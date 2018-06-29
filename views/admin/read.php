<?php 

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
				  		echo '<h2 class="title-h1">Bienvenid@: <i>', $_SESSION['usuario'] . '</i></h2>'; 
				  	}
				  	?>

		<div>
			<?php include('forms/form_rd.php'); ?>
		</div>
	</div>
</div>

<?php include ('templates/foot.php'); ?>