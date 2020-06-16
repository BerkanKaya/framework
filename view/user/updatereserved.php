<a class="" href="<?php echo URL ?>user/reserved"><- Terug</a>
<h1>Verander uw planning</h1>
<form name="updatereserved" method="post" action="<?php echo URL ?>user/updatereserve/<?php echo $id?>">
	<!-- bouw hier je formulier -->

        <label><b>Horse: </b></label>
        <select name="paarden">
          <?php foreach($horses as $info) {?>
            <option value="<?= $info['name'] ?>"><?= $info['name'] ?></option>
          <?php } ?>
        </select>

    <label><b>Begintijd</b></label>
    <select name="begintijd">
    <option selected>Begintijd</option>
    <option value="10:00">10:00</option> 
    <option value="11:00">11:00</option> 
    <option value="12:00">12:00</option> 
    <option value="13:00">13:00</option> 
    <option value="14:00">14:00</option> 
    <option value="15:00">15:00</option> 
    <option value="16:00">16:00</option>
    <option value="17:00">17:00</option> 
    </select>

    <label><b>Eindtijd</b></label>
    <select name="eindtijd">
    <option selected>Eindtijd</option>
    <option value="11:00">11:00</option> 
    <option value="12:00">12:00</option> 
    <option value="13:00">13:00</option> 
    <option value="14:00">14:00</option> 
    <option value="15:00">15:00</option> 
    <option value="16:00">16:00</option> 
    <option value="17:00">17:00</option>
    <option value="18:00">18:00</option> 
    </select>
	<input type="submit">

</form>
