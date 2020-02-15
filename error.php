<?php require 'admin/config.php'; ?>
<?php require 'views/header.php'; ?>
<?php require_once 'functions.php'?>
<?php session_start();?>
<div class="contenedor">
	<div class="post">
		<article>
			<h2 class="titulo">Error</h2>
			<br>
			<?php if(isset($_SESSION["nopost"])) :?>
				<p class="extracto"><?php echo $_SESSION["nopost"];?></p>
			<?php endif ;?>
			<br>
			<form action="<?php echo RUTA; ?>admin" method="post">
				<button>Crear Post</button>
			</form>
		</article>
	</div>
</div>

<?php require 'views/footer.php'; ?>