<?php
	include 'html/overall/header.php';
?>
<body>
	<?php
	include'html/overall/nav-user.php';
	require 'core/model/usuario.php';
	$usuario = new Usuario();
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h1 align="center">Perfil</h1>
				<div class="img-profile"></div>
				<div class="inf">
				<?php
					include 'html/user/inf.php';
				?>
				</div>
			</div>
			<div class="col-md-4">
			</div>
		</div>
	</div>
	</section>
</body>
	<?php
	include'html/overall/scripts.php';
	?>
</html>