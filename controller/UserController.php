<?php 
require(ROOT . "model/UserModel.php");

    function index(){
        $empty = '';
    
        if (isset($_POST['register'])) {
            if (empty($_POST['username']) && empty($_POST['password']) && empty($_POST['gmail']) && empty($_POST['telefoonnummer']) && empty($_POST['adres'])) {
                $empty = 'Geen veld ingevuld!';
            } elseif (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['gmail']) || empty($_POST['telefoonnummer']) || empty($_POST['adres'])){
                $empty = 'Niet alles is ingevuld!';


            } else {
                $username = $_POST['username'];
                $password = hash('sha512', pw . $_POST['password']);
                $gmail = $_POST['gmail'];
                $telefoonnummer = $_POST['telefoonnummer'];
                $adres = $_POST['adres'];
                registerUser($username, $password, $gmail, $telefoonnummer, $adres);
            }
        }

        render("user/index", array(
            'empty' => $empty,
        ));
    }
    function inlog(){
        if (isset($_POST['inlog'])) {
            if (empty($_POST['username']) && empty($_POST['password'])){
                echo '<script>
                          alert("Gebruikersnaam en wachtwoord zijn niet ingevuld!");
                          // User is also automatically send back to the previous page
                          history.go(-1);
                      </script>';
            } elseif (empty($_POST['username']) || empty($_POST['password'])) {
                echo '<script>
                          alert("Gebruikersnaam of wachtwoord is niet ingevuld!");
                          history.go(-1);
                      </script>';
            } else {
                $username = $_POST['username'];
                $password = hash('sha512', pw . $_POST['password']);
                loginUser($username, $password);
    
            }
        }
        render("user/inlog");
    }

    function home(){
        render("user/home", array('horses' => getAllHorses()));
    }

    function users(){
        render("user/users", array('users' => getAllUsers()));
    }

    function createform(){
        render("user/createform");
    }

    function store(){
        $image = $_POST["image"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $ras = $_POST["ras"];
        $lengte = $_POST["lengte"];
        $schofthoogte = $_POST["schofthoogte"];
        $description = $_POST["description"];
        $ponypaard = $_POST["ponypaard"];
        createHorse($image, $name, $age, $ras, $lengte, $schofthoogte, $description, $ponypaard);
        home();
    }

    function deletehorses($id){
        render("user/deletehorses", ["id" => $id]);
    }

    function destroy($id){
        destroyhorse($id);
        home();
    }

    function reserve(){
        render("user/reserve", array('horses' => getAllHorses(), 'users' => getAllUsers()));
    }

   
    function reserved(){
        render("user/reserved", array('planning' => plannings()));
    }

    function store2(){
        $ruiter = $_POST["ruiter"];
        $paarden = $_POST["paarden"];
        $begintijd = $_POST["begintijd"];
        $eindtijd = $_POST["eindtijd"];
        reserveren($ruiter, $paarden, $begintijd, $eindtijd);
        reserved();
    }

    function deletereserved($id){
        render("user/deletereserved", ["id" => $id]);
    }

    function destroyreserved($id){
        destroyreserveringen($id);
        reserved();
    }

    function reserve1(){
        render("user/reserve", array('horses' => getAllHorses(), 'users' => getAllUsers()));
    }

    function update($id){
        render("user/update", array('horses' => getAllHorses(), 'id' => $id));
    }
    
    function updatehorse($id){;
        $image = $_POST["image"];
        $name = $_POST["name"];
        $age = $_POST["age"];
        $ras = $_POST["ras"];
        $lengte = $_POST["lengte"];
        $schofthoogte = $_POST["schofthoogte"];
        $description = $_POST["description"];
        $ponypaard = $_POST["ponypaard"];
        updatepaard($id, $image, $name, $age, $ras, $lengte, $schofthoogte, $description, $ponypaard);
        home();
    }

    function deleteuser($id){
        render("user/deleteuser", ["id" => $id]);
    }

    function destroyuser($id){
        destroygebruiker($id);
        users();
    }

    function updateuser($id){
        render("user/updateuser", ["id" => $id]);
    }

    function updategebruiker($id){;
        $username = $_POST["username"];
        $gmail = $_POST["gmail"];
        $adres = $_POST["adres"];
        $telefoonnummer = $_POST["telefoonnummer"];
        updateusers($id, $username, $gmail, $adres, $telefoonnummer);
        users();
    }
    function updatereserved($id){
        render("user/updatereserved", array('horses' => getAllHorses(), 'id' => $id));
        
    }
 
    function updatereserve($id){;
        $paarden = $_POST["paarden"];
        $begintijd = $_POST["begintijd"];
        $eindtijd = $_POST["eindtijd"];
        updateplanning($id, $paarden, $begintijd, $eindtijd);
        reserved();
    }

    

    
    
