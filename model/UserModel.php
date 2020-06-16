<?php 
    
function registerUser($username, $password, $gmail, $telefoonnummer, $adres){
    $db = openDatabaseConnection();
    $stm = $db->prepare("INSERT INTO users (username, gmail, password, telefoonnummer, adres) VALUES (:username, :gmail, :password, :telefoonnummer, :adres)"); 
    $stm->bindParam(':username', $username);
    $stm->bindParam(':gmail', $gmail);
    $stm->bindParam(':password', $password);
    $stm->bindParam(':telefoonnummer', $telefoonnummer);
    $stm->bindParam(':adres', $adres);
    if ($stm->execute()) {
        echo '<script>alert("Geregistreerd met succes!")</script>';
    } else {
        echo '<script>alert("Er is iets mis gegaan tijdens het aanmaken van uw account!")</script>';
    }

    $db = null;
}

function loginUser($username, $password){
    $db = openDatabaseConnection();
    $stm = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
    $stm->bindParam(':username', $username);
    $stm->bindParam(':password', $password);
    $stm->execute();

    if(count($stm->fetchAll())) {
        $_SESSION['username'] = $username;
        echo '<script>alert("Ingelogd met succes!")</script>';
        header('Location: ' . URL . 'user/home');
    } else {
        echo '<script>
                  alert("Gebruikersnaam of wachtwoord is niet correct!");
                  history.go(-1);
              </script>';
    }

    $db = null;
}
function getAllHorses(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM horses";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function getAllUsers(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM users";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function createHorse($image, $name, $age, $ras, $lengte, $schofthoogte, $description, $ponypaard){
    $db = openDatabaseConnection();
    $statement = $db->prepare("INSERT INTO horses (image, name, age, ras, lengte, schofthoogte, description, ponypaard) VALUES (:image, :name, :age, :ras, :lengte, :schofthoogte, :description, :ponypaard)");
    $statement->bindParam(":image", $image);
    $statement->bindParam(":name", $name);
    $statement->bindParam(":age", $age);
    $statement->bindParam(":ras", $ras);
    $statement->bindParam(":lengte", $lengte);
    $statement->bindParam(":schofthoogte", $schofthoogte);
    $statement->bindParam(":description", $description);
    $statement->bindParam(":ponypaard", $ponypaard);
    $statement->execute();
    $db = null;
}

function destroyhorse($id){
    $db = openDatabaseConnection();
    $statement = $db->prepare("DELETE FROM horses WHERE id=:id");
    $statement->bindParam(":id", $id);
    $statement->execute();
    $db = null;
}

function plannings(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM planning";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function reserveren($ruiter, $paarden, $begintijd, $eindtijd){
    $db = openDatabaseConnection();
    $statement = $db->prepare("INSERT INTO planning (ruiter, paarden, begintijd, eindtijd) VALUES (:ruiter, :paarden, :begintijd, :eindtijd)");
    $statement->bindParam(":ruiter", $ruiter);
    $statement->bindParam(":paarden", $paarden);
    $statement->bindParam(":begintijd", $begintijd);
    $statement->bindParam(":eindtijd", $eindtijd);
    $statement->execute();
    $db = null;
}

function destroyreserveringen($id){
    $db = openDatabaseConnection();
    $statement = $db->prepare("DELETE FROM planning WHERE id=:id");
    $statement->bindParam(":id", $id);
    $statement->execute();
    $db = null;
}

function updatepaard($id, $image, $name, $age, $ras, $lengte, $schofthoogte, $description, $ponypaard){
    $db = openDatabaseConnection();
    $statement = $db->prepare('UPDATE `horses` SET `image`=:image, `name`=:name , `age`=:age, `ras`=:ras, `lengte`=:lengte, `schofthoogte`=:schofthoogte, `description`=:description, `ponypaard`=:ponypaard WHERE `id`=:id');
    $statement->bindParam(":id", $id);
    $statement->bindParam(":name", $name);
    $statement->bindParam(":age", $age);
    $statement->bindParam(":ras", $ras);  
    $statement->bindParam(":lengte", $lengte);
    $statement->bindParam(":schofthoogte", $schofthoogte);
    $statement->bindParam(":image", $image);
    $statement->bindParam(":description", $description);
    $statement->bindParam(":ponypaard", $ponypaard);
    $statement->execute();
    $db = null;
}

function destroygebruiker($id){
    $db = openDatabaseConnection();
    $statement = $db->prepare("DELETE FROM users WHERE id=:id");
    $statement->bindParam(":id", $id);
    $statement->execute();
    $db = null;
}

function updateusers($id, $username, $gmail, $adres, $telefoonnummer){
    $db = openDatabaseConnection();
    $statement = $db->prepare('UPDATE `users` SET `username`=:username, `gmail`=:gmail , `adres`=:adres, `telefoonnummer`=:telefoonnummer WHERE `id`=:id');
    $statement->bindParam(":id", $id);
    $statement->bindParam(":username", $username);
    $statement->bindParam(":gmail", $gmail);
    $statement->bindParam(":adres", $adres);  
    $statement->bindParam(":telefoonnummer", $telefoonnummer);
    $statement->execute();
    $db = null;
}

function updateplanning($id, $paarden, $begintijd, $eindtijd){
    $db = openDatabaseConnection();
    $statement = $db->prepare('UPDATE `planning` SET `paarden`=:paarden, `begintijd`=:begintijd, `eindtijd`=:eindtijd WHERE `id`=:id');
    $statement->bindParam(":id", $id);
    $statement->bindParam(":paarden", $paarden);
    $statement->bindParam(":begintijd", $begintijd);  
    $statement->bindParam(":eindtijd", $eindtijd);
    $statement->execute();
    $db = null;
}