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
$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

$route['akreditasi'] = 'home/akreditasi';
$route['visi-misi-tujuan'] = 'home/visi_misi';
$route['profil'] = 'home/profil';
$route['struktur'] = 'home/struktur';
$route['pembelajaran'] = 'home/pembelajaran';
$route['galeri'] = 'home/galeri';
$route['galeri/(:num)'] = 'home/galeri/$1';
$route['galeri/detail-galeri/(:any)'] = 'home/detail_galeri/$1';
$route['alumni'] = 'home/alumni';
$route['informasi-berita'] = 'home/informasi_berita';
$route['informasi-berita/(:num)'] = 'home/informasi_berita/$1';
$route['informasi-berita/(:any)'] = 'home/detail_informasi_berita/$1';
$route['legalitas'] = 'home/legalitas';

$route['admin/data-admin'] = 'admin/data_admin';
$route['admin/data-admin/tambah-admin'] = 'admin/add_admin';
$route['admin/data-admin/edit-admin/(:any)'] = 'admin/edit_admin/$1';
$route['admin/profil-pengguna/(:any)'] = 'admin/user/$1';
$route['admin/visi-misi-tujuan'] = 'admin/visi_misi';
$route['admin/pembelajaran/tambah-program'] = 'admin/addprogram';
$route['admin/pembelajaran/edit-program/(:any)'] = 'admin/editprogram/$1';
$route['admin/galeri/tambah-galeri'] = 'admin/addgaleri';
$route['admin/galeri/edit-galeri/(:any)'] = 'admin/editgaleri/$1';
$route['admin/galeri/detail-galeri/(:any)'] = 'admin/showgaleri/$1';
$route['admin/berita/tambah-berita'] = 'admin/addberita';
$route['admin/berita/edit-berita/(:any)'] = 'admin/editberita/$1';
