<?php

$c = $app->getContainer();

session_start();

$auth = function () {
	$user = $_SESSION['user'] ? $_SESSION['user'] : null;
	if(!$user){
		header("Location: /admin/login");
		die();
	}
};

require __DIR__ . '/modules/admin-login.php';
require __DIR__ . '/modules/admin-users.php';
require __DIR__ . '/modules/admin-pages.php';
require __DIR__ . '/modules/pages.php';