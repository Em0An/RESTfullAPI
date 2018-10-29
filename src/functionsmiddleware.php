<?php

$addit=function($req,$res,$next){
	$res->getBody()->write(" paramBefore ");
	$req=$req->withAttribute('passed',true);
	$req=$next($req,$res);
	$res->getBody()->write(" paramAfter ");

	return $res;
};