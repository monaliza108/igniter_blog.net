<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $route['pages/users'] = 'pages/users';
// $route['pages/users'] = 'pages/users';
// $route['posts/index']='posts/index';
$route['pages/users'] = 'pages/users';
$route['pages/users_signup'] = 'pages/users_signup';
$route['pages/users_login'] = 'pages/users_login';


$route['posts/index']='posts/index';
$route['posts/update'] = 'posts/update';
$route['posts/edit'] = 'posts/edit';

$route['posts/category'] = 'posts/category';

$route['posts/insert_data'] = 'posts/insert_data';
$route['posts/create'] = 'posts/create';
$route['posts/delete'] = 'posts/delete';
$route['posts/(:any)'] = 'posts/view/$1';
$route['posts']='posts/index';

$route['default_controller'] = 'pages/view';
$route['(:any)']= 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// $route['default_controller'] = 'posts';
// $route['404_override'] = '';
// $route['translate_uri_dashes'] = FALSE;

