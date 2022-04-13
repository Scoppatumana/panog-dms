<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>


<header class="animated animated fadeInDown animated">
  <div class="header-div-inner">
    <div class="logo-div">
      <img src="images/logo.png" alt="OOU IMAGE" />
    </div>

          <?php

            $checkannualduequery = mysqli_query($conn, "SELECT * FROM `annual_due_tab`");
            $checkannualdue = mysqli_num_rows($checkannualduequery);

            if ($checkannualdue > 99) {
              $checkannualdue = "99+";
            }


          ?>



    <ul class="nav-bar">
     <a href="view-members.php?member_id=<?php echo $s_member_id ?>"> <li> <i class="fa fa-user-circle"></i> My Profile</li></a>
    </ul>
    <span class="notification"> <i class="fa fa-bell"></i>
      
      <div class="numbers">
        <?php echo $checkannualdue ?>
      </div>

            
    </span>

    

    <h1><span id="words">Ounje'l'Eyin </span></h1>
  </div>

      
</header>