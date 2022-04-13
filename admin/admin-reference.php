<?php include 'connection/connection.php' ?>
<?php include 'connection/session.php' ?>


<div class="left-sided-div animated animated fadeInLeft animated">

<!-- PROFILE INDEX -->
<div class="profile-div">
    
<?php
            $selectmember_query = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE member_id = '$s_member_id' ") or die('cannot select from database');
            $selectmember_fetch = mysqli_fetch_array($selectmember_query);
           
             $select_firstname= $selectmember_fetch['firstname'];
             $select_title= $selectmember_fetch['title'];
             $select_lastname= $selectmember_fetch['lastname'];
             $select_memberid= $selectmember_fetch['member_id'];

        ?>

    <div class="picture-div">
        <img alt="Passport" src="images/863.jpg">
    </div>
   
        

    <h6>
        <?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?>
    </h6>
    <p> <i>Member ID</i><span>: <?php echo $select_memberid ?> </span></p>
    <input class="hiddeninput"  type="file" style="display:none;" >

    <input type="hidden" name="del_passport" value="<?php echo $passport ?>"/>
    
    <button name="submitpassport" type="submit"> Upload Image</button>

   
    </div>
    



<!-- DASHBOARD INDEX -->
<div class="dashboard-list">
    <ul>
        <a href="index.php"><li class="active"><i class="fa fa-dashboard"></i> Dashboard</li></a>
        <a href="members_list.php"><li><i class="fa fa-users"></i> Members</li></a>
        <li class="annual-dues"><i class="fa fa-credit-card"></i> Yearly Dues
    
    
        <div class="side-menu-1">

            <ul>
                <a href="annualdues.php"><li>Annual Due</li> </a>
                <a href="registration-successful.php"><li> Ounje'l'eyin Due</li> </a>

            </ul>

        </div>

    
    
    
        </li>

            



        <a href="faculty-table.php"><li><i class="fa fa-building"></i> Feed Sub Dues</li></a>
        <a href="lectures.php"><li><i class="fa fa-book"></i> Ceremonial Dues
            <div class="side-menu-1">

                <ul>
                    <li><i class="fa fa-sign-out"></i> World Egg Day</li> 
                    <li><i class="fa fa-sign-out"></i> New Year Party</li> 

                </ul>

            </div>
    
    </li></a>
        <li><i class="fa fa-sign-out"></i> Sign-out</li>
    </ul>
</div>

</div>