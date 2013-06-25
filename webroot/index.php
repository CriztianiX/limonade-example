<?php
require_once('../lib/limonade.php');
require_once('../lib/seo/Router/Routes.php');


session_name('rac');
session_start();

function configure()
{  
  $host = $_SERVER['HTTP_HOST'];
  $env = ($host != 'lemonade.local.com' ? 'production' : 'development') ;
  option('env', $env);
  option('host', $host);
  option('limonade_dir', __DIR__ . '/../lib/limonade');
  option('lib_dir', __DIR__ . '/../lib');
  option('controllers_dir', __DIR__ .'/../controllers');
  option('debug', true);
}

function before($route) {
  $theme = (isset($_GET['theme']) && !empty($_GET['theme']) ? $_GET['theme'] : 'default');
  option('views_dir', __DIR__ .'/../themes/'.$theme.'/views');
  option('public_dir', __DIR__ .'/../themes/'.$theme.'/public/');
  layout('layout/default.html.php');
}

$routes = new Routes(null, 'LocalhostDomain');
$routes->build();
//var_dump($routes->getRoutes());

run();