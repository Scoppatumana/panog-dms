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
                                    <i class="fa fa-user"></i>
                                    Member list
                                </span>
                                    <br/>
                                <span class="admin-portal">
                                    Administrative Portal 
                                </span>
                        </div>

                        <div class="current-time button-div">
                               <a href="member_registration.php"><button> <i class="fa fa-pencil-square-o"></i> REGISTER MEMBER</button></a>
                        </div>

                            
                    </div>
                </div>
            </div>


                

   

            <div class="staff-list-overall-div">

            <?php 
            $no=0; 
                $selectmember_query = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE `member_id` != '$s_member_id'");
                while ($selectmember_fetch = mysqli_fetch_array($selectmember_query)) {
                    $no++;
                $select_firstname= $selectmember_fetch['firstname'];
                $select_title= $selectmember_fetch['title'];
                $select_lastname= $selectmember_fetch['lastname'];
                $select_memberid= $selectmember_fetch['member_id'];

                ?>

                <div class="staff-list-proper">
                    <div class="passport-div">
                        <img src="images/863.jpg" alt="">
                    </div>
                    <h3> <?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?></h3>
                    <p> Member id: <span class="staff-id"><?php echo $select_memberid ?></span></p>
                    <div class="buttons">
                       
                    <a href="view-members.php?member_id=<?php echo $select_memberid ?>"><button class="view"> VIEW</button></a>
                    <a href=""><button class="delete"> DELETE</button></a>
                    </div>  
                    
                </div>
                 
                <?php 
                    }
                ?> 
            </div>
      
            
            
        </div>
       
    </div>

</body>
</html>