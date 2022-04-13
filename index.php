
<html>
  <head>
  <?php include 'reference.php' ?>
    <title></title>
  </head>

  <body>
    
    <?php include 'header.php' ?>
    <div class="body-main-div">
      <div class="background-image">
        <div class="background-cover">
          <div class="login-overall-div">
                <form action="connection/code.php?action=login" method="POST" enctype="multipart/form-data">


            <div class="next-div" id="next_1">    
              <div class="login-main-div animated animated fadeInLeft animated">
                <div class="header-login">
                  <p><i class="fa fa-unlock"></i> Log-in to eDMS</p>
                </div>

                <input type="email" placeholder="E-mail Address" name="loginemail" id="loginemail" required />
                <input type="password" placeholder="Password" name="loginpassword" id="loginpassword" required />

                <a href="admin/index.php"
                  ><button type="submit"><i class="fa fa-sign-in"></i> Log-in</button></a
                >
                <br />

                <span> forgot password?  <span class="reset" onClick="_next_page('next_2');">Reset here</span> </span>
              </div>
            </div>  
                </form>

            <form action="connection/code.php?action=checkemail" method="POST" enctype="multipart/form-data">

            <div class="next-div" id="next_2">    
              <div class="login-main-div animated animated fadeInLeft animated">
                <div class="header-login">
                  <p><i class="fa fa-tool"></i> Reset Your Password</p>
                </div>

                <input type="email" placeholder="E-mail Address" name="email_address" id="email_address" required />
                <div class="information-div">
                  <h6> An OTP Would be sent to your email</h6>
                </div>

                <button onClick="_next_page('next_1');" type="submit" class="prevpro"><i class="fa fa-arrow-left"></i> Previous</button>
                <button type="submit" class="prevpro"><i class="fa fa-arrow-right"></i> Proceed</button>
                <br />

              
              </div>
            </div>  
            </form>

          </div>
                
          <div class="welcome-text">
            <span class="welcome">PANOG REMO Welcomes you to </span> <br />
            <span class="edms"> eDMS </span>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p><i class="fa fa-copyright"></i>CopyRight: All Rights Reserved</p>
        <p class="date">
          <span>Date:</span> Wednesday, 04 March 2021
          <span>Time:</span> 07:46<sup>PM</sup><br/>
        </p>
      </div>
    </div>

    
  </body>
</html>
