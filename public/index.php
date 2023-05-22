<?php
    if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: POST, GET, DELETE, PUT, PATCH, OPTIONS');
        header('Access-Control-Allow-Headers: token, Content-Type');
        header('Access-Control-Max-Age: 1728000');
        header('Content-Length: 0');
        header('Content-Type: text/plain');
        die();
    }

    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

hhhh

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/user' => 'controllers/user.php'
];

if(array_key_exists($uri,$routes)){
    require $routes[$uri];
} else{
    http_response_code(404);
    echo "Not an existing route";
    die();
} 













/* echo "Hello worl!";
$routes = [];

route('/Test', function(){
    echo "bitch";
});

route('/',function(){
    echo "homepage";
})

function route(string $path, callable $callback){
    global $routes;
    $routes[$path] = $callback;
}

run();
function run(){
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach($routes as $path=>$callback){
        if($path != $uri) continue;

        $callback();
    }
} */