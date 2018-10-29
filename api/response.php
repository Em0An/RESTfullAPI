<?php

$app->get('/responseTest',function($req,$res,$args){
	$out=[];

	$out['status1']=$res->getStatusCode();
	$newResponse=$res->withStatus(302);
	$out['status2']=$newResponse->getStatusCode();
	$out['headers'] = $req->getHeaders();
	$newResponse=$newResponse->withHeader('content_type','application/json');
	$newResponse=$newResponse->withHeader('allow','get');
	$newResponse=$newResponse->withAddedHeader('allow','put');
	$out['newHeader']=$newResponse->getHeaders();
	$out['ifHeader']=$req->hasHeader('Authorization');

	//$newResponse->getBody()->write(json_encode($out));
	$newResponse=$newResponse->withJson($out,402); // short hand: getBody()->write() + statusCode

	return $newResponse;
});