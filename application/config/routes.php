<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['kendaraan/(:any)'] = 'Kendaraan/Kendaraan/path';



$route['default_controller'] = 'Dashboard/Dashboard/';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
