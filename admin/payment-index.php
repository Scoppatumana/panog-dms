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
                               <button onClick="_show_establish_dues();"> <i class="fa fa-pencil-square-o"></i> ESTABLISH PAYMENT</button>
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
      
      <input type="email" name="email" id="email-address" placeholder="Email-Address" value="<?php echo $email ?>" required />
    </div>
    <div class="form-group">
      
      <input type="number" id="amount" name="amount"  placeholder="Amount" value="<?php echo $amount ?>" required />
    </div>
    <div class="form-group">
      
      <input type="text" id="first-name" placeholder="First Name" value="<?php echo $first_name ?>" />
    </div>
    <div class="form-group">
      
      <input type="text" id="last-name" placeholder="Last Name" value="<?php echo $last_name ?>" />
    </div>
    <div class="form-submit">
      
      <button type="submit" name="pay"> PAY </button>
    </div>
  </form>
       
</div>





</body>
   
              
    
            </div>
                    

            
        </div>



      <form action="connection/code.php?action=establishdues" method="POST" enctype="multipart/form-data">  
        <div class="establish-dues">
            <div class="establish-dues-main">
                <div class="establish-dues-header">
                    <h1><i class="fa fa-plus-square"></i> Dues Establishment</h1>
                </div>

                <label for="" >Due Heading<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                <input type="text" placeholder="Due Heading" name="dueheading" id="dueheading" required> 
                
                <label for="" >Comment<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                <textarea cols="46" rows="10" name="summary" id="summary" required></textarea>

                <div class="buttons-div">
                <button type="submit" class="establish"> <i class="fa fa-plus-square"></i> ESTABLISH</button>
                <button type="button" class="close" onClick="_hide_establish_dues();"> <i class="fa fa-window-close-o"></i> CLOSE</button>
                </div>
            </div>
        </div>

      </form>
        

    </body>
</html>