<?php

$app->get('/testattribute',function($req,$res){
	$myparam=$req->getAttribute('passed');
	$message=['middleware_attribute'=>$myparam];
	$res->getBody()->write(json_encode($message));
})->add($addit);