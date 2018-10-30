<?php

$app->get('/admin/pages', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_pages'];
	$data = $users->findAll();	
	return $c['view']->render('pages/index.phtml', ['pages' => $data]);
});

$app->get('/admin/pages/new', function ($params) use ($c, $auth) {
	$auth();
	return $c['view']->render('pages/new.phtml');
});

$app->post('/admin/pages/new', function ($params) use ($c, $auth) {
	$auth();
	$model = $c['model_pages'];
	$model->title  = filter_input(INPUT_POST, 'title');
	$model->body = filter_input(INPUT_POST, 'body');
	$model->save();
	header("Location: /admin/pages");
});

$app->get('/admin/pages/{id}', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_pages'];
	$data = $users->findFirst($params[1]);	
	return $c['view']->render('pages/view.phtml', ['page' => $data]);
});

$app->get('/admin/pages/edit/{id}', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_pages'];
	$data = $users->findFirst($params[1]);	
	return $c['view']->render('pages/edit.phtml', ['page' => $data]);
});

$app->post('/admin/pages/edit/{id}', function ($params) use ($c, $auth) {
	$auth();
	$model = $c['model_pages'];
	$model->id       = $params[1];
	$model->title    = filter_input(INPUT_POST, 'title');
	$model->body = filter_input(INPUT_POST, 'body');
	$model->save();	
	header("Location: /admin/pages");
});

$app->post('/admin/pages/delete/{id}', function ($params) use ($c, $auth) {
	$auth();
	$model = $c['model_pages'];
	$model->id = $params[1];	
	$model->delete();	
	header("Location: /admin/pages");
});