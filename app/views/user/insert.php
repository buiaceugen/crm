<h1>Utilizator nou</h1>

<div class="input_field">
	<form name="insertUser" action="<?php echo $_SERVER['REQUEST_URI']; ?>"
		method="post">
		<table>

			<tr>
				<td><label for="User['userName']">Utilizator</label></td>
				<td><input type="text" name="User[userName]" id="User[userName]"
					value="<?php echo $_POST['User']['userName'] ?>" /></td>
			</tr>

			<tr>
				<td><label for="User['firstName']">Prenume</label></td>
				<td><input type="text" name="User[firstName]" id="User[firstName]"
					value="<?php echo $_POST['User']['firstName'] ?>" /></td>
			</tr>

			<tr>
				<td><label for="User['name']">Nume</label></td>
				<td><input type="text" name="User[name]" id="User[name]"
					value="<?php echo $_POST['User']['name'] ?>" /></td>
			</tr>

			<tr>
				<td><label for="User['email']">Email</label></td>
				<td><input type="email" name="User[email]" id="User[email]"
					value="<?php echo $_POST['User']['email'] ?>" /></td>
			</tr>


			<tr>
				<td><label for="User['password']">Parola</label></td>
				<td><input type="password" name="User[password]" id="User[password]"
					value="<?php echo $_POST['User']['password'] ?>" /></td>
			</tr>

			<tr>

				<td><input type="submit" value=" Submit " name="Insert" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</form>
</div>