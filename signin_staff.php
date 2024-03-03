<?php
include_once 'controllers/C_login2.php';

if(isset($_SESSION['login'])){
    if($_SESSION['role'] == 'manager'){
        header("location: dashboard/");
    }elseif ($_SESSION['role'] == 'staff'){
      header("location: dashboard/");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Shooesway</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/icons/MIELOKA.png">
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.8/css/line.css"
    />
    <link rel="stylesheet" href="assets/css/signin.css" />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <section>
        <form action="routers/R_login2.php?aksi=login" method="POST">
          <h1>Sign In as Staff</h1>
            <div class="inputbox">
                <i class="uil uil-user"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="inputbox">
                <i class="uil uil-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" value="Login" id="login" name="login">Masuk</button>
        </form>
    </section>
  </body>
</html>
