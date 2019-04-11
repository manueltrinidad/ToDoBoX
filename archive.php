<!DOCTYPE html>
<html>

<head>
	<title>ToDoBoX</title>
	<?php
	require "lib/templates/headerRender.php";
	?>
</head>

<body>
	<?php
	require "lib/openSession.php";
	require 'lib/postNotes.php';
	?>
	<a href="#" class="btn-flat btn-large waves-effect waves-light sidenav-trigger transparent" data-target="slide-out" id="menuButton">
		<i class="material-icons">menu</i>
	</a>

	<div class="container">
		<div class="row">
			<?php
			require_once 'lib/templates/archiveBoxRender.php';
			?>
		</div>
	</div>

	<?php
	require 'lib/templates/modalsRender.php';
	?>

	<!--JavaScript at end of body for optimized loading-->
	<script type="text/javascript" src="js/materialize.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
  <?php
  require "lib/toasts/archiveToasts.php";
  ?>
</body>

</html>