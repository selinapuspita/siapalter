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
$route['default_controller'] = 'auth_login/index';

$route['authentication'] = 'auth_login/cek_login';
$route['auth'] = 'auth_login/guest_login';
$route['logout'] = 'auth_login/logout';
$route['dashboard'] = 'Manage_app/dashboard';
$route['reqitem'] = 'Manage_app/request_barang';
$route['listreq'] = 'Manage_app/daftar_request';
$route['Manage_app/saran'] = 'SaranController/index';
$route['Manage_app/saran/tambah'] = 'SaranController/create';
$route['Manage_app/saran/store'] = 'SaranController/store';
$route['Manage_app/saran/edit/(:any)'] = 'SaranController/edit/$1';
$route['Manage_app/saran/update/(:any)'] = 'SaranController/update/$1';
$route['Manage_app/saran/delete/(:any)'] = 'SaranController/delete/$1';
$route['Manage_app/saran-respon'] = 'SaranResponController/index';
$route['Manage_app/saran-respon/proses/(:any)'] = 'SaranResponController/proses/$1';
$route['Manage_app/saran-respon/selesai/(:any)'] = 'SaranResponController/selesai/$1';
$route['Manage_app/saran-respon/status/(:any)'] = 'SaranResponController/status/$1';

//modal update data
$route['changepassed/(:any)'] = 'Manage_app/update/$1';
$route['proc_reg'] = 'Daftar_app/proses_daftar';
$route['manage/(:any)'] = 'Manage_app/manage/$1';

$route['404_override'] = 'auth_login/index';
$route['translate_uri_dashes'] = FALSE;
