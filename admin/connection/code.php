<?php include '../connection/connection.php' ?>
<?php include '../connection/session.php' ?>

<?php
    $action = $_GET['action']; //$_GET perform function on the url //
?>


        <!-- MEMBERS REGISTRATION -->
<?php 
    if ($action== 'registermember'){

        $checkemailquery = mysqli_query($conn, "SELECT * FROM `members_tab` WHERE `email_address`='$email_address'");
        $checkemail = mysqli_num_rows($checkemailquery);
        

        if($checkemail >0){
?>
                <script>
                    alert('Email allready exists');
                </script>

<?php
        }else{

        $counterid="MEMBER";

        $counterquery=mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM counter_tab WHERE counter_id='$counterid'");
        $counterqueryfetch=mysqli_fetch_array($counterquery);

        $countervalue=$counterqueryfetch['counter_value'];
        $member_id=$counterid."-"."00".$countervalue;



        // UPDATE THE COUNTER TAB //
        mysqli_query($conn, "UPDATE counter_tab SET counter_value='$countervalue' WHERE counter_id='$counterid'");



        // INSERT INTO MEMBER TAB //

        mysqli_query($conn, "INSERT INTO `members_tab`
        (`member_id`, `title`, `firstname`, `middlename`, `lastname`, `owners_lga`, `gender`, `email_address`, `home_address`, `role`, `farm_name`, `farm_address`, `farm_lga`, `types_of_birds`, `farm_capacity`, `date`)
         VALUES ('$member_id','$title','$firstname','$middlename','$lastname','$owners_lga','$gender','$email_address','$home_address','$role','$farm_name','$farm_address','$farm_lga','$types_of_birds','$farm_capacity', NOW())")
        or die('cannot insert into members-tab');
    
?>

            <script>
                window.parent(location="../registration-successful.php");
            </script>
<?php

    }
}
?>

            <!-- UPDATE THE MEMBERS TAB -->

<?php
    if($action == 'update-profile'){
        $member_id = $_GET['member_id'];
       mysqli_query($conn, "UPDATE members_tab SET `title`= '$title',`firstname`='$firstname',`middlename`='$middlename',
       `lastname`='$lastname',`owners_lga`='$owners_lga',`gender`='$gender',`email_address`='$email_address',`home_address`='$home_address',`role`='$role',
       `farm_name`='$farm_name',`farm_address`='$farm_address',`farm_lga`='$farm_lga',`types_of_birds`='$types_of_birds',
       `farm_capacity`='$farm_capacity' WHERE `member_id`='$member_id'") or die('cannot update members-tab');
    }
?>
        <script>
            window.parent(location="../update-successful.php");
        </script>
?>




<?php 
    if ($action== 'establishdues'){

        $counterid="ANNUALDUE";

        $counterquery=mysqli_query($conn, "SELECT counter_value+1 AS counter_value FROM counter_tab WHERE counter_id='$counterid'");
        $counterqueryfetch=mysqli_fetch_array($counterquery);

        $countervalue=$counterqueryfetch['counter_value'];
        $annualdue_id=$counterid."-"."".$countervalue;



        // UPDATE THE COUNTER TAB //
        mysqli_query($conn, "UPDATE counter_tab SET counter_value='$countervalue' WHERE counter_id='$counterid'");



        // INSERT INTO ANNUAL DUE TAB //

        mysqli_query($conn, "INSERT INTO `annual_due_tab`
        (`member_id`, `annual_due_id`, `annual_due_heading`, `annual_due_comment`, `date_established`)
         VALUES ('$s_member_id','$annualdue_id','$dueheading','$summary', NOW())")
        or die('cannot insert into annual-due-tab');

    
?>

            <script>
                window.parent(location="../registration-successful.php");
            </script>
<?php

    }

?>


<?php
    if ($action == 'myprofile'){
        
    }



?>