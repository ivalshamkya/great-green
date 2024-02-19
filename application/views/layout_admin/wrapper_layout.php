<?php

//cek sudah login atau belum
$this->lib_login->proteksi_halaman();

//cek yang akses admin atau bukan
$this->lib_login->proteksi_admin();

//penggabungan file
require_once('head_layout.php');
require_once('content_layout.php');
require_once('foot_layout.php');