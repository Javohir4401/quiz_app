<?php
 use App\Router;


 if(Router::isApiCall()){
     require 'routers/api.php';
     exit();
 }
 require 'routers/web.php';