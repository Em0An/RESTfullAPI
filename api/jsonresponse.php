<?php

// Json Response TEST --------------------------------------------------------------------------------------------
$app->get('/jsontest/{FirstName}/{LastName}',function($Request, $Response, $args){
	$FirstName = $args['FirstName'];
	$LastName = $args['LastName'];
	$out = [];
	$out['Status'] = 200;
	$out['Message'] = "This is JSON Response TEST";
	$out['FirstName'] = $FirstName;
	$out['LastName'] = $LastName;
	$Response->getBody()->write(json_encode($out));
});