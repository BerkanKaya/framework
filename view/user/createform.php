<a class="" href="home"><- Terug</a>
<h1>Voeg een paard toe</h1>
<form name="create" method="post" action="<?php echo URL?>user/store">
	<!-- bouw hier je formulier -->

	<label><b>Begintijd</b></label>
    <select name="image">
    <option selected>Image</option>
    <option value="amerigo.jpg">amerigo.jpg</option> 
    <option value="big_ben.jpg">big_ben.jpg</option> 
	<option value="brego.jpg">brego.jpg</option>
	<option value="troje.jpg">troje.jpg</option>  
    </select>

	<input type="text" name="name" placeholder="name">
    <input type="text" name="age" placeholder="age">
    <input type="text" name="ras" placeholder="ras">
	<input type="text" name="lengte" placeholder="lengte">
    <input type="text" name="schofthoogte" placeholder="schofthoogte">
    <input type="text" name="description" placeholder="description">
	<input type="text" name="ponypaard" placeholder="pony/paard">
	<input type="submit">

</form>
