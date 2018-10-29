<?php

$app->get('/testclassmiddleware',function($req,$res){
	$res->getBody()->write(" this is test class middleware ");
})->add(new MiddlewareClass);