<?php 
use App\Models\Users;
use App\Models\Pages;
use ErikFig\ORM\Drivers\MysqlPdo;
use Twig_Loader_Filesystem;
use Twig_Environment;

//retorna sempre a mesma instancia
$container['pdo'] = function($c){	
	return new PDO('mysql:host=localhost;dbname=curso_cms_php', 'root', 'root2017');
};

$container['view'] = function($c){	
	$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
	$twig = new Twig_Environment($loader, [
		//'cache' => __DIR__ . '/cache/templates'
		//'debug' => true
	]);	
	$twig->addExtension(new Twig_Extension_Debug);
	return $twig;
};

$container['model_pages'] = $container->factory(function($c){
	// instanciação da classe de sql (driver)
	$driver = new MysqlPdo($c['pdo']);
	$model = new Pages();
	$model->setDriver($driver);
	return $model;
});

$container['model_user'] = $container->factory(function($c){
	// instanciação da classe de sql (driver)
	$driver = new MysqlPdo($c['pdo']);
	$model = new Users;
	$model->setDriver($driver);
	return $model;
});

