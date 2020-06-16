<a class="" href="<?php echo URL ?>user/users"><- Terug</a>
<h1>Voeg een paard toe</h1>
<form name="create" method="post" action="<?php echo URL ?>user/updategebruiker/<?php echo $id ?>">
	<!-- bouw hier je formulier -->

	<input type="text" name="username" placeholder="username">
    <input type="text" name="gmail" placeholder="gmail">
    <input type="text" name="adres" placeholder="adres">
	<input type="text" name="telefoonnummer" placeholder="telefoonnummer">
	<input type="submit">

</form>
