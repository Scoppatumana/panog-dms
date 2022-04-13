<?php include 'connection/connection.php' ?>
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
                                    <i class="fa fa-pencil-square-o"></i>
                                    Member Registration
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

            <div class="staff-list-overall-div student-reg-overall-div">

            <form action="connection/code.php?action=registermember" method="POST" enctype="multipart/form-data">
                    <fieldset>
                        <legend>Owner's Information</legend>

                        <div class="individual-input">
                            <label for="">Title:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="title" id="title" required>
                                <option value="">Select Title</option>
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                            </select>
                        </div>

                        <div class="individual-input">
                            <label for="">First Name :<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup></label><br/>
                            <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Middle Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Middle Name" name="middlename" id="middlename" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Last Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
                        </div>
                        <div class="individual-input">
                            <label for="">L.G.A:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="LGA" name="owners_lga" id="owners_lga" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Gender:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="gender" id="gender" required>
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>

                        <div class="individual-input">
                            <label for="">Email Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="email" placeholder="Email Address" name="email_address" id="email_address" required>
                        </div>

                        <div class="individual-input">
                            <label for="">Home Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Home Address" name="home_address" id="home_address" value="<?php echo $email ?>" required>
                        </div>

                        <div class="individual-input">
                            <label for="">Role:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <select name="role" id="role" required>
                                <option value="">Select Role</option>
                                <option value="Member">Member</option>
                                <option value="Administrator">Administrator</option>
                            </select>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>Farm Information</legend>
                        <div class="individual-input">
                            <label for="">Farm Name:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Farm Name" name="farm_name" id="farm_name" required>
                        </div>
                        <div class="individual-input">
                            <label for="">Farm Address:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="Farm Address" name="farm_address" id="farm_address" required>
                        </div>
                        <div class="individual-input">
                            <label for="">LGA:<sup style="color: red; font-size: 18px; font-weight: bold; ">*</sup> </label><br/>
                            <input type="text" placeholder="LGA" name="farm_lga" id="farm_lga" required>
                        </div>
                        
                       
                       
                    </fieldset>


                    <fieldset>
                        <legend>Birds Information</legend>


                       
                        <div class="Checkbox-div" style="min-width: 200px; text-align: left; margin-top: 10px; margin-left: 30px;">

                                <label for="" style= "margin-left: -5px;">Choose the types of birds on your farm </label><br/>
                                <input type="radio" id="layers" name="types_of_birds" value="Layers" id="types_of_birds" required>
                                <label for="layers"> Layers</label><br/>

                                <input type="radio" id="broilers" name="types_of_birds" value="Broiler" id="types_of_birds" required>
                                <label for="broilers"> Broilers</label><br/>

                                <input type="radio" id="cockerel" name="types_of_birds" value="Cockerel" id="types_of_birds" required>
                                <label for="cockerel"> Cockerel</label><br/>

                                <input type="radio" id="all of the above" name="types_of_birds" value="All of the above" id="types_of_birds" required>
                                <label for="all of the above"> All of the above</label><br/>

                        </div>

                        <div class="Checkbox-div" style="min-width: 200px; text-align: left; margin-top: 10px; margin-left: 30px;">

                                <label for="" style= "margin-left: -5px;">Choose your farms capacity </label><br/>
                                <input type="radio" id="0-1000" name="farm_capacity" value="0 - 1000 birds" id="farm_capacity" required>
                                <label for="0-1000"> 0 - 1000 birds</label><br/>

                                <input type="radio" id="1000-5000" name="farm_capacity" value="1000 - 5000 birds" id="farm_capacity" required>
                                <label for="1000-5000"> 1000 - 5000 birds</label><br/>

                                <input type="radio" id="5000-10000" name="farm_capacity" value="5000 - 10000 birds" id="farm_capacity" required>
                                <label for="5000-10000"> 5000 - 10000 birds</label><br/>

                                <input type="radio" id="Above 50,000" name="farm_capacity" value="Above 50,000 birds" id="farm_capacity" required>
                                <label for="Above 50,000"> Above 50,000 birds</label><br/>

                        </div>
             
                       


                      
                    </fieldset>
                        
                        <button class="submit-btn" type="submit"><i class="fa fa-check"></i> SUBMIT</button>
                </form>     
            </div>   

                   
               
            </div>
        </div>
    </body>
</html>