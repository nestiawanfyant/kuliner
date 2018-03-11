<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Default => $route['default_controller'] = 'welcome';
$route['default_controller'] = 'Home';

// view restro
$route['restaurant/(:any)/'] = 'restaurant/view';
$route['restaurant/(:any)/(:any)'] = 'restaurant/view_menu';

// account
$route['account/infodata'] = 'account';
$route['account/password'] = 'account';
$route['account/images'] = 'account';

// test
$route['home/rose'] = 'home/role';

$route['404_override'] = '';
$route['translate_uri_dashes'] = true;
