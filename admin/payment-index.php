<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>


<?php


    $email= $_GET['email'];
    $amount= $_GET['amount'];
    $first_name= $_GET['firstname'];
    $last_name= $_GET['lastname'];




?>
<html>
    <head>
        <title>Administrative Portal | PANOG-DMS</title>
        <?php include 'reference.php' ?>
    </head>
    <body>
                    <?php include 'header.php' ?>
        <div class="dashboard-main-div">
            <?php include 'admin-reference.php' ?>

            <div class="right-sided-div">
                <div class="bg-image-div staff-list-bg">
                    <div class="bg-cover">
                        <div class="dashboard-overall">

                            <div class="dashboard-admin-text staff-dashboard">
                                <span class="dashboard">
                                    <i class="fa fa-money"></i>
                                    Annual Due
                                </span>
                                    <br/>
                                <span class="admin-portal">
                                    Administrative Portal 
                                </span>
                            </div>

                            <div class="current-time button-div">
                            </div>

                            
                        </div>
                    </div>
                </div>


                        <?php

                            $selectmember_query = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE member_id = '$s_member_id' ") or die('cannot select from database');
                            $selectmember_fetch = mysqli_fetch_array($selectmember_query);

                            $select_firstname= $selectmember_fetch['firstname'];
                            $select_title= $selectmember_fetch['title'];
                            $select_lastname= $selectmember_fetch['lastname'];
                            $select_memberid= $selectmember_fetch['member_id'];
                            $select_middlename= $selectmember_fetch['middlename'];
                            $select_farm_capacity= $selectmember_fetch['farm_capacity'];
                            

                            if($select_farm_capacity == "0 - 1000 birds"){
                                $annual_due = "NGN2500";
                            }else{
                                if($select_farm_capacity == "1000 - 5000 birds"){
                                    $annual_due = "NGN10000";
                                }else{
                                    if($select_farm_capacity == "5000 - 10000 birds"){
                                        $annual_due = "NGN20000";
                                }else{
                                    if($select_farm_capacity == "Above 50,000 birds"){
                                        $annual_due = "NGN50000";
                                }
                            }
                        }
                    }

                        ?>



<div class="annual-dues-main-div paymentform-main animated animated zoomIn animated">
  <form action="pay.php" method="POST">
    <div class="form-group">
      
    <label for="">E-mail</label><br>
      <input type="email" name="email" id="email-address" placeholder="Email-Address" value="<?php echo $email ?>" required />
    </div>
    <div class="form-group">

    <label for="">Amount</label><br>
      <input type="number" id="amount" name="amount"  placeholder="Amount" value="<?php echo $amount ?>" required />
    </div>
    <div class="form-group">

      <label for="">First Name</label><br>
      <input type="text" id="first-name" placeholder="First Name" value="<?php echo $first_name ?>" />
    </div>
    <div class="form-group">
      
    <label for="">Last Name</label><br>
      <input type="text" id="last-name" placeholder="Last Name" value="<?php echo $last_name ?>" />
    </div>
    <div class="form-submit">
      
      <button type="submit" name="pay"> PAY </button>
    </div>
  </form>
       
</div>


</body>
</html>