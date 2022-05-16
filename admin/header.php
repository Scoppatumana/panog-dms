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

            $checkpaymentquery = mysqli_query($conn, "SELECT * FROM `payment_verification_tab`");
            $checkpayment = mysqli_num_rows($checkpaymentquery);

            $notification=  $checkannualdue + $checkpayment ;

            if ($notification > 50) {
              $notification = "50+";
            }


    ?>



    <ul class="nav-bar">
     <a href="view-members.php?member_id=<?php echo $s_member_id ?>"> <li> <i class="fa fa-user-circle"></i> My Profile</li></a>
    </ul>
   <a href="notification.php"> <span class="notification"> <i class="fa fa-bell"></i>
      
      <div class="numbers">
        <?php echo $notification ?>
      </div>

            
    </span></a>

    

    <h1><span id="words">Ounje'l'Eyin </span></h1>
  </div>

      
</header>