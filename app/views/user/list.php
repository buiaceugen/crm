<table cellpadding="2" cellspacing="0" border="1">
	<thead>
		<tr>
			<th>Utilizator</th>
			<th>Nume</th>
			<th>Prenume</th>
			<th>Email</th>
			<th>Editare</th>
			<th>Stergere</th>
		</tr>
	</thead>
	<?php foreach($vars['users'] as $user): ?>
	<tbody>
		<tr>
			<td><?php echo $user['userName']; ?></td>
			<td><?php echo $user['name']; ?></td>
			<td><?php echo $user['firstName']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><a
				href="index.php?c=user&amp;a=edit&amp;idUser=<?php echo $user['idUser']; ?>">Edit</a>
			</td>
			<td><a
				href="index.php?c=user&amp;a=delete&amp;idUser=<?php echo $user['idUser']; ?>">Sterge</a>
			</td>
		</tr>
	</tbody>	
	<?php endforeach; ?>	
</table>