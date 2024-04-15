<!DOCTYPE html>
<html lang="en">
<head>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CS210 - VVS Den - Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logoicon.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand
  * Updated: Jan 09 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <style>
        html {
  overflow-x: hidden;
        }
        #header {
  height: 80px;
  transition: all 0.5s;
  z-index: 997;
  transition: all 0.5s;
}

#header.header-scrolled {
  background: rgba(39, 70, 133, 0.8);
  height: 60px;
}

#header .logo h1 {
  font-size: 28px;
  margin: 0;
  padding: 4px 0;
  line-height: 1;
  font-weight: 500;
}

#header .logo h1 a,
#header .logo h1 a:hover {
  color: #000000;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 40px;
}
/* Add this CSS code to change text color to black */
body {
    color: #000 !important;
}

a {
    color: #000;
}

h1, h2, h3, h4, h5, h6, .font-heading {
    color: #000;
}

.text-black {
    color: #000 !important;
}

.text-primary {
    color: #00080e !important;
}

/* Add all other CSS styles from the provided file here */
  -------------------------------------------------------------*/
        html { overflow-x: hidden; }
        body { font-family: "Arial", sans-serif; color: #9fa1a4; line-height: 1.5; }
        a { color: #777; text-decoration: none; transition: 0.3s all ease; }
        /* Add all other CSS styles from the provided code here */
    </style>
    <title><?= $VVSDen ?? 'Home' ?></title>

<body>
<section class="hero-section" id="hero">


<main>
<?php flash() ?>