<form action = "save.php?fid=<?= $fid ?>" method = "post" id = "email_form">
	<fieldset>
		<label>Votre email : <input type = "text" name = "email" /></label>
		<input type = "submit" value = "Valider" />
	</fieldset>
</form>

<?php foreach($flashes as $f): ?>
	<div id = "notice"><?= $f ?></div>
<?php endforeach; ?>