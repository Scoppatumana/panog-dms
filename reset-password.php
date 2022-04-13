<?php include 'connection/connection.php' ?>
<?php 
$member_id = $_GET['member_id'];
?>
<html>
  <head>
  <?php include 'reference.php' ?>
    <title></title>
  </head>

  <body>
    
    <?php include 'header.php' ?>

    
    <div class="body-main-div">
      <div class="background-image">
        <div class="background-cover">
          <div class="login-overall-div">

                  <?php
                    $fetchotpquery = mysqli_query($conn,"SELECT * FROM `members_tab` WHERE `member_id`='$member_id'");
                    $fetchotp = mysqli_fetch_array($fetchotpquery);
                    $otp = $fetchotp['otp'];

                  ?>


                <form action="connection/code.php?action=reset-password&member_id=<?php echo $member_id?>&otp=<?php echo $otp?>" method="POST" enctype="multipart/form-data">


            <div class="next-div" id="next_1">    
              <div class="login-main-div animated animated fadeInLeft animated">
                <div class="header-login">
                  <p><i class="fa fa-key"></i> Reset Password</p>
                </div>

                <input type="text" placeholder="Enter OTP" name="OTP" id="OTP" value="<?php echo $otp ?>" required />
                <input type="password" placeholder="Create Password" name="createpassword" id="createpassword" required />
                <input type="password" placeholder="Confirm Password" name="confirmpassword" id="createpassword" required />


                <a href="admin/index.php"
                  ><button type="submit"><i class="fa fa-key"></i> Reset Password</button></a
                >
                <br />
              </div>
            </div>  



          </div>

                </form>
          <div class="welcome-text">
            <span class="welcome">PANOG REMO Welcomes you to </span> <br />
            <span class="edms"> eDMS </span>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p><i class="fa fa-copyright"></i>CopyRight: All Rights Reserved</p>
        <p class="date">
          <span>Date:</span> Wednesday, 04 March 2021
          <span>Time:</span> 07:46<sup>PM</sup><br/>
        </p>
      </div>
    </div>

    
  </body>
</html>
