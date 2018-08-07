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
			<div id="central-div" class="col-md-11">
			<?php
				include 'html/admin/admin.php';
			?>
			</div>
			<div id="toogle-calendar" class="col-md-1">
				<?php
					include 'html/overall/toogle-tool.php';
					include 'html/overall/calendar.php'; 
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