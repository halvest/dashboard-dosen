<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= isset($title) ? $title : 'Dashboard Dosen'; ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/custom.css'); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
    }

    #sidebar {
        width: 250px;
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        background: #343a40;
        color: #fff;
        transition: transform 0.3s ease;
        transform: translateX(0);
    }

    #sidebar.collapsed {
        transform: translateX(-250px);
    }

    .nav-link {
        color: #fff;
    }

    .nav-link:hover {
        background: #495057;
    }
    
    .layer-bottom {
    position: relative;
    z-index: -1;
    }
    .card-header {
    font-weight: bold;
    }
    .card-body form .form-label {
    font-weight: 600;
    }
    .btn {
    transition: background-color 0.3s ease-in-out;
    }
    .btn:hover {
    opacity: 0.9;
    }


    #content {
        margin-top: 70px; /* Tambahkan margin untuk jarak dari header */
    }

    #content.fullwidth {
        margin-left: 0;
    }

    .navbar {
        z-index: 1000;
    }

    .logout-button {
        position: absolute;
        bottom: 20px;
        width: calc(100% - 30px);
    }
</style>
</head>

