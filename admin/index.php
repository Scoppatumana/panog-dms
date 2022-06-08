<?php include 'connection/session.php' ?>

<?php if ($_SESSION['status'] != true){
  header("location: ../index.php");
}  ?>
<html>
  <head>
  <?php include 'reference.php' ?>
  
    <title>Administrative Portal | Panog-Remo DMS</title>
  </head>
  <body>
    <?php include 'header.php' ?>
    <div class="dashboard-main-div">
      <?php include 'admin-reference.php' ?>

      <div class="right-sided-div">
        <div class="bg-image-div">
          <div class="bg-cover">
            <div class="dashboard-overall">
              <div class="dashboard-admin-text">
                <span class="dashboard">
                  <i class="fa fa-dashboard"></i>
                  Dashboard
                </span>
                <br />
                <span class="admin-portal"> Administrative Portal </span>
              </div>

              <div class="current-time">
                <span class="text"> Current Time </span><br />
                <span class="time" id="clock">   </span><br />
                <span class="text" id="date" > </span>

              
              </div>

              <div class="user-details">
                <div class="picture-div">
                  <img
                    src="images/863.jpg"
                    alt="Passport"
                  />
                </div>
                <div class="welcome-text">
                  Welcome Back!
                  <h1>
                  <?php echo $select_title ?> <?php echo $select_lastname ?> <?php echo $select_firstname ?>
                  </h1>
                  <span class="login-date"
                    ><i class="fa fa-clock"></i>
                    Last Login Date
                    <span> | </span>
                    2021-11-04 18:52:11
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="main-displayed-div">
          <a href=""
            ><div class="main-div-proper staffs">
              <div class="inner-div">
                <i class="fa fa-user"></i>
                <span class="counter" data-target="5000"> 0 </span><br />
                Members  
              </div>
            </div></a
          >
          <a href=""><div class="main-div-proper students">
            <div class="inner-div">
              <i class="fa fa-users"></i>
              <span class="counter" data-target="5000"> 0 </span><br />
              Members
            </div>
          </div></a>
          <a href=""
            ><div class="main-div-proper faculties">
              <div class="inner-div">
                <i class="fa fa-building"></i>
                <span class="counter" data-target="5000"> 0 </span><br />
                Dues
              </div>
            </div></a
          >
          <a href=""
            ><div class="main-div-proper faculties">
              <div class="inner-div">
                <i class="fa fa-building"></i>
                <span class="counter" data-target="5000"> 0 </span><br />
                Dues
              </div>
            </div></a
          >



        
            
        </div>
        <div class="bookings-overall animated animated fadeInUp animated">
          <div class="bookings">
            <div class="booking-inner">
              <span class="booking-span">
                <i class="fa fa-calendar-check-o"></i>
                Announcement
              </span>
              <button>0</button>
            </div>
          </div>

          <div class="bookings">
            <div class="booking-inner">
              <span class="booking-span">
                <i class="fa fa-calendar-check-o"></i>
                Upcoming Events
              </span>
              <button>0</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
