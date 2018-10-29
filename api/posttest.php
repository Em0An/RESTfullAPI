<?php

// get method --------------------------------------------------------------------------------------------------
$app->get('/hello/{name}', function (Request $request, Response $response) {
    $name = $request->getAttribute('name');
    $response->getBody()->write("Hello World, $name");
    return $response;
});

// post method --------------------------------------------------------------------------------------------
$app->post('/test/demo',function(Request $r1, Response $r2){
	$data = $r1->getParsedBody();
	$inputdata = [];
	$inputdata['name'] = filter_var($data['name'], FILTER_SANITIZE_STRING);
	$inputdata['phone'] = filter_var($data['phone'], FILTER_SANITIZE_STRING);
	$r2->getBody()->write("dear".$inputdata['name']."Your phone number is ".$inputdata['phone']);
});