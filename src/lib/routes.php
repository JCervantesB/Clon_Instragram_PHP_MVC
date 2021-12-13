<?php

$router = new \Bramus\Router\Router();
session_start();

$router->get('/', function() {
    echo "Inicio";
});
$router->get('/login', function() {
    echo "Desde Login";
});
$router->get('/auth', function() {
    echo "Desde auth";
});
$router->get('/singup', function() {
    echo "Desde singup";
});
$router->get('/register', function() {
    echo "Desde register";
});
$router->get('/home', function() {
    echo "Desde home";
});
$router->post('/publish', function() {
    echo "Desde publish";
});
$router->get('/profile', function() {
    echo "Desde profile";
});
$router->post('/addLike', function() {
    echo "Desde addLike";
});
$router->get('/singout', function() {
    echo "Desde singout";
});
$router->get('/profile/{username}', function($username) {
    echo "Desde profile/{username}";
});

$router->run();