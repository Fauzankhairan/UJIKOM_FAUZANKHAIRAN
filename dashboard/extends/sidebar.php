<div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="../dashboard/index.php" class="simple-text logo-mini">
        </a>
        <?php if ($_SESSION['data']['role'] == 'manager'){?>
        <a href="../dashboard/index.php" class="simple-text logo-normal">
          MieLoka as Manager
        </a>
        <?php } ?>
        <?php if ($_SESSION['data']['role'] == 'staff'){?>
        <a href="../dashboard/index.php" class="simple-text logo-normal">
          MieLoka as Staff
        </a>
        <?php } ?>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
        <?php if ($_SESSION['data']['role'] == 'staff'){?>
          <li>
            <a href="../dashboard/index.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <?php } ?>
          <li>
            <a href="../dashboard/data_produk.php">
              <i class="nc-icon nc-bank"></i>
              <p>Data Produk</p>
            </a>
          </li>
          <li>
            <a href="../dashboard/data_customer.php">
              <i class="nc-icon nc-diamond"></i>
              <p>Data Customer</p>
            </a>
          </li>
        <?php if ($_SESSION['data']['role'] == 'manager'){?>
          <li>
            <a href="../dashboard/data_staff.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Data Staff</p>
            </a>
          </li>
          <?php } ?>
          <li>
            <a href="../dashboard/data_transaksi.php">
              <i class="nc-icon nc-pin-3"></i>
              <p>Data Transaksi</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link" href="../views/home.php" id="navbarDropdownMenuLink">
                  Display
                </a>
                <a class="nav-link" href="../routers/R_login2.php?aksi=logout" id="navbarDropdownMenuLink">
                  Keluar
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>