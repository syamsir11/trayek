<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['kendaraan/(:any)'] = 'Kendaraan/Kendaraan/path';
$route['kendaraan/(:any)'] = 'Kendaraan/tkendaraan/path';
$route['akunt/(:any)'] = 'Akunt/akunt/path';
$route['jalur/(:any)'] = 'Jalur/jalur/path';
$route['kir/(:any)'] = 'Kir/kir/path';
$route['jkendaraan/(:any)'] = 'Jkendaraan/jkendaraan/path';

$route['default_controller'] = 'Dashboard/Dashboard/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
