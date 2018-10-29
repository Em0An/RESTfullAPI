<?php

$test = function ($req,$res,$next) {
	$res->getBody()->write(" specific middleware ");
	$res=$next($req,$res);
	return $res;
};

$app->get('/publicmiddleware',function($req,$res){
	$res->getBody()->write(" hello publicmiddleware ");
});

$app->get('/specificmiddleware',function($req,$res){
	$res->getBody()->write(" hello specificmiddleware ");
})->add($test);