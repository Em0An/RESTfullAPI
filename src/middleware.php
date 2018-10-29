<?php

/*
	Syntax middleware:
	$app->add('application path or url',function($req,$res,$next){});
*/

$app->add(function($req,$res,$next){
	$res->getBody()->write("Before");
	$res=$next($req,$res);
	$res->getBody()->write("After");

	return $res;
});