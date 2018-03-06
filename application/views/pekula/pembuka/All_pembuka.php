<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>

      <?php
      // two segment link
        if ($this->uri->segment(2) == 'register') {
          echo "Dafarkan diri kmu dan mulai bergabung bersama pesona kuliner lampung | PEKULA";
        } else if ($this->uri->segment(2) == 'images') {
          echo "Edit Images pada profile kamu | Pesona Kuliner Lampung | PEKULA";
        } else if ($this->uri->segment(2) == 'infodata') {
          echo "Infodata | Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";
        } else if ($this->uri->segment(2) == 'password') {
          echo "Password | Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";

      // one segment link
        } else if ($this->uri->segment(1) == 'account') {
          echo "Account | Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";
        } else if ($this->uri->segment(1) == 'restaurant') {
          echo "Restaurant | Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";
        } else if ($this->uri->segment(1) == 'home') {
          echo "Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";
        } else if ($this->uri->segment(1) == '') {
          echo "Pesona Kuliner Lampung | Mencari tempan makanan atau restroran di Lampung";
        }
      ?>

    </title>

    <!-- style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/materialize.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/tambahan.css'); ?>">

    <!--  icon style  -->
    <link rel="icon" type="images/x-icon" href="<?php echo base_url('assets\img\user-vektor.png');?>">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!--  Online Font with google Font
            for heading     => font-family: 'Patua One', cursive;
            for paragraph   => font-family: 'Montserrat', sans-serif;
    -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Patua+One" rel="stylesheet">

  </head>
  <body>
