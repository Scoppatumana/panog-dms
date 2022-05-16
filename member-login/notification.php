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
                                    <i class="fa fa-bell"></i>
                                    Notification
                                </span>
                                    <br/>
                                <span class="admin-portal">
                                    Administrative Portal 
                                </span>
                        </div>

                        

                            
                    </div>
                </div>
            </div>


           
            <div class="notification-main">
           



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
                    <div class="passport">
                        <img alt="Passport" src="images/863.jpg">
                    </div>
                    <div class="notification-text">
                            <h4><?php echo $find_title ?> <?php echo $find_lastname ?> <?php echo $find_firstname ?> <?php echo $find_middlename ?> </h4>
                            <p><?php echo $select_due_heading ?></p>
                            <p><?php echo $select_due_comment ?></p>
                    </div>
                </div>

                <?php } ?>



                

            </div>





            
            

                

        
            
           
      
            
            
        </div>
       
    </div>

</body>
</html>