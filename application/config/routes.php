<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'auth/login'; // Mengarahkan root URL ke halaman login
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes untuk autentikasi
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';

// Routes untuk Dashboard
$route['dashboard'] = 'dashboard/index';

// Routes untuk Mahasiswa
$route['mahasiswa'] = 'mahasiswa/index'; // Halaman daftar mahasiswa
$route['mahasiswa/tambah'] = 'mahasiswa/tambah';
$route['mahasiswa/hapus/(:num)'] = 'mahasiswa/hapus/$1';
$route['mahasiswa/edit/(:num)'] = 'mahasiswa/edit/$1'; // (Opsional)

// Routes untuk Nilai
$route['nilai'] = 'nilai/index'; // Halaman daftar nilai
$route['nilai/tambah'] = 'nilai/tambah';
$route['nilai/hapus/(:num)'] = 'nilai/hapus/$1';
$route['nilai/edit/(:num)'] = 'nilai/edit/$1'; // (Opsional)

// Routes untuk Laporan
$route['laporan'] = 'laporan/index';
