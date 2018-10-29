<?php

// mutliple Methods -------------------------------------------------------------------------------------------- 
$app->map(['PUT', 'GET'],'/multipleMethodsTest/{id}',function($Request, $Response, $args){
	$id = $args['id'];
	if($Request->isPut()){
		$Response->getBody()->write("This id = $id Will be updated");
	}
	if($Request->isGet()){
		$Response->getBody()->write("This id = $id Will be retrived");
	}
});