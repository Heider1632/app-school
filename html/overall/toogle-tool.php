<div id="tool" class="tool">
<h4 align="center">Herramientas</h4>
<hr>
<a id="nav-toggle-btn"><i class="material-icons">calendar_view_day</i></a>
<?php if($_SESSION['cargo'] == 1): ?>
<hr>
<a href="<?php echo $_GET['view'] = '?view=config'; ?>"><i class="material-icons">explore</i></a>
<?php endif; ?>
</div>
