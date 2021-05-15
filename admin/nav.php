<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="application-name" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Abuswani | <?php echo ucfirst($active); ?></title>
    <!-- Css Styles... -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/bootstrap-glyphicons.min.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- Script -->
    <script src="./assets/js/jquery.js" charset="utf-8"></script>
    <script src="./assets/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="./assets/js/custom.js" charset="utf-8"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">Abuswani</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <?php if (!isset($_SESSION['auth_status'])) : ?>
              <li class="nav-item">
                <a class="nav-link <?php if (strtolower($active) === 'login') echo 'active'; ?>" href="<?php echo BASE_URL; ?>index.php">Login</a>
              </li>
            <?php elseif (isset($_SESSION['auth_status'])) : ?>
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>dashboard.php" class="nav-link <?php if (strtolower($active) === 'dashboard') echo 'active'; ?>">Dashboard</a>
              </li>
              <li class="nav-item">
                <a href="<?php echo BASE_URL; ?>view_products.php" class="nav-link <?php if (strtolower($active) === 'dashboard') echo 'active'; ?>">View Products</a>
              </li>
            <?php endif; ?>
            <?php if (isset($_SESSION['auth_status'])) : ?>
              <li class="nav-item">
                <a class="nav-link" style="color:white;" href="<?php echo BASE_URL; ?>logout.php">Logout</a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </nav>
