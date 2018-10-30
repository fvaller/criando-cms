<?php

$app->get('/', function ($params) use ($c) {
	$pages = $c['model_pages'];
	$data = $pages->findFirst(1); //pagina home	
	return $c['view']->render('render_page.phtml', ['page' => $data]);
});

$app->get('/page/{id}', function ($params) use ($c) {	
	$pages = $c['model_pages'];
	$data = $pages->findFirst($params[1]);	
	return $c['view']->render('render_page.phtml', ['page' => $data]);
});