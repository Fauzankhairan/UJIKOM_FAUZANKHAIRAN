<?php
include_once '../controllers/C_login.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MieLoka</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="../assets/images/icons/MIELOKA.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="../assets/css/style.css">
  <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>
<body>



  <header>


    <div class="header-main">

      <div class="container">

        <a href="../views/" class="header-logo">
          <img src="../assets/images/icons/judul.png" alt="">
        </a>


        <?php
        if(isset($_SESSION['login'])){
        ?>
        <div class="header-user-actions">
        <?php if (($_SESSION['data']['role'] == 'manager')){?>
        <a href="../dashboard/index.php">Dashboard</a>
        <?php } ?>
        <?php if ($_SESSION['data']['role'] == 'staff'){?>
        <a href="../dashboard/index.php">Dashboard</a>
        <?php }} ?>
        </ul>
        </div>

      </div>

    </div>



  </header>
