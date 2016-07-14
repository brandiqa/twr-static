<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Team| Trans World Radio Kenya</title>

    <!-- stylesheets -->
    <?php require 'layouts/stylesheets.html'; ?>
  </head>
  <body>

    <!-- navigation -->
    <?php require 'layouts/navbar.html'; ?>

    <!-- Breadcrumbs -->
    <nav>
      <div class="nav-wrapper">
        <div class="container">
          <div class="col s12">
            <a href="home.html" class="breadcrumb">
              <i class="small material-icons">home</i> Home
            </a>
            <a href="about-us.html" class="breadcrumb">About us</a>
          </div>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div id="page-content" class="container">
      <div class="row">
        <?php include 'layouts/about_sidenav.html'; ?>
      </div>
    </div>

    <!-- footer -->
    <?php require 'layouts/footer.html';  ?>

  </body>
</html>
