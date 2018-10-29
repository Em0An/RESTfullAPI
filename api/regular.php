<?php

// regular expression test -------------------------------------------------------------------------------------
$app->get('/regular/{id:[0-9]+}/{name:[a-z]+}',function($req, $res, $args) {
	$id = $args['id'];
	$name = $args['name'];
	$res->getBody()->write("This id = $id,The name is $name");
});