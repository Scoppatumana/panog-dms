<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>

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
                               <button onClick="_open_notification();"> <i class="fa fa-eye"></i> VIEW PAYMENTS</button>
                            </div>

                            
                        </div>
                    </div>
                </div>


                        <?php

                            $selectmember_query = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE member_id = '$s_member_id' ") or die('cannot select from database');
                            $selectmember_fetch = mysqli_fetch_array($selectmember_query);

                            $select_firstname= $selectmember_fetch['firstname'];
                            $select_email= $selectmember_fetch['email_address'];
                            $select_title= $selectmember_fetch['title'];
                            $select_lastname= $selectmember_fetch['lastname'];
                            $select_memberid= $selectmember_fetch['member_id'];
                            $select_middlename= $selectmember_fetch['middlename'];
                            $select_farm_capacity= $selectmember_fetch['farm_capacity'];
                            

                            if($select_farm_capacity == "0 - 1000 birds"){
                                $annual_due = "2500";
                            }else{
                                if($select_farm_capacity == "1000 - 5000 birds"){
                                    $annual_due = "10000";
                                }else{
                                    if($select_farm_capacity == "5000 - 10000 birds"){
                                        $annual_due = "20000";
                                }else{
                                    if($select_farm_capacity == "Above 50,000 birds"){
                                        $annual_due = "50000";
                                }
                            }
                        }
                    }

                        ?>



    
                    <div class="annual-dues-main-div animated animated zoomIn animated">

                         <h1>ANNUAL DUES</h1>

                         <input type="text" placeholder="Member Name" value="<?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?>" class="member-name">

                         <div class="information-div">
                            <h6> Dear <?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?> <?php echo $select_middlename ?> , </h6>
                            <p> You are eligible to pay a total sum of <?php echo $annual_due ?> annual due as a result of the fact that the bird capacity of your farm is <?php echo $select_farm_capacity ?> . </p>

                         </div>

                         <a href="payment-index.php?email=<?php echo $select_email ?>&amount=<?php echo $annual_due ?>&firstname=<?php echo $select_firstname ?>&lastname=<?php echo $select_lastname ?>">
                         <button>PROCEED TO PAYMENT</button><br />
                         </a>
                     



                        
                    </div>
   
              
    
            </div>
                    

            
        </div>


        <div class="notification-overall">
    <div class="notification-main">
      <div class="notification-header">
          <i class="fa fa-eye fa-lg"></i> View Payment
            <div class="close-window" onClick="_close_notification();">
              X
            </div>

      </div>
        <table>
            <th>
                reddy
            </th>
        </table>
      
    </div>
</div>






<script>
  function _open_notification() {
        $('.notification-overall').animate({'bottom':'0%'},200);
        $('.notification-main').animate({'margin-bottom':'0px'},400);
}

function _close_notification() {
        $('.notification-overall').animate({'bottom':'-1000%'},400);
        $('.notification-main').animate({'margin-bottom':'-250px'},200);
    }

</script>

         

    </body>
</html>