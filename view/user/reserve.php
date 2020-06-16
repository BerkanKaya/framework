                <a class="nav-link text-white" href="<?php echo URL ?>user/inlog">Log out <-</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/home">Horses</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/users">Users</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/reserved">All reserved horses</a>
            </li>
        </ul>
    </div>
</nav>

<form name="createplanning" action="<?php echo URL?>user/store2" method="post">
        <label><b>Horse: </b></label>
        <select name="paarden">
          <?php foreach($horses as $info) {?>
            <option value="<?= $info['name'] ?>"><?= $info['name'] ?></option>
          <?php } ?>
        </select>


>
    <label><b>User: </b></label>
    <select name="ruiter">
        <?php foreach($users as $info1) {?>
        <option value="<?= $info1['username'] ?>"><?= $info1['username'] ?></option>
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
    <input type="submit" value="Reserveer!" id="">  

    </form>

    <a href="<?php echo URL ?>user/reserved" class="btn btn-primary">Terug <-
    







