<?php session_start(); ?>
<!doctype html>
<?php include('header.html');?>
	<body>
		<?php include('menu.html'); ?>

		<div id="bg">
			<div class="main-container" id="home">
				<div class="main wrapper clearfix">
					<img src="img/logo.png" alt="Associação Educacional Sírius-Gaia" />
					<p>Seja Bem vindo a</p>
					<h1 class="title">Associação Educacional Sírius-Gaia</h1>
					<a href="aesg.php" title="Conheça a AESG" class="button">Conheça a AESG</a>
				</div><!-- #main -->
			</div> <!-- #main-container -->
	
			<span class="div"></span>
			<?php include('aesg.html');?>
	
			<span class="div"></span>
			<?php include('eventos.html');?>
	
			<span class="div"></span>
			<?php include('contato.php');?>
		</div>

		<?php include("footer.html");?>

	</body>
</html>
