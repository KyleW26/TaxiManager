<!DOCTYPE html>
<HTML>
  <head>
    <title>{SITE_NAME} | Hub </title>
    <link href="https://fonts.googleapis.com/css?family=Mukta+Mahee" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{URL}/template/{TPL}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{URL}/template/{TPL}/assets/css/fontawesome-all.css">
    <link rel="icon" href="{URL}/img/cab.png">
  </head>
  <body>

    <nav>
    </nav>

    <div class="profileBox">
      <p><center> Welcome, *USER* </center></p>
          <center><img src="{URL}/img/avatar.png" width="96" height="96" class="avatar"><center>
            <br>
            <a href="{URL}/messages.html"><i class="fas fa-envelope fa-2x"></i></a>
            <a href="{URL}/user.html"><i class="fas fa-user-circle fa-2x"></i></a>
            <a href="{URL}/settings.html"><i class="fas fa-cog fa-2x"></i></a>
            <hr>
    </div>

    <div class="sidePanel">
      <div class="profileBox">
        <p><center> Welcome, *USER* </center></p>
            <center><img src="{URL}/img/avatar.png" width="96" height="96" class="avatar"><center>
              <br>
              <a href="#messages"><i class="fas fa-envelope fa-2x"></i></a>
              <a href="#user"><i class="fas fa-user-circle fa-2x"></i></a>
              <a href="#settings"><i class="fas fa-cog fa-2x"></i></a>
              <hr>
      </div>

      <div class="menuBar">
        <ul>
          <li><a href="#home">Hub</a></li>
          <li><a href="#taxis">Taxis</a></li>
          <li><a href="#rota">Operators Rota</a></li>
          <li><a href="#regular">Regular Bookings</a></li>
          <br><br>
          <li><a href="register">Register a new operator</a></li>
          <li><a href="#login">Log In</a></li>
          <li><a href="#logout">Log Out</a></li>
        </ul>
      </div>

    </div>

    <div class="dashboardText">
      <i class="fas fa-clipboard"></i>
       My Dashboard
    </div>

    <div class="currentTaxiBox">
      <div class="awesomeIcons">
        <i class="fas fa-taxi" style="font-size:80px"></i>
      </div>

      <div class="contentText">
        <h1> Current Cars </h1>
      </div>

    </div>

    <div class="regularBookings">
      <div class="awesomeIcons">
        <i class="fas fa-clock" style="font-size:80px"></i>
      </div>

      <div class="contentText">
        <h1>Regular Bookings</h1>
      </div>

    </div>

    <div class="contentBox3">
      <div class="awesomeIcons">
        <i class="fas fa-id-badge" style="font-size:80px"></i>
      </div>

      <div class="contentText">
        <h1> Current Operator </h1>
      </div>
    </div>

    <div class="recentJobs">

    </div>

  </body>
</HTML>
