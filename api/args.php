<?php

// $args --------------------------------------------------------------------------------------------
$app->get('/testargs/{name}/{phone}',function($request, $response, $args){
	$name = $args['name'];
	$phone = $args['phone'];
	$response->getBody()->write("This is a test for args ,$name your phone number is $phone");
});