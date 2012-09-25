<h3>Filières</h3>

<?php foreach($flashes as $f): ?>
	<div id = "notice"><?= $f ?></div>
<?php endforeach; ?>

<table class = "datatable">
	<tr>
		<th>Cycle</th>
		<th>Nom de la filière</th>
		<th>Etat des résultats</th>
		<th>Actions</th>
	</tr>
	
	<?php foreach($filieres as $f): ?>
		<tr>
			<td><?= $f['niveau'] ?></td>
			<td><?= $f['filiere'] ?></td>
			<td><?= $f['statut'] ?></td>
			<td>
				<?php if($f['statut'] == 'Disponibles'): ?>
					<a href = "<?= $f['url'] ?>">Télécharger</a>
				<?php else: ?>
					<a href = "save.php?fid=<?= $f['id'] ?>">M'informer dès qu'ils seront publiés</a>
				<?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
</table>