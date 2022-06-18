<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>
<?php include 'reference.php' ?>


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
     <li class="menu-bar" onClick="_open_menu();"> <i class="fa fa-bars fa-lg"></i></li>
    </ul>
   <span class="notification" onClick="_open_notification();"> <i class="fa fa-bell"></i>
      
      <div class="numbers">
        <?php echo $notification ?>
      </div>

            
    </span>
    
      <h1><span id="words">Ounje'l'Eyin </span></h1>
  </div>

      
</header>



<div class="menu-bar-overall-div" onClick="_close_menu();">
        <div class="side-menu-bar">
            <ul class="side-bar-ul">
             <a href="index.php"><li class="side-bar-li">Dashboard</li></a>
             <a href="registration-form.php"><li class="side-bar-li">Members</li></a>
             <a href="annualdues.php"><li class="side-bar-li">Annual Due</li></a>
             <a href=""><li class="side-bar-li">Ounje'l'eyin Due</li></a>
             <a href=""><li class="side-bar-li">Feed Sub Dues</li></a>
             <a href=""><li class="side-bar-li">Ceremonial Dues</li></a>
             <a href=""><li class="side-bar-li">New Year Party</li></a>
             <a href=""><li class="side-bar-li">Sign-out</li></a>
            </ul>
        </div>
</div>

<div class="notification-overall">
    <div class="notification-main">
      <div class="notification-header">
          <i class="fa fa-bell fa-lg"></i> Notification
      </div>

      <div class="notification-body">


             

      <?php
                    $selectmember_query = mysqli_query($conn, "SELECT * FROM `annual_due_tab`") or die('cannot select from database');
                    while ($selectmember_fetch = mysqli_fetch_array($selectmember_query)) {

                        $select_memberid= $selectmember_fetch['member_id'];
                        $select_due_heading= $selectmember_fetch['annual_due_heading'];
                        $select_due_comment= $selectmember_fetch['annual_due_comment'];



                        $findmember_query = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE member_id = '$select_memberid' ") or die('cannot select from database');
                        $findmember_fetch = mysqli_fetch_array($findmember_query);
        
                        $find_firstname= $findmember_fetch['firstname'];
                        $find_title= $findmember_fetch['title'];
                        $find_lastname= $findmember_fetch['lastname'];
                        $find_middlename= $findmember_fetch['middlename'];

    
                ?>
            <div class="notification-proper">

              <div class="picture-div">
                  <img src="images/863.jpg" alt="">
              </div>
              
              <div class="notification-text">
                <h6> <?php echo $find_title ?> <?php echo $find_lastname ?> <?php echo $find_firstname ?></h6>
                <p class="heading"><?php echo $select_due_heading ?></p>
                <p class="heading message"><?php echo $select_due_comment ?></p>
              </div>

              <button><i class="fa fa-eye"></i> VIEW</button>

            </div>

            <?php } ?>
      </div>

    </div>
</div>

<script>
  function _open_notification() {
        $('.notification-overall').animate({'bottom':'0%'},300);
        $('.notification-main').animate({'margin-bottom':'0px'},600);
    }
</script>