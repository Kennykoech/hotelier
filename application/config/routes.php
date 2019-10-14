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
// Payments
$route['payments/delivery'] = 'payments/delivery';
$route['payments/place_order'] = 'payments/place_order';
$route['payments/checkout'] = 'payments/checkout';
//User Orders
$route['order_food/remove_food/(:any)'] = 'order_food/remove_food/$1';
$route['order_food/food_qty/(:any)'] = 'order_food/food_qty/$1';
$route['order_food/view_order'] = 'order_food/view_order';
$route['order_food/(:any)'] = 'order_food/make_order/$1';
// Admin Orders
$route['admin/confirm_food_orders'] = 'orders/confirm_food_orders';
// Food_Categories
$route['admin/add_food_category'] = 'food_categories/add_food_category';
$route['admin/create_food_category'] = 'food_categories/create_food_category';
// Food
$route['admin/edit_food/(:any)'] = 'food/edit_food/$1';
$route['admin/update_food/(:any)'] = 'food/update_food/$1';
$route['admin/remove_food/(:any)'] = 'food/remove_food/$1';
$route['admin/view_food/(:any)'] = 'food/view_food/$1';
$route['admin/view_food'] = 'food/view_food';
$route['admin/add_food'] = 'food/add_food';
$route['admin/create_food'] = 'food/create_food';

//Admin
$route['admin'] = 'orders/confirm_food_orders';

// user
$route['user/search_food'] = 'user/search_food';
$route['user/(:any)'] = 'user/index/$1';
$route['user'] = 'user';

$route['default_controller'] = 'user';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
