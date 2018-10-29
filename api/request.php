<?php

$app->get('/requestTest/{name}',function($req,$res,$args){
	$out=[];
	
	$out['method']=$req->getMethod();
	$out['content']=$req->getContentType();
	$out['headers'] = $req->getHeaders();
	$out['port'] = $req->getUri()->getPort();
	$out['host'] = $req->getUri()->getHost();
	$out['mediatype'] = $req->getMediatype();
	$out['isxhr'] = $req->isXhr();
	$out['body'] = $req->getParsedBody();
	$out['name'] = $req->getAttribute('name');

	$res->getBody()->write(json_encode($out));
});