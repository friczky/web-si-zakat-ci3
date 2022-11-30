<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] 			= 'frontend';

// Frontend

$route['home']							= 'frontend';
$route['tentang']						= 'frontend/tentang';
$route['layanan']						= 'frontend/layanan';
$route['dokumentasi']					= 'frontend/dokumentasi';
$route['kontak']						= 'frontend/kontak';
$route['donasi']						= 'frontend/donasi';

// login
$route['login']							= 'backend/auth';
$route['daftar']						= 'backend/auth/register';
$route['logout']						= 'backend/auth/logout';

// dashboard 
$route['dashboard']						= 'backend/dashboard';
$route['admin']							= 'backend/dashboard';
$route['logout']						= 'backend/auth/logout';


// berita
$route['dashboard/berita']				= 'backend/berita';
$route['dashboard/berita/tambah']		= 'backend/berita/tambah';
$route['dashboard/berita/kategori']		= 'backend/berita/kategori';
$route['dashboard/berita/komentar']		= 'backend/berita/komentar';
$route['dashboard/berita/edit/(:any)']	= 'backend/berita/edit/$1';

// pengguna
$route['dashboard/pengguna']				= 'backend/pengguna';
$route['dashboard/pengguna/tambah']			= 'backend/pengguna/tambah';
$route['dashboard/pengguna/role']			= 'backend/pengguna/role';
$route['dashboard/pengguna/edit/(:any)']	= 'backend/pengguna/edit/$1';

// dokumentasi
$route['dashboard/dokumentasi']				= 'backend/dokumentasi';
$route['dashboard/dokumentasi/tambah']		= 'backend/dokumentasi/tambah';
$route['dashboard/dokumentasi/edit/(:any)']	= 'backend/dokumentasi/edit/$1';

// slider
$route['dashboard/slider']				= 'backend/slider';
$route['dashboard/slider/tambah']		= 'backend/slider/tambah';
$route['dashboard/slider/edit/(:any)']	= 'backend/slider/edit/$1';

// layanan
$route['dashboard/layanan']				= 'backend/layanan';
$route['dashboard/layanan/tambah']		= 'backend/layanan/tambah';
$route['dashboard/layanan/edit/(:any)']	= 'backend/layanan/edit/$1';

// donasi
$route['dashboard/donasi']				= 'backend/donasi';
$route['dashboard/donasi/tambah']		= 'backend/donasi/tambah';
$route['dashboard/donasi/edit/(:any)']	= 'backend/donasi/edit/$1';

// Profile
$route['dashboard/profile']					= 'backend/profile';
$route['dashboard/pendaftaran/tambah']		= 'backend/pendaftaran/tambah';
$route['dashboard/pendaftaran/pengaturan']	= 'backend/pendaftaran/pengaturan';
$route['dashboard/pendaftaran/edit/(:any)']	= 'backend/pendaftaran/edit/$1';

// Sistem
$route['dashboard/sistem']					= 'backend/sistem';
$route['dashboard/sistem/kontak']			= 'backend/sistem/kontak';

// DLL
$route['sitemap\.xml']			= 'sitemap';
$route['404_override'] 			= 'my404';
$route['translate_uri_dashes'] 	= FALSE;
