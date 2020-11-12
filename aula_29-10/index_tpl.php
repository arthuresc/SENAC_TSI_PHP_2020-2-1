<html>
	<?php
	include 'meta_html.php'
	?>
	<body>
		<br><br><br><br>
		<div class="mx-auto">
			<div class="bg-dark">
				<tr>
					<td>
						<form method="post" action="index.php">
							<br>
							<?php
							if ( isset($msg) ) echo $msg;
							?>
							<br>
							<br>
							<label for="login">Login</label>
							<input type="text" id="login" name="login">
							<br><br>
							<label for="senha">Senha</label>
							<input type="password" id="senha" name="senha">
							<br><br>
							<input type="submit" name="entrar" value="Entrar">
						</form>	
					</td>
				</tr>
			</div>
		</div>
	</body>
</html>