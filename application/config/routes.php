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
$route['default_controller'] = 'Pages/index';
$route['about'] = 'Pages/about';
$route['portfolio'] = 'Pages/portfolio';
$route['service'] = 'Pages/service';
$route['pricing'] = 'Pages/pricing';
$route['blog'] = 'Pages/blog';
$route['contact'] = 'Pages/contact';

$route['404_override'] = '';

/*admin*/
$route['admin'] = 'User/index';
$route['admin/signup'] = 'User/signup';
$route['admin/create_member'] = 'User/create_member';
$route['admin/login'] = 'User/index';
$route['admin/logout'] = 'User/logout';
$route['admin/logo'] = 'Pages/logo';
$route['admin/add_page'] = 'Pages/add_page';
$route['admin/profile'] = 'User/profile';
$route['admin/slider'] = 'Pages/slider';
$route['admin/add_portfolio'] = 'Pages/add_portfolio';
$route['admin/add_portfolio_category'] = 'Pages/add_portfolio_category';
$route['admin/add_blog'] = 'Pages/add_blog';
$route['admin/add_work'] = 'Pages/add_work';
$route['admin/add_section'] = 'Pages/add_section';
$route['admin/add_service'] = 'Pages/add_service';
$route['admin/add_team'] = 'Pages/add_team';
$route['admin/view_page'] = 'Pages/view_page';
$route['admin/delete_page'] = 'Pages/delete_page';
$route['admin/edit_page'] = 'Pages/edit_page';
$route['admin/login/validate_credentials'] = 'User/validate_credentials';
$route['translate_uri_dashes'] = FALSE;
