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



    
                    <div class="annual-dues-main-div animated animated zoomIn animated">

                         <h1>ANNUAL DUES</h1>

                         <input type="text" placeholder="Member Name" value="<?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?>" class="member-name">

                         <div class="information-div">
                            <h6> Dear <?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?> <?php echo $select_middlename ?> , </h6>
                            <p> You are eligible to pay a total sum of <?php echo $annual_due ?> annual due as a result of the fact that the bird capacity of your farm is <?php echo $select_farm_capacity ?> . </p>

                         </div>

                         <a href="payment-index.php">
                         <button>PROCEED TO PAYMENT</button>
                         </a>



                         <p class="paid" onClick="_show_establish_dues();">I have paid my dues</p>

                    </div>
   
              
    
            </div>
                    

            
        </div>



               


                <form action="connection/code.php?action=verifypayment" method="POST" enctype="multipart/form-data">  
        <div class="establish-dues">
        <div class="establish-dues-main">
                <div class="establish-dues-header">
                    <h1><i class="fa fa-plus-square"></i> Payment Confirmation</h1>
                </div>

                <label for="" >AMOUNT PAID<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                <input type="number" placeholder="" name="amountpaid" id="amountpaid" required> 
                

                <div class="buttons-div">
                <button type="submit" class="establish"> <i class="fa fa-eye"></i> CONFIRM</button>
                <button type="button" class="close" onClick="_hide_establish_dues();"> <i class="fa fa-window-close-o"></i> CLOSE</button>
                </div>
            </div>
        </div>

                </form>
        
<script>
     function _show_establish_dues() {
        $('.establish-dues').animate({'top':'0%'},100);
        $('.establish-dues-main').animate({'margin-top':'0px'},500);
    }

    function _hide_establish_dues() {
        $('.establish-dues').animate({'top':'-1000%'},1000);
        $('.establish-dues-main').animate({'margin-top':'-250px'},600);
    }
</script>
    </body>
</html>