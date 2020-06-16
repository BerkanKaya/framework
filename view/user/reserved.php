                <a class="nav-link text-white" href="<?php echo URL ?>user/inlog">Log out <-</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/home">Horses</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/users">Users</a>
                <a class="nav-link text-white" href="<?php echo URL ?>user/reserved">All reserved horses</a>
            </li>
        </ul>
    </div>
</nav>


<div class="mb-5 mt-2">

    <div class="d-lg-flex flex-lg-row flex-sm-column justify-content-between">
        <h1>Bekijk hier alle reserveringen</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="reserve1">Reserveer een paard!</a>
    </div>

    <?php foreach ($planning as $info){?>
<?php
    $eindtijd=$info["eindtijd"];
    $begintijd=$info["begintijd"];
    $totaaltijd=$eindtijd-$begintijd;
    $totaalkosten=55*$totaaltijd;
?>

<div class="container">
    <div class="row d-inline">
  
        <div class="img-thumbnail col-4 m-2 ">


            <h2>Ruiter: <?=$info['ruiter']?></h2>
            <p>Paard: <?=$info['paarden']?></p>
            <p>Starttijd: <?=$info['begintijd']?></p>
            <p>Eindtijd: <?=$info['eindtijd']?></p>
            <p>totale kosten zijn: <? echo $totaalkosten ?> (‎€55 per uur)</p>
    
            <a class="btn btn-primary text-white" href="<?php echo URL?>user/updatereserved/<?php echo $info['id']?>">Verander reservering</a>
            <a class="btn btn-danger text-white" href="<?php echo URL?>user/deletereserved/<?php echo $info['id']?>">Verwijder reservering</a>
             
        </div>
    </div>
</div>
<?php } ?>

   


