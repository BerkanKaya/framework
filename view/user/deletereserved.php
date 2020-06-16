                <a class="nav-link text-white" href="<?php echo URL ?>user/inlog">Log out <-</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/home">Horses</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/users">Users</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/reserved">All reserved horses</a>
            </li>
        </ul>
    </div>
</nav>
<form  action="<?php echo URL ?>user/destroyreserved/<?php echo $id ?>">
<button class="btn btn-dark" type="submit">Verwijderen</button>
<a class="btn btn-dark" href="<?php echo URL ?>user/reserved">annuleren</a>
</form>
<strong></strong> Are you sure?