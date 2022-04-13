<?php
    include 'connection/connection.php' 
    ?>
    <?php
    $member_id= $_GET['member_id'];
?>
<html>
    <head>
    <title>Members Portal | PANOG-DMS</title>
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
                                    <i class="fa fa-user-circle"></i>
                                    Member Profile
                                </span>
                                    <br/>
                                <span class="admin-portal">
                                Members Portal 
                                </span>
                            </div>

                            <div class="current-time button-div">
                              
                            </div>

                            
                        </div>
                    </div>
                </div>


                <?php
                    $getmember_query= mysqli_query($conn, "SELECT * FROM `members_tab` WHERE `member_id`= '$member_id'") or die('cannot select');
                    $getmember = mysqli_fetch_array($getmember_query);

                    $Firstname= $getmember['firstname'];
                    $Middlename= $getmember['middlename'];
                    $Lastname= $getmember['lastname'];
                    $lga= $getmember['owners_lga'];
                    $Gender= $getmember['gender'];
                    $Title= $getmember['title'];
                    $email= $getmember['email_address'];
                    $homeaddress= $getmember['home_address'];
                    $Role= $getmember['role'];
                    $Farm_name= $getmember['farm_name'];
                    $Farm_address= $getmember['farm_address'];
                    $Farm_lga= $getmember['farm_lga'];
                    $Types_of_birds= $getmember['types_of_birds'];
                    $Farm_capacity= $getmember['farm_capacity'];
                ?>

                
                <form action="connection/code.php?action=update-profile&member_id=<?php echo $member_id ?>" method="POST" enctype="multipart/form-data">
               
            <div class="staff-list-overall-div student-reg-overall-div">
                
                    <fieldset>
                        <legend>Owner's Information</legend>

                        <div class="individual-input">
                            <label for="">Title:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="title" id="title" required>
                                
                                <option value="<?php echo $Title ?>"selected><?php echo $Title ?></option>
                                <?php if($Title == "Mr") {
                                ?>
                                    <option value="Mrs">Mrs</option>
                                <?php
                                }else{
                                ?>
                                    <option value="Mr">Mr</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>


                        <div class="individual-input">
                            <label for="">First Name :<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup></label><br/>
                            <input type="text" placeholder="First Name" name="firstname" id="firstname" value="<?php echo $Firstname ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Middle Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Middle Name" name="middlename" id="middlename" value="<?php echo $Middlename ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Last Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Last Name" name="lastname" id="lastname" value="<?php echo $Lastname ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">L.G.A:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="L.G.A" name="owners_lga" id="owners_lga" value="<?php echo $lga ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Gender:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="gender" id="gender">
                            <option value="<?php echo $Gender ?>"selected><?php echo $Gender ?></option>
                                <?php if($Gender == "Male") {
                                ?>
                                    <option value="Female">Female</option>
                                <?php
                                }else{
                                ?>
                                    <option value="Male">Male</option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>

                        <div class="individual-input">
                            <label for="">Home Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Home Address" name="home_address" id="home_address" value="<?php echo $homeaddress ?>" required>
                        </div>

                        <div class="individual-input">
                            <label for="">Email Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="email" placeholder="Email Address" name="email_address" id="email_address" value="<?php echo $email ?>" required>
                        </div>

                        <div class="individual-input">
                            <label for="">Role:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="role" id="role" required>
                                <option value="<?php echo $Role ?>"><?php echo $Role ?></option>
                                <?php if($Role == 'Member'){
                                 ?>   
                                <option value="Administrator">Administrator</option>
                                <?php
                                
                                }else{
                                ?>
                                <option value="Member">Member</option>
                                <?php
                                }
                                ?>
                                
                            </select>
                        </div>

                    </fieldset>

                    <fieldset>
                        <legend>Farm Information</legend>
                        <div class="individual-input">
                            <label for="">Farm Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Country" name="farm_name" id="farm_name" value="<?php echo $Farm_name ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Farm Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="City" name="farm_address" id="farm_address" value="<?php echo $Farm_address ?>" required>
                        </div>
                        <div class="individual-input">
                            <label for="">LGA:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="LGA" name="farm_lga" id="farm_lga" value="<?php echo $Farm_lga ?>" required>
                        </div>
                        
                       
                       
                    </fieldset>


                    <fieldset>
                        <legend>Birds Information</legend>


                        <div class="Checkbox-div" style="min-width: 200px; text-align: left; margin-top: 10px; margin-left: 30px;">

                        <label for="" style= "margin-left: -5px;">Choose the types of birds on your farm </label><br/>

                        <?php if($Types_of_birds == 'Layers'){
                        ?>
                        <input type="radio" id="types_of_birds" value="Layers" name="types_of_birds" checked>
                        <label for="layers"> Layers</label><br/>

                        <input type="radio" id="types_of_birds" value="Broiler" name="types_of_birds">
                        <label for="broilers"> Broilers</label><br/>

                        <input type="radio" id="types_of_birds" value="Cockerel" name="types_of_birds">
                        <label for="cockerel"> Cockerel</label><br/>

                        <input type="radio" id="types_of_birds" value="All of the above" name="types_of_birds">
                        <label for="all of the above"> All of the above</label><br/>
                        <?php
                        }else{
                            if($Types_of_birds == 'Broiler'){
                        ?>
                                <input type="radio" id="types_of_birds" value="Layers" name="types_of_birds" >
                                <label for="layers"> Layers</label><br/>
        
                                <input type="radio" id="types_of_birds" value="Broiler" name="types_of_birds" checked>
                                <label for="broilers"> Broilers</label><br/>
        
                                <input type="radio" id="types_of_birds" value="Cockerel" name="types_of_birds">
                                <label for="cockerel"> Cockerel</label><br/>
        
                                <input type="radio" id="types_of_birds" value="All of the above" name="types_of_birds">
                                <label for="all of the above"> All of the above</label><br/>
                        <?php
                            }else{
                                if($Types_of_birds == 'Cockerel'){
                                    ?>
                                            <input type="radio" id="types_of_birds" value="Layers" name="types_of_birds" >
                                            <label for="layers"> Layers</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="Broiler" name="types_of_birds" >
                                            <label for="broilers"> Broilers</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="Cockerel" name="types_of_birds" checked>
                                            <label for="cockerel"> Cockerel</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="All of the above" name="types_of_birds">
                                            <label for="all of the above"> All of the above</label><br/>
                                    <?php
                            }else{
                               
                                    ?>
                                            <input type="radio" id="types_of_birds" value="Layers" name="types_of_birds" >
                                            <label for="layers"> Layers</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="Broiler" name="types_of_birds" >
                                            <label for="broilers"> Broilers</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="Cockerel" name="types_of_birds" >
                                            <label for="cockerel"> Cockerel</label><br/>
                    
                                            <input type="radio" id="types_of_birds" value="All of the above" name="types_of_birds" checked>
                                            <label for="all of the above"> All of the above</label><br/>
                                   
                        
                        <?php
                            }
                            }
                            }
                        ?>
                       
                       
                        

                        

                        </div>

                        <div class="Checkbox-div" style="min-width: 200px; text-align: left; margin-top: 10px; margin-left: 30px;">

                        <label for="" style= "margin-left: -5px;">Choose your farms capacity </label><br/>

                        <?php 

                            if($Farm_capacity == '0 - 1000 birds'){
                        ?>
                            <input type="radio" value="0 - 1000 birds" name="farm_capacity" id="farm_capacity" checked>
                            <label for="0-1000"> 0 - 1000 birds</label><br/>

                            <input type="radio" value="1000 - 5000 birds" name="farm_capacity" id="farm_capacity">
                            <label for="1000-5000"> 1000 - 5000 birds</label><br/>

                            <input type="radio" value="5000 - 10000 birds" name="farm_capacity" id="farm_capacity">
                            <label for="5000-10000"> 5000 - 10000 birds</label><br/>

                            <input type="radio" value="Above 50,000 birds" name="farm_capacity" id="farm_capacity">
                            <label for="Above 50,000"> Above 50,000 birds</label><br/>
                        <?php
                            }else{
                                if($Farm_capacity == '1000 - 5000 birds'){
                        ?>
                                    <input type="radio" value="0 - 1000 birds" name="farm_capacity" id="farm_capacity" >
                                    <label for="0-1000"> 0 - 1000 birds</label><br/>
        
                                    <input type="radio" value="1000 - 5000 birds" name="farm_capacity" id="farm_capacity" checked>
                                    <label for="1000-5000"> 1000 - 5000 birds</label><br/>
        
                                    <input type="radio" value="5000 - 10000 birds" name="farm_capacity" id="farm_capacity">
                                    <label for="5000-10000"> 5000 - 10000 birds</label><br/>
        
                                    <input type="radio" value="Above 50,000 birds" name="farm_capacity" id="farm_capacity">
                                    <label for="Above 50,000"> Above 50,000 birds</label><br/>     
                        <?php                               
                                }else{
                                    if($Farm_capacity == '5000 - 10000 birds'){
                        ?>
                                    <input type="radio" value="0 - 1000 birds" name="farm_capacity" id="farm_capacity">
                                    <label for="0-1000"> 0 - 1000 birds</label><br/>
        
                                    <input type="radio" value="1000 - 5000 birds" name="farm_capacity" id="farm_capacity">
                                    <label for="1000-5000"> 1000 - 5000 birds</label><br/>
        
                                    <input type="radio" value="5000 - 10000 birds" name="farm_capacity" id="farm_capacity" checked>
                                    <label for="5000-10000"> 5000 - 10000 birds</label><br/>
        
                                    <input type="radio" value="Above 50,000 birds" name="farm_capacity" id="farm_capacity">
                                    <label for="Above 50,000"> Above 50,000 birds</label><br/>  
                        <?php   
                                    }else{
                        ?>
                                        <input type="radio" value="0 - 1000 birds" name="farm_capacity" id="farm_capacity">
                                        <label for="0-1000"> 0 - 1000 birds</label><br/>
            
                                        <input type="radio" value="1000 - 5000 birds" name="farm_capacity" id="farm_capacity">
                                        <label for="1000-5000"> 1000 - 5000 birds</label><br/>
            
                                        <input type="radio" value="5000 - 10000 birds" name="farm_capacity" id="farm_capacity" >
                                        <label for="5000-10000"> 5000 - 10000 birds</label><br/>
            
                                        <input type="radio" value="Above 50,000 birds" name="farm_capacity" id="farm_capacity" checked>
                                        <label for="Above 50,000"> Above 50,000 birds</label><br/>  
                        <?php                                      
                                    }
                        
                                }
                            }
                        ?>

                        </div>
                    </fieldset>
                        
                        <button class="submit-btn" type="submit" onClick="_validate_inputs();"><i class="fa fa-check"></i> UPDATE PROFILE</button>
                </form>     
            </div>   

                   
               
            </div>
        </div>
    </body>
</html>