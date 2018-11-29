<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

/* Reescrevendo rotas */
$route['events'] = "public/events";
$route['products'] = "public/products";
$route['checkout'] = "public/checkout";
$route['faqs'] = "public/faqs";
$route['payment'] = "public/payment";
$route['services'] = "public/services";
$route['single'] = "public/single";
$route['shortCodes'] = "public/shortCodes";
$route['privacy'] = "public/privacy";
$route['mail'] = "public/mail";
$route['login'] = "public/login";
$route['about'] = "public/about";
$route['household'] = "public/household";
$route['kitchen'] = "public/kitchen";
$route['home'] = "public/home";



/* redirecinamento para a tela pública */
$route['default_controller'] = "public/home";

/* Rotas do dashboard */
$route['dash'] = "dash/auth";


/* Rotas de variáveis por get */
$route['dash/bebida/apagar/(:any)/(:num)'] = 'dash/bebida/apagar/$1/$2';
$route['dash/estoque/(:num)'] = 'dash/estoque/index/$1';
$route['categoria/(:num)'] = 'public/categoria/index/$1';
$route['single/(:num)'] = 'public/single/index/$1';



$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
