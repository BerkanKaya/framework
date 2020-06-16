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
        <h1>Bekijk hier alle Users</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="index">New User +</a>
        
    </div>


    <?php foreach ($users as $info1){?>
    <div class="container">
    <div class="row d-inline">
  
        <div class="img-thumbnail col-4 m-2">

            <h2>Username: <?=$info1['username']?></h2>
            RuiterId: <?=$info1['id']?>
            Adres: <?=$info1['adres']?>
            Telefoonnummer: <?=$info1['telefoonnummer']?>

            <br>
            <a class="btn btn-primary text-white" href="<?php echo URL?>user/updateuser/<?php echo $info1['id']?>">Update</a>
            <a class="btn btn-danger text-white" href="<?php echo URL?>user/deleteuser/<?php echo $info1['id']?>">Delete</a>
        </div>
    </div>
</div>
<?php } ?>

   


