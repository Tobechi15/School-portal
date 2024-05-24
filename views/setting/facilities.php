 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Administrative Settings
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
      <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-normal">
          Hotel Management
        </a></div>
        <div class="sidebar-wrapper">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="./dashboard.html">
                <i class="material-icons">home</i>
                <p>Home</p>
              </a>
            </li>
            <li class="nav-item dropdwn">
              <a class="nav-link" href="#">
                <i class="material-icons">content_paste</i>
                <p>Bookings</p>
              </a>
              <ul class="unstyled-list">
                <li class="nav-item "><a class="nav-link" href="rooms.html"><p>Rooms</p></a></li>
                <li class="nav-item "><a class="nav-link" href="resturant.html"><p>Resturant</p></a></li>
                <li class="nav-item "><a class="nav-link" href="bar.html"><p>Bar</p></a></li>
                <li class="nav-item "><a class="nav-link" href="halls.html"><p>Halls</p></a></li>
                <li class="nav-item "><a class="nav-link" href="swimming-pool.html"><p>Swimming Pool</p></a></li>
                <li class="nav-item "><a class="nav-link" href=""><p>Miscellenious Booking</p></a></li>
              </ul>
            </li>
            <li class="nav-item dropdwn active">
              <a class="nav-link" href="#">
                <i class="material-icons">settings</i> 
                <p>Settings</p>
              </a>
              <ul class="unstyled-list">
                <li class="nav-item"><a href="general.html" class="nav-link"><p>General Settings</p></a></li>
                <li class="nav-item"><a href="admin.html" class="nav-link"><p>Administrative Settings</p></a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="support.html">
                <i class="material-icons">forum</i>
                <p>Support Chat</p>
              </a>
            </li>
          </ul>
        </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Administrative Settings</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <form class="navbar-form">
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                  <i class="material-icons">search</i>
                  <div class="ripple-container"></div>
                </button>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="javascript:;">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">

            <div class="col-md-12">
              <div class="card-primary card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><?xml version="1.0" ?><svg id="Layer_1" fill="white" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="XMLID_189_"><path d="M43.2,163v331.4h131.2V163H43.2z M73.9,480.7H48.2v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z    M74,435.2H48.3V413c0-6.3,4-11.4,9-11.4H65c5,0,9,5.1,9,11.4V435.2z M74.1,389.7H48.4v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V389.7z M74.2,344.2H48.5V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M74.3,298.7H48.6v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M74.4,253.2H48.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z    M74.5,207.7H48.8v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M105.4,480.7H79.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V480.7z M105.5,435.2H79.8V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M105.6,389.7H79.9v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M105.7,344.2H80V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z    M105.8,298.7H80.1v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M105.9,253.2H80.2v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V253.2z M106,207.7H80.3v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M136.9,480.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M137,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z    M137.1,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M137.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V344.2z M137.3,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M137.4,253.2h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M137.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z    M168.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M168.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V435.2z M168.6,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M168.7,344.2h-25.7V322   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M168.8,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z    M168.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M169,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V207.7z" id="XMLID_277_"/><path d="M336.2,163v331.4h131.2V163H336.2z M366.9,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4   V480.7z M367,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M367.1,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V389.7z M367.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M367.3,298.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M367.4,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z    M367.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M398.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V480.7z M398.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M398.6,389.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M398.7,344.2H373V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z    M398.8,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M398.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V253.2z M399,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M429.8,480.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M429.9,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z    M430,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M430.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V344.2z M430.3,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M430.4,253.2h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M430.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z    M461.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M461.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V435.2z M461.5,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M461.6,344.2h-25.7V322   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M461.7,298.7H436v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z    M461.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M462,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V207.7z" id="XMLID_247_"/><path d="M174.4,365.1v129.4h161.7V365.1H174.4z M204.4,486.2h-23.9v-15.9h23.9V486.2z M204.4,461.7h-23.9v-15.9   h23.9V461.7z M204.4,437.2h-23.9v-15.9h23.9V437.2z M204.4,412.7h-23.9v-15.9h23.9V412.7z M204.4,388.2h-23.9v-15.9h23.9V388.2z    M235.8,486.2h-23.9v-15.9h23.9V486.2z M235.8,461.7h-23.9v-15.9h23.9V461.7z M235.8,437.2h-23.9v-15.9h23.9V437.2z M235.8,412.7   h-23.9v-15.9h23.9V412.7z M235.8,388.2h-23.9v-15.9h23.9V388.2z M267.1,486.2h-23.9v-15.9h23.9V486.2z M267.1,461.7h-23.9v-15.9   h23.9V461.7z M267.1,437.2h-23.9v-15.9h23.9V437.2z M267.1,412.7h-23.9v-15.9h23.9V412.7z M267.1,388.2h-23.9v-15.9h23.9V388.2z    M298.4,486.2h-23.9v-15.9h23.9V486.2z M298.4,461.7h-23.9v-15.9h23.9V461.7z M298.4,437.2h-23.9v-15.9h23.9V437.2z M298.4,412.7   h-23.9v-15.9h23.9V412.7z M298.4,388.2h-23.9v-15.9h23.9V388.2z M329.7,486.2h-23.9v-15.9h23.9V486.2z M329.7,461.7h-23.9v-15.9   h23.9V461.7z M329.7,437.2h-23.9v-15.9h23.9V437.2z M329.7,412.7h-23.9v-15.9h23.9V412.7z M329.7,388.2h-23.9v-15.9h23.9V388.2z" id="XMLID_220_"/><path d="M174.4,95.5v268.3h161.7V95.5H174.4z M329.7,355.3H180.8V347h148.9V355.3z M329.7,336.6H180.8v-8.3h148.9   V336.6z M329.7,317.9H180.8v-8.3h148.9V317.9z M329.7,299.1H180.8v-8.3h148.9V299.1z M329.7,280.4H180.8v-8.3h148.9V280.4z    M329.7,261.7H180.8v-8.3h148.9V261.7z M329.7,243H180.8v-8.3h148.9V243z M329.7,224.2H180.8V216h148.9V224.2z M329.7,205.5H180.8   v-8.3h148.9V205.5z M329.7,186.8H180.8v-8.3h148.9V186.8z M329.7,168.1H180.8v-8.3h148.9V168.1z M329.7,149.3H180.8v-8.3h148.9   V149.3z M329.7,130.6H180.8v-8.3h148.9V130.6z M329.7,111.9H180.8v-8.3h148.9V111.9z" id="XMLID_204_"/><polygon id="XMLID_203_" points="172,76.5 43.2,108.3 43.2,160.4 172,160.4  "/><polygon id="XMLID_202_" points="41.6,98.8 172,74.6 172,77.3 43.2,105.4  "/><polygon id="XMLID_201_" points="338.1,76.8 466.9,108.6 466.9,160.7 338.1,160.7  "/><polygon id="XMLID_200_" points="466.9,98.9 338.1,74.9 338.1,77.7 466.9,105.1  "/><g id="XMLID_191_"><path d="M237.6,36.2c-6.8,0-10.2,6.3-10.2,13.2c0,6.8,3.7,12.8,10.1,12.8c6.5,0,10.2-6,10.2-13.2    C247.7,42.8,244.4,36.2,237.6,36.2z" id="XMLID_199_"/><path d="M174.4,6v87.5h158.8V6H174.4z M217.8,65.1h-4.1V50.2h-15.3v14.9h-4.1V33.4h4.1v13.3h15.3V33.4h4.1V65.1z     M237.3,65.6c-8.4,0-14.2-6.5-14.2-16.1c0-10.1,6.3-16.6,14.7-16.6c8.7,0,14.2,6.6,14.2,16C252,59.8,245.4,65.6,237.3,65.6z     M276,36.8h-9.7v28.2h-4.1V36.8h-9.6v-3.5H276V36.8z M297.3,65.1h-17.8V33.4h17.1v3.4h-13v10h12.3v3.4h-12.3v11.4h13.7V65.1z     M320.3,65.1h-17.6V33.4h4.1v28.3h13.5V65.1z" id="XMLID_192_"/></g><rect height="9.5" id="XMLID_190_" width="446.1" x="33" y="496.5"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2">Facilities
                  </h3>
                </div>
              </div>
            </div>

            <!-- USER CARD -->
            <div class="col-12">
              <div class="card">
                <div class="card-header card-header-tabs card-header-primary">
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li class="nav-item">
                          <a class="nav-link active" href="#rooms" data-toggle="tab">
                            <i class="material-icons">hotel</i>Rooms
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#halls" data-toggle="tab">
                            <i class="material-icons">event</i>Halls
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#rest" data-toggle="tab">
                            <i class="material-icons">restaurant</i>Restaurant
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#bar" data-toggle="tab">
                            <i class="material-icons">local_bar</i>Bar
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#pool" data-toggle="tab">
                            <i class="material-icons">pool</i>Swimming Pool
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#gym" data-toggle="tab">
                            <i class="material-icons">fitness_center</i>Gym
                            <div class="ripple-container"></div>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="rooms">
                      <div class="col-12">
                        <button type="button"  data-toggle="modal" data-target="#addRooms"class="btn btn-primary col-12">
                                <i class="material-icons">add</i>Add Room
                              </button>
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Room Type</th>
                          <th>Room Number</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Delux</td>
                            <td>021</td>
                            <td><span>&#8358</span>13,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Delux</td>
                            <td>020</td>
                            <td><span>&#8358</span>13,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Delux</td>
                            <td>019</td>
                            <td><span>&#8358</span>13,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Single</td>
                            <td>018</td>
                            <td><span>&#8358</span>7,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Single</td>
                            <td>017</td>
                            <td><span>&#8358</span>7,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane" id="halls">
                      <div class="row">
                          <div class="col-md-6">
                            <button type="button"  data-toggle="modal" data-target="#addEvent"class="btn btn-primary col-12">
                                <i class="material-icons"></i>Add Event
                              </button>
                          </div>
                          <div class="col-md-6">
                              <button type="button"  data-toggle="modal" data-target="#addRooms"class="btn btn-primary col-12">
                                  <i class="material-icons">add</i>Add Hall
                                </button>
                            </div>
                          </div>
                      <div class="col-12">
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Hall Name</th>
                          <th>Capacity</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Multi Purpose Hall</td>
                            <td>500</td>
                            <td><span>&#8358</span>80,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Conference Hall 1</td>
                            <td>50</td>
                            <td><span>&#8358</span>10,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Conference Hall 2</td>
                            <td>100</td>
                            <td><span>&#8358</span>25,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Seminar Hall</td>
                            <td>300</td>
                            <td><span>&#8358</span>30,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane" id="rest">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-6">
                            <button type="button"  data-toggle="modal" data-target="#addFoodCat"class="btn btn-primary col-12">
                                <i class="material-icons"></i>Food Category
                              </button>
                          </div>
                          <div class="col-md-6">
                              <button type="button"  data-toggle="modal" data-target="#addFood"class="btn btn-primary col-12">
                                  <i class="material-icons">add</i>Add Food
                                </button>
                            </div>
                          </div>
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Food Name</th>
                          <th>Food Category</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Egwusi Soup</td>
                            <td>Local</td>
                            <td><span>&#8358</span>2,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Vegetable Soup</td>
                            <td>Local</td>
                            <td><span>&#8358</span>2,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Fried Rice</td>
                            <td>Intercontinental</td>
                            <td><span>&#8358</span>1,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Chicken Soup</td>
                            <td>Intercontinental</td>
                            <td><span>&#8358</span>2,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Jellof Rice</td>
                            <td>Local</td>
                            <td><span>&#8358</span>1,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane" id="bar">
                      <div class="col-12">
                        <div class="row">
                          <div class="col-md-6">
                            <button type="button"  data-toggle="modal" data-target="#addBarCat"class="btn btn-primary col-12">
                                <i class="material-icons"></i>Drink Category
                              </button>
                          </div>
                          <div class="col-md-6">
                              <button type="button"  data-toggle="modal" data-target="#addDrink"class="btn btn-primary col-12">
                                  <i class="material-icons">add</i>Add Drink
                                </button>
                            </div>
                          </div>
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Drink Name</th>
                          <th>Drink Category</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Fayrouz</td>
                            <td>Soft</td>
                            <td><span>&#8358</span>500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Malt</td>
                            <td>Soft</td>
                            <td><span>&#8358</span>500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Capman</td>
                            <td>Spirit</td>
                            <td><span>&#8358</span>3,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Gulder</td>
                            <td>Beer</td>
                            <td><span>&#8358</span>1,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Legend</td>
                            <td>Beer</td>
                            <td><span>&#8358</span>1,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane" id="pool">
                      <div class="col-12">
                        <button type="button"  data-toggle="modal" data-target="#addRooms"class="btn btn-primary col-12">
                                <i class="material-icons">add</i>Add Pool
                              </button>
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Drink Name</th>
                          <th>Drink Type</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Fayrouz</td>
                            <td>Soft</td>
                            <td><span>&#8358</span>500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="tab-pane" id="gym">
                      <div class="col-12">
                        <button type="button"  data-toggle="modal" data-target="#addRooms"class="btn btn-primary col-12">
                                <i class="material-icons">add</i>Add Gym
                              </button>
                      </div>
                      <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Drink Name</th>
                          <th>Drink Type</th>
                          <th>Price</th>
                          <th></th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Fayrouz</td>
                            <td>Soft</td>
                            <td><span>&#8358</span>500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Malt</td>
                            <td>Soft</td>
                            <td><span>&#8358</span>500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Capman</td>
                            <td>Spirit</td>
                            <td><span>&#8358</span>3,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Gulder</td>
                            <td>Beer</td>
                            <td><span>&#8358</span>1,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Legend</td>
                            <td>Beer</td>
                            <td><span>&#8358</span>1,500</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
      </div>

    <!-- ------ADD ROOMS MODAL -->
      <div class="modal fade" id="addRooms" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Add Room</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Type</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Number</label>
                        <input type="number" class="form-control" min="0">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Price</label>
                        <input type="text" class="form-control" value="&#8358">
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary pull-right">Add</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- ------ADD DRINK MODAL -->
      <div class="modal fade" id="addDrink" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Add Drink</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <select name="select" id="select" class="form-control">
                              <option value="0">Choose Category</option>
                              <option value="1">Soft</option>
                              <option value="2">Wines</option>
                              <option value="3">Spirit</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Drink Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input type="text" class="form-control" value="&#8358">
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary pull-right">Add</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- ------ADD FOOD MODAL -->
      <div class="modal fade" id="addFood" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Add Food</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <select name="select" id="select" class="form-control">
                              <option value="0">Choose Category</option>
                              <option value="1">Local</option>
                              <option value="2">Intercontinental</option>
                              <option value="3">Snacks</option>
                              <option value="3">Deserts</option>
                            </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Food Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input type="text" class="form-control" value="&#8358">
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary pull-right">Add</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ------ADD FOOD CATEGORY -->
      <div class="modal fade" id="addFoodCat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Food Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Name</th>
                          <th>Action</th>
                        </thead>
                        <tbody class="bodyToAdd">
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Local</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Intercontinental</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Snacks</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Desert</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <form class="row addNew">
                        <div class="col-8">
                          <div class="form-group">
                            <label class="bmd-label-floating">New Category Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" rel="tooltip" title="Add" class="btn btn-dark btn-link btn-md">
                                <i class="material-icons">add</i>
                              </button>
                        </div>
                      </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ------ADD EVENT -->
      <div class="modal fade" id="addEvent" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Events</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Name</th>
                          <th>Action</th>
                        </thead>
                        <tbody class="bodyToAdd">
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Wedding</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Birthday Part</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Seminar</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Desert</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <form class="row addNew">
                        <div class="col-8">
                          <div class="form-group">
                            <label class="bmd-label-floating">New Event Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" rel="tooltip" title="Add" class="btn btn-dark btn-link btn-md">
                                <i class="material-icons">add</i>
                              </button>
                        </div>
                      </form>

              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- ------ADD DRINK CATEGORY -->
      <div class="modal fade" id="addBarCat" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Drink Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <table class="table">
                        <thead class="text-danger">
                          <th></th>
                          <th>Name</th>
                          <th>Action</th>
                        </thead>
                        <tbody class="bodyToAdd">
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Wines</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Juices</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Soft</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="">
                                  <span class="form-check-sign">
                                    <span class="check"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>Spirit</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <form class="row addNew">
                        <div class="col-8">
                          <div class="form-group">
                            <label class="bmd-label-floating">New Category Name</label>
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" rel="tooltip" title="Add" class="btn btn-dark btn-link btn-md">
                                <i class="material-icons">add</i>
                              </button>
                        </div>
                      </form>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- ------EDIT ROOMS MODAL -->
      <div class="modal fade" id="editRoom" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Edit Room</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="card-body">
                <form>
                  <div class="row">
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Number</label>
                        <input type="number" class="form-control" min="0">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Room Price</label>
                        <input type="text" class="form-control" value="&#8358">
                      </div>
                    </div>
                  </div>
                  
                  <button type="submit" class="btn btn-primary pull-right">Save</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="https://creative-tim.com/presentation">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
              <li>
                <a href="https://www.creative-tim.com/license">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made with <i class="material-icons">favorite</i> by
            <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="../assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>
        <li class="button-container">
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank"
            class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                  Get the pro version
                </a>
            </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html"
            target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard"
            data-icon="octicon-star" data-size="large" data-show-count="true"
            aria-label="Star ntkme/github-buttons on GitHub">Star</a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="../assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="../assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="../assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="../assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="../assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="../assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="../assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="../assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="../assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="../assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function () {
      $().ready(function () {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function (event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function () {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function () {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function () {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
   <script src="../assets/js/main.js"></script>

</body>

</html>