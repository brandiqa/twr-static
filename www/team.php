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

        <!-- class="col m3 s12 -->
        <?php include 'layouts/about_sidenav.html'; ?>

        <div class="col m9 s12">
          <h1>Meet the Team</h1>
          <img src="images/placeholder_1000x320.svg" alt="put picture here" width="1000" height="200" class="responsive-img"/>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <h2>Management</h2>

            <!-- ceo -->
          <div class="row manager">
            <div class="col m4 s12">
              <img src="img/user_female_01.svg" alt="Manager" class="responsive-img"/>
            </div>
            <div class="col m8 s12">
              <span class="manager-name">Full Names</span>
              <span class="manager-position">Mangerial Position</span>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col s12">
               <hr>
            </div>
          </div>

          <!-- manager 01 -->
          <div class="row manager">
            <div class="col m8 s12">
              <span class="manager-name">Full Names</span>
              <span class="manager-position">Mangerial Position</span>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
            <div class="col m4 s12">
              <img src="img/user_male_02.svg" alt="Manager" class="responsive-img"/>
            </div>
            <div class="col s12">
               <hr>
            </div>
          </div>

            <!-- manager 02 -->
          <div class="row manager">
            <div class="col m4 s12">
              <img src="img/user_female_03.svg" alt="Manager" class="responsive-img"/>
            </div>
            <div class="col m8 s12">
              <span class="manager-name">Full Names</span>
              <span class="manager-position">Mangerial Position</span>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
              </p>
            </div>
          </div>

          <h2>Team Members</h2>
          <div class="row">
            <div class="col s12">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
              </p>
            </div>
          </div>
          <div class="row">

            <?php

            $profiles = array("user_male_01.svg","user_female_01.svg","user_male_02.svg","user_female_02.svg","user_male_01.svg","user_female_03.svg");

            for ($x = 0; $x <= 5; $x++) { ?>

              <!-- team template -->
              <div class="col l4 m6 s12">
                <div class="card team">
                  <div class="card-image waves-effect waves-block waves-light">
                    <?php $profile = "img/".$profiles[$x]; ?>
                    <img class="activator responsive-img" src=<?php echo $profile ?> alt="put name here">
                  </div>
                  <div class="card-content">
                    <span class="card-title team-name activator">
                      First Last Names<i class="material-icons right">more_vert</i>
                    </span>
                    <span class="team-department">Department</span>
                    <span class="team-position">Team Position</span>
                    <span class="team-phrase">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua."</span>
                  </div>
                  <div class="card-reveal">
                    <span class="card-title grey-text text-darken-4">First Last Names<i class="material-icons right">close</i></span>
                    <p>Here is some more information about this team member</p>
                    <p>
                      Stephanie is a creative force in the world of visual communication. With a strong background in fine art and years of experience as both an agency and freelance designer, Stephanie keeps a foot in both worlds by looking to create designs that are at once beautiful and effective. As the director of S4’s creative team, she pulls from the group’s diverse and unique skill set to push the creative capabilities to the next level and ensure that the visual output from Station Four exceeds all expectations.
                    </p>
                  </div>
                </div>
              </div>
              <!-- end of team template -->

            <?php } ?>

          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    <?php require 'layouts/footer.html';  ?>

  </body>
</html>
