<!DOCTYPE html>
<html lang="en">
<head>
	<?= $page["meta"]; ?>
	<?= $page["css"]; ?>
</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<?= $page["navbar"]; ?>
	<?= $content; ?>
	<?= $page["footer"]; ?>
</body>
<?= $page["js"]; ?>
</html>