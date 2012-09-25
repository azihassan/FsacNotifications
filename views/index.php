<h3>Fili�res</h3>

<?php foreach($flashes as $f): ?>
	<div id = "notice"><?= $f ?></div>
<?php endforeach; ?>

<table class = "datatable">
	<tr>
		<th>Cycle</th>
		<th>Nom de la fili�re</th>
		<th>Etat des r�sultats</th>
		<th>Actions</th>
	</tr>
	
	<?php foreach($filieres as $f): ?>
		<tr>
			<td><?= $f['niveau'] ?></td>
			<td><?= $f['filiere'] ?></td>
			<td><?= $f['statut'] ?></td>
			<td>
				<?php if($f['statut'] == 'Disponibles'): ?>
					<a href = "<?= $f['url'] ?>">T�l�charger</a>
				<?php else: ?>
					<a href = "save.php?fid=<?= $f['id'] ?>">M'informer d�s qu'ils seront publi�s</a>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>