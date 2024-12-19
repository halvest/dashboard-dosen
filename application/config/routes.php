<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Default route
$route['default_controller'] = 'auth/login'; // Arahkan ke login saat root URL diakses
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Routes untuk autentikasi
$route['login'] = 'auth/login';
$route['register'] = 'auth/register';
$route['logout'] = 'auth/logout';

// Routes untuk admin

$route['admin'] = 'admin/index';
$route['admin/kelola_mahasiswa'] = 'admin/kelola_mahasiswa';
$route['admin/tambah_mahasiswa'] = 'admin/tambah_mahasiswa';
$route['admin/edit_mahasiswa/(:any)'] = 'admin/edit_mahasiswa/$1';
$route['admin/hapus_mahasiswa/(:any)'] = 'admin/hapus_mahasiswa/$1';
$route['admin/input_nilai'] = 'admin/input_nilai';
$route['admin/kelola_jadwal'] = 'admin/kelola_jadwal';

// Routes untuk dosen
$route['dosen'] = 'dosen/index'; // Dashboard Dosen
$route['dosen/kelola_nilai'] = 'dosen/kelola_nilai';
$route['dosen/tambah_nilai'] = 'dosen/tambah_nilai';
$route['dosen/hapus_nilai/(:num)'] = 'dosen/hapus_nilai/$1';

// Routes untuk mahasiswa
$route['mahasiswa'] = 'mahasiswa/index'; // Dashboard Mahasiswa
$route['mahasiswa/nilai'] = 'mahasiswa/lihat_nilai';
