<h1>Aceasta este: <?php echo $vars['contact'] ?></h1>
<div class="input_field">
<form action="" method="POST">
<label>Nume:</label> <input type="text" name="name" maxlength="30" value="" />
<label>Prenume:</label> <input type="text" name="firstName" maxlength="30" value="" />
<label>Utilizator:</label> <input type="text" name="userName" maxlength="30" value="" />
<label>Adresa email:</label> <input type="text" name="email" maxlength="30" value="" />
<label>Subiect:</label>  <textarea name="message" rows="10" cols="30">
TST
</textarea>
<input type="submit" name="submit" value="Trimite mesaj" />
</form>
</div>