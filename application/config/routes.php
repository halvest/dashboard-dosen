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

// Routes untuk Dashboard
$route['dashboard'] = 'dashboard/index'; // Halaman utama dashboard
$route['dashboard/tambah_mahasiswa'] = 'dashboard/tambah_mahasiswa'; // Halaman tambah mahasiswa
$route['dashboard/hapus_mahasiswa'] = 'dashboard/hapus_mahasiswa'; // Halaman hapus mahasiswa
$route['dashboard/tambah_nilai'] = 'dashboard/tambah_nilai'; // Halaman tambah nilai
$route['dashboard/hapus_nilai'] = 'dashboard/hapus_nilai'; // Halaman hapus nilai
$route['dashboard/laporan_nilai'] = 'dashboard/laporan_nilai'; // Halaman laporan nilai

// Routes untuk Laporan
$route['laporan'] = 'laporan/index';
