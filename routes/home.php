<?php
use App\Controllers\HomeController;

/*$app->get('/hello', function($request, $response, $args) {

    return $this->view->render($response, 'home.php');

});*/
$app->get('/hello', HomeController::class.':index');




