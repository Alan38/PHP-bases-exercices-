<?php
	require 'Formulaire.php';
	$form = new Formulaire();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="">
	</head>

	<body>
		<form action="" method="POST">
			<input id="genderChoice1" type="radio" name="gender" placeholder="E-mail">
			<label for="genderChoice1">Homme</label>

			<input id="genderChoice2" type="radio" name="gender" placeholder="E-mail" >
			<label for="genderChoice2">Femme</label><br/><br/>

			<label for="email">E-mail</label>
			<input id="email" type="text" name="email" placeholder="E-mail" required><br/><br/>

			<label for="tel">Tel</label>
			<input id="tel" type="tel" name="tel" placeholder="N° téléphone" required><br/><br/>

			<label for="password">Mot de Passe</label>
			<input id="password" type="password" name="password" placeholder="Mot de passe" required><br/><br/>

			<?php
				// J'INVOQUE LE SELECT COUNTRY !! //
				echo '<label for="country">Pays </label>';
				$form->select('country', array('', 'France', 'Blegique', 'Allemagne', 'Pologne'), '', 'country');
			?>

			<label for="check">Recevoir la newletter ?</label>
			<input id="check" name="newsletter" type="checkbox"><br/><br/>
			
			<input type="submit" name="submit" value="Envoyer">
		</form>
	</body>
</html>