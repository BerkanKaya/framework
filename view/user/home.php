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
    
        <h1>Bekijk hier alle paarden</h1>
        <a class="btn-lg btn-primary text-white align-self-center" href="createform">Nieuw paard +</a>
    </div>

    <?php foreach ($horses as $info){?>
<div class="container">
    <div class="row d-inline">
  
        <div class="img-thumbnail col-4 m-2 ">
        <img class="card-img-top img-fluid" src="<?php echo URL ?>public/img/<?php echo $info['image']?>">

            <h2><?=$info['name']?></h2>
            <p>Leeftijd: <?=$info['age']?> jaar</p>
            <p>Ras: <?=$info['ras']?></p>
            <p>Lengte: <?=$info['lengte']?> meter</h2>
            <p>Schofthoogte: <?=$info['schofthoogte']?> meter</p>
            <p>Description: <?=$info['description']?></h2>
            <p>Pony/Paard: <?=$info['ponypaard']?></p>

    
            <a class="btn btn-primary text-white" href="<?php echo URL?>user/update/<?php echo $info['id']?>">Update</a>
            <a class="btn btn-danger text-white" href="<?php echo URL?>user/deletehorses/<?php echo $info['id']?>">Delete</a>
             
        </div>
    </div>
</div>
<?php } ?>





   



