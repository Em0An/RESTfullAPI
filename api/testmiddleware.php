<?php

$app->get('/testmiddleware',function($req,$res){
	$res->getBody()->write("---this is your route function---");
});