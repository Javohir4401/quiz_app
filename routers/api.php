<?php

use App\HttpController\API\UserController;
use App\HttpController\QuizController;
use Src\Router;

Router::post('/api/register',[UserController::class, 'store']);
Router::post('/api/login',[UserController::class, 'login']);
Router::post('/api/quizzes',[QuizController::class, 'store']);
echo "Rout not found";

$router = new Router();