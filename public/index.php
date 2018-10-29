<?php

require '../vendor/autoload.php';

// show error in postman
$config = ['settings'=>['displayErrorDetails'=>true]];
$c = new \Slim\Container($config);

$app = new \Slim\App($c);

require '../lib/middlewareclass.php'; // public middleware at magical function php class
require '../src/middleware.php'; // public middleware
require '../src/functionsmiddleware.php';

require '../api/args.php';
require '../api/group.php';
require '../api/jsonresponse.php';
require '../api/multiblemethod.php';
require '../api/optionalsegment.php';
require '../api/posttest.php';
require '../api/put.php';
require '../api/regular.php';
require '../api/request.php';
require '../api/response.php';
require '../api/testmiddleware.php';
require '../api/specificmiddleware.php';
require '../api/testclassmiddleware.php';
require '../api/attributemiddle.php';

$app->run();