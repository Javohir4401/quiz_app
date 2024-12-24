<?php
use App\Router;
use controllers\UserController;
use controllers\TodoController;


Router::get('/todos', [TodoController::class, 'show']);
Router::get('/users', [UserController::class, 'index']);
Router::get('/', function (){
    echo 'Hello World';
});
