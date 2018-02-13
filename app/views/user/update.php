<h1>Update utilziator</h1>       
        <form name="updateUser" action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
	<table>
		
		<tr>
			<td><label for="User['firstName']">Prenume</label></td>
			<td><input type="text" name="User[firstName]" id="User[firstName]" value="<?php echo isset($_POST['User']['firstName'])? $_POST['User']['firstName']:$vars['user']['firstName']; ?>" /></td>
		</tr>
		
				<tr>
			<td><label for="User['name']">Nume</label></td>
			<td><input type="text" name="User[name]" id="User[name]" value="<?php echo isset($_POST['User']['name'])? $_POST['User']['name']:$vars['user']['name']; ?>" /></td>
		</tr>
		
		<tr>
			<td><label for="User['email']">Email</label></td>
			<td><input type="email" name="User[email]" id="User[email]" value="<?php echo isset($_POST['User']['email'])? $_POST['User']['email']:$vars['user']['email']; ?>" /></td>
		</tr>
		<tr>
			<td><input type="submit" name="User[saveUser]" value="Update" /></td>
			<td>&nbsp;</td>
		</tr>
	</table>	
</form>