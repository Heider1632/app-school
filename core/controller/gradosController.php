<?php
	include 'html/overall/header.php';
?>
<body>
	<?php
	include'html/overall/nav-admin.php';
	require 'core/model/admin.php';
	$admin = new Admin();
	?>
	<div class="container-fluid">
		<div class="row">
			<?php
				include 'html/admin/grados.php';
			?>
		</div>
	</div>
	</section>
</body>
	<?php
	include'html/overall/footer.html';
	include'html/overall/scripts.php';
	?>
</html>