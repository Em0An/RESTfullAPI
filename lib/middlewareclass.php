<?php

class MiddlewareClass {
	
	public function __invoke($req,$res,$next) {
		$res->getBody()->write(" this is middleware class ");
		$res=$next($req,$res);
		return $res;
	}
}