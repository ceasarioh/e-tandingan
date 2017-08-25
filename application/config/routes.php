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
$route['default_controller'] = 'halaman/view';
/*routing yang lama
$route['home/(:any)'] = 'home/view/$1' ;
$route['keberatan/(:any)'] = 'keberatan/view/$1' ;
$route['banding/(:any)'] = 'banding/view/$1' ;
$route['upaya_hukum/(:any)'] = 'upayahukum/view/$1' ;
$route['peraturan/(:any)'] = 'peraturan/view/$1' ;
*/
/* home */
$route['home/kepegawaian'] = 'kepegawaian';
$route['home/perlengkapan'] = 'perlengkapan';
$route['home/persuratan'] = 'persuratan';
$route['home/kinerja'] = 'kinerja';

/* keberatan */
$route['keberatan/keputusan_keberatan'] = 'keputusan_keberatan';
$route['keberatan/permohonan_keberatan'] = 'permohonan_keberatan';

/* banding */
$route['banding/surat_uraian_banding'] = 'surat_uraian_banding';
$route['banding/putusan'] = 'putusan';

/* upaya hukum */
$route['upaya_hukum/rekam_memori_PK'] = 'rekam_memori_PK';
$route['upaya_hukum/rekam_putusan_PK'] = 'rekam_putusan_PK';

/* peraturan */
$route['peraturan/input_peraturan'] = 'input_peraturan';
$route['peraturan/browse_peraturan'] = 'browse_peraturan';

$route['(:any)'] = 'halaman/view/$1' ;

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
