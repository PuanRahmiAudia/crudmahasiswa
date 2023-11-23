<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>BPF | Puan Rahmi Audia</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
        rel="stylesheet" type="text/css" />
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?=base_url('assets/')?>css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-custom fixed-top mb-5" style="background-color:#b38b6d;"id="mainNav">
        <div class="container fluid">
            <a class="navbar-brand" href="#page-top">Sistem BPF</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse container px-4 px-lg-5 h-20" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                <?php
            if ($user['role'] == 'admin'){ ?>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('Mahasiswa/')?>">Mahasiswa</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= site_url('prodi/')?>">Program Studi</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout')?>">Logout</a></li>
            <?php } else { ?>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('profil/')?>">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="<?= base_url('auth/logout')?>">Logout</a></li>
            <?php } ?>
                </ul>
            </div>
            <a class="nav-link dropdown-toggle" href="<?= base_url('profil/')?>" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true">
                
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$user['nama'];?></span>
                <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/').$user['gambar'];?>" width=50px height=50px>
            </a>
        </div>
    </nav>
