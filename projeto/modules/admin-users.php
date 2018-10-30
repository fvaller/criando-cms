<?php

$app->get('/admin/users', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_user'];
	$data = $users->findAll();	
	return $c['view']->render('users/index.phtml', ['users' => $data]);
    //return "<h1>{$params[1]}</h1>";
});

$app->get('/admin/users/new', function ($params) use ($c, $auth) {
	$auth();
	return $c['view']->render('users/new.phtml');
});

$app->post('/admin/users/new', function ($params) use ($c, $auth) {
	$auth();
	$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);

	if(!$password){
		header("Location: /admin/users/new");	
	}

	$password = password_hash($password, PASSWORD_DEFAULT, [
		'cont' => 12
	]);

	$model = $c['model_user'];
	$model->email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$model->password = $password;
	$model->save();
	header("Location: /admin/users");
});

$app->get('/admin/users/{id}', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_user'];
	$data = $users->findFirst($params[1]);	
	return $c['view']->render('users/view.phtml', ['user' => $data]);
});

$app->get('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
	$auth();
	$users = $c['model_user'];
	$data = $users->findFirst($params[1]);	
	return $c['view']->render('users/edit.phtml', ['user' => $data]);
});

$app->post('/admin/users/edit/{id}', function ($params) use ($c, $auth) {
	$auth();

	$password = filter_input(INPUT_POST, 'password', FILTER_DEFAULT);	

	$model = $c['model_user'];
	$model->id       = $params[1];
	$model->email    = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

	if($password){
		$password = password_hash($password, PASSWORD_DEFAULT, [
			'cont' => 12
		]);			
		$model->password = $password;
	} else {
		$data = $model->findFirst($params[1]);	
		$model->password = $data['password'];
	}

	$model->save();	
	header("Location: /admin/users");
});

$app->post('/admin/users/delete/{id}', function ($params) use ($c, $auth) {
	$auth();
	$model = $c['model_user'];
	$model->id = $params[1];	
	$model->delete();	
	header("Location: /admin/users");
});