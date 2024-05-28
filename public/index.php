<?php

require '../vendor/autoload.php';
use App\Twig;
use App\Mail;
define('ROOT', dirname(__DIR__));
$baseLienSite = "http://dev-stad/";

//CREATION DU ROUTEUR

$router = new AltoRouter();
$router->setBasePath('');

//Recuperation des infos dans le json

$file = '../data.json';
$data = file_get_contents($file);
$obj = json_decode($data);

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
//DEFINITION DES VARIABLES

//CREATION DE LA ROUTE

$router->map('Get', '/', function() use ($obj) {
    $twig= new Twig ('base.html.twig');
    $twig->render([
        "obj"=>$obj,
        "id"=>0,
        "domain"=>$_ENV['DOMAIN']
    ]);
});

$router->map('Get', '/peinture', function() use ($obj) {
    $twig= new Twig ('base.html.twig');
    $twig->render([
        "obj"=>$obj,
        "id"=>1,
        "domain"=>$_ENV['DOMAIN']
    ]);
});

$router->map('Get', '/decoration', function() use ($obj) {
    $twig= new Twig ('base.html.twig');
    $twig->render([
        "obj"=>$obj,
        "id"=>2,
        "domain"=>$_ENV['DOMAIN']
    ]);
});
$router -> map('Get|Post', '/mail', function(){
    if($_POST['msg']===""){
        $mail = new Mail ($_POST["firstName"], $_POST["name"], $_POST["company"], $_POST["phone"], $_POST["email"], $_POST["subject"], $_POST["message"] );
    }
    else{
        echo json_encode(['response'=>"yes"]);
    }
});
$router->map('Get', '/mentions-legales', function() use ($obj) {
    $twig = new Twig('base.html.twig');
    $twig->render([
        "id"=>4,
        "obj"=>$obj
    ]);
});

// match current request url
$match = $router->match();

// call closure or throw 404 status
if( is_array($match) && is_callable( $match['target'] ) ) {
    call_user_func_array( $match['target'], $match['params'] );
} else {
    // aucune route trouvée
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo "Cette route n'existe pas";
}