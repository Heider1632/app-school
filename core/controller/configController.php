<?php
	include 'html/overall/header.php';
?>
<body>
	<?php
	include'html/overall/nav-admin.php';
	require 'core/model/admin.php';
	$admin = new Admin();
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			<?php
			include 'html/admin/config.php';
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