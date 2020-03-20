<?php
// index.php (at root folder)
require 'src/helpers/route.php';

// must have, if you are using session
session_start();

$parsed_url = parse_url($_SERVER['REQUEST_URI']);
$path = $parsed_url['path'];

if (!isset($_SESSION['LOGGED_IN']) && $path != '/' && $path != '/login') {
    header("Location: /");
    die();
}
$message = "";

// Add base route (home page)
Route::add('/', function() { include 'src/home/index.php';});

Route::add('/home', function() { include 'src/home/index.php'; });

Route::add('/users', function() { include 'src/users/index.php'; });

Route::add('/login', function() {
    if (!empty( $_POST )) {
        $username = $_POST['username'];
        $pass = $_POST['password'];
        //// debug when you got the issue

        if ( isset($username) && isset($pass) ) {
            if ( isUserValid($username, $pass)) {
                $_SESSION['LOGGED_IN'] = $username;
                $_SESSION['USERNAME'] = $_POST['username'];
                header('Location: /users');
            }else{
                header('Location: /');
            }
            if (isset($_POST['rememberUsername'])) {
                setcookie('username', $username, time() + (30 * 60), "/"); // 30 minutes
            }
        }
    }
   
    exit;
}, 'post');

function isUserValid($username, $password) {
	return $username == 'pav' && $password == '123';
}

// start the route.
Route::run('/');