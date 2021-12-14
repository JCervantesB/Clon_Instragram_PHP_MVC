<?php

$router = new \Bramus\Router\Router();
session_start();
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../config/');
$dotenv->load();

$router->get('/', function() {
    echo "Inicio";
});
$router->get('/login', function() {
    echo "Desde Login";
});
$router->post('/auth', function() {
    echo "Desde auth";
});
$router->get('/singup', function() {
    echo "Desde singup";
});
$router->post('/register', function() {
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