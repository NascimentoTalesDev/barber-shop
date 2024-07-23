<?php
  include_once("config/url.php");
  include_once("db/process.php");
  include_once("components/message.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Barber Shop</title>
  <link rel="stylesheet" href="<?= $BASE_URL ?>/styles/main.css">
  <link rel="shortcut icon" href="<?= $BASE_URL ?>/images/favicon.ico" type="image/x-icon">
  <!-- Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <aside id="aside" class="shadow">
      <div id="logo-container">
        <a id="logo" href="<?= $BASE_URL ?>index.php">Barber Shop</a>  
      </div>
      <div class="line"></div>
      <div id="aside-items">
        <ul>
          <li><a class="aside-item" href="<?= $BASE_URL ?>index.php"><i class="fa-solid fa-house"></i>Dashboard</a></li>
          <li><a class="aside-item" href="<?= $BASE_URL ?>clients.php"><i class="fa-solid fa-address-book"></i>Clients</a></li>
          <li><a class="aside-item" href="<?= $BASE_URL ?>services.php"><i class="fa-solid fa-credit-card"></i>Services</a></li>
        </ul>
      </div>
    </aside>
    
  