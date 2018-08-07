<?php
	include 'html/overall/header.php';
?>
<body>
	<?php
	include'html/overall/nav-user.php';
	require 'core/model/usuario.php';
	$usuario = new Usuario();
	?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<?php
				include 'html/user/director.php';
				?>
			</div>
		</div>
	</div>
	</section>
</body>
	<?php
	include'html/overall/footer.html';
	include'html/overall/scripts.php';
	?>
</html>