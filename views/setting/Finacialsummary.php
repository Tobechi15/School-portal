 
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
              <div class="card-primary card card-stats" style="display:none;">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><?xml version="1.0" ?><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="32px" fill="white" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(384 144)"><path d="M-383-119h12c0.554,0,1-0.336,1-0.75v-1.5c0-0.414-0.446-0.75-1-0.75h-12c-0.553,0-1,0.336-1,0.75v1.5   C-384-119.336-383.553-119-383-119z M-383-115h12c0.554,0,1-0.336,1-0.75v-1.5c0-0.414-0.446-0.75-1-0.75h-12   c-0.553,0-1,0.336-1,0.75v1.5C-384-115.336-383.553-115-383-115z M-383-123h12c0.554,0,1-0.336,1-0.75v-1.5   c0-0.414-0.446-0.75-1-0.75h-12c-0.553,0-1,0.336-1,0.75v1.5C-384-123.336-383.553-123-383-123z M-368.044-123.397   c0.017-0.117,0.044-0.229,0.044-0.353v-1.5c0-1.543-1.316-2.75-3-2.75h-4c0-2.763,2.238-5,5-5c2.763,0,5,2.237,5,5   C-365-125.935-366.256-124.16-368.044-123.397z M-384-137h28v18h-12.118c0.07-0.237,0.118-0.487,0.118-0.75V-121h6   c0-2.209,1.791-4,4-4v-6c-2.209,0-4-1.791-4-4h-16c0,2.209-1.791,4-4,4v3h-1c-0.354,0-0.686,0.063-1,0.162V-137z M-352-141v20h-2   v-18h-28v-2H-352z"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2">Facilites
                  </h3>
                </div>
              </div>
            </div>
          </div>

            <!-- USER CARD -->
                <button type="button" class="btn btn-link btn-lg" id="baCK"><i class="material-icons">keyboard_backspace</i></button>
               <div class="row">

                <!-- LAST 25 HOURS -->
                <div class="col-md-6">
                  <div class="card card-chart">
                    <div class="card-header card-header-primary">
                      <div class="ct-chart" id="completedTasksChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="73.125" x2="73.125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="106.25" x2="106.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="139.375" x2="139.375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="172.5" x2="172.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="205.625" x2="205.625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="238.75" x2="238.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="271.875" x2="271.875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="305" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 73.125 30 73.125 30 73.125 30 C 106.25 66 106.25 66 106.25 66 C 139.375 84 139.375 84 139.375 84 C 172.5 86.4 172.5 86.4 172.5 86.4 C 205.625 91.2 205.625 91.2 205.625 91.2 C 238.75 96 238.75 96 238.75 96 C 271.875 97.2 271.875 97.2 271.875 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="73.125" y1="30" x2="73.135" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="106.25" y1="66" x2="106.26" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="139.375" y1="84" x2="139.385" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="172.5" y1="86.4" x2="172.51" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="205.625" y1="91.2" x2="205.635" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="238.75" y1="96" x2="238.76" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="271.875" y1="97.2" x2="271.885" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="73.125" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="106.25" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="139.375" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="172.5" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="205.625" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="238.75" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="271.875" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Last 24 Hours</h4>
                      <p class="card-category">Total Income <span><span>&#8358</span>100,000</span></p>
                    </div>
                    <div class="card-footer">
                      <div class="stats"><a href="#"  class="view_details">
                        <i class="material-icons">access_time</i>View Details</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- LAST 7  DAYS -->
                <div class="col-md-6">
                  <div class="card card-chart">
                    <div class="card-header card-header-warning">
                      <div class="ct-chart" id="websiteViewsChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="77.85714285714286" x2="77.85714285714286" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="115.71428571428571" x2="115.71428571428571" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="153.57142857142856" x2="153.57142857142856" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="191.42857142857142" x2="191.42857142857142" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="229.28571428571428" x2="229.28571428571428" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="267.1428571428571" x2="267.1428571428571" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="305" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 91.2 C 77.857 79.2 77.857 79.2 77.857 79.2 C 115.714 103.2 115.714 103.2 115.714 103.2 C 153.571 79.2 153.571 79.2 153.571 79.2 C 191.429 64.8 191.429 64.8 191.429 64.8 C 229.286 76.8 229.286 76.8 229.286 76.8 C 267.143 28.8 267.143 28.8 267.143 28.8" class="ct-line"></path><line x1="40" y1="91.2" x2="40.01" y2="91.2" class="ct-point" ct:value="12" opacity="1"></line><line x1="77.85714285714286" y1="79.2" x2="77.86714285714287" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="115.71428571428571" y1="103.2" x2="115.72428571428571" y2="103.2" class="ct-point" ct:value="7" opacity="1"></line><line x1="153.57142857142856" y1="79.2" x2="153.58142857142855" y2="79.2" class="ct-point" ct:value="17" opacity="1"></line><line x1="191.42857142857142" y1="64.8" x2="191.4385714285714" y2="64.8" class="ct-point" ct:value="23" opacity="1"></line><line x1="229.28571428571428" y1="76.8" x2="229.29571428571427" y2="76.8" class="ct-point" ct:value="18" opacity="1"></line><line x1="267.1428571428571" y1="28.799999999999997" x2="267.1528571428571" y2="28.799999999999997" class="ct-point" ct:value="38" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="37.857142857142854" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="77.85714285714286" y="125" width="37.857142857142854" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="115.71428571428571" y="125" width="37.85714285714285" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">W</span></foreignObject><foreignObject style="overflow: visible;" x="153.57142857142856" y="125" width="37.85714285714286" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">T</span></foreignObject><foreignObject style="overflow: visible;" x="191.42857142857142" y="125" width="37.85714285714286" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="229.28571428571428" y="125" width="37.85714285714283" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="267.1428571428571" y="125" width="37.85714285714289" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 38px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">10</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">20</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">30</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">40</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">50</span></foreignObject></g></svg>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Last 7 Days</h4>
                      <p class="card-category">Total Income <span><span>&#8358</span>100,000</span></p>
                    </div>
                    <div class="card-footer">
                      <div class="stats"><a href="#"  class="view_details">
                        <i class="material-icons">access_time</i>View Details</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- LAST MONTH -->
                <div class="col-md-6">
                  <div class="card card-chart">
                    <div class="card-header card-header-success">
                      <div class="ct-chart" id="websiteViewsChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-line" style="width: 100%; height: 100%;"><g class="ct-grids"><line x1="40" x2="40" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="73.125" x2="73.125" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="106.25" x2="106.25" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="139.375" x2="139.375" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="172.5" x2="172.5" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="205.625" x2="205.625" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="238.75" x2="238.75" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line x1="271.875" x2="271.875" y1="0" y2="120" class="ct-grid ct-horizontal"></line><line y1="120" y2="120" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="305" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="305" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><path d="M 40 92.4 C 73.125 30 73.125 30 73.125 30 C 106.25 66 106.25 66 106.25 66 C 139.375 84 139.375 84 139.375 84 C 172.5 86.4 172.5 86.4 172.5 86.4 C 205.625 91.2 205.625 91.2 205.625 91.2 C 238.75 96 238.75 96 238.75 96 C 271.875 97.2 271.875 97.2 271.875 97.2" class="ct-line"></path><line x1="40" y1="92.4" x2="40.01" y2="92.4" class="ct-point" ct:value="230" opacity="1"></line><line x1="73.125" y1="30" x2="73.135" y2="30" class="ct-point" ct:value="750" opacity="1"></line><line x1="106.25" y1="66" x2="106.26" y2="66" class="ct-point" ct:value="450" opacity="1"></line><line x1="139.375" y1="84" x2="139.385" y2="84" class="ct-point" ct:value="300" opacity="1"></line><line x1="172.5" y1="86.4" x2="172.51" y2="86.4" class="ct-point" ct:value="280" opacity="1"></line><line x1="205.625" y1="91.2" x2="205.635" y2="91.2" class="ct-point" ct:value="240" opacity="1"></line><line x1="238.75" y1="96" x2="238.76" y2="96" class="ct-point" ct:value="200" opacity="1"></line><line x1="271.875" y1="97.2" x2="271.885" y2="97.2" class="ct-point" ct:value="190" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="73.125" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">3p</span></foreignObject><foreignObject style="overflow: visible;" x="106.25" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">6p</span></foreignObject><foreignObject style="overflow: visible;" x="139.375" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">9p</span></foreignObject><foreignObject style="overflow: visible;" x="172.5" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">12p</span></foreignObject><foreignObject style="overflow: visible;" x="205.625" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">3a</span></foreignObject><foreignObject style="overflow: visible;" x="238.75" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">6a</span></foreignObject><foreignObject style="overflow: visible;" x="271.875" y="125" width="33.125" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 33px; height: 20px;">9a</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Last Month</h4>
                      <p class="card-category">Total Income <span><span>&#8358</span>500,000</span></p>
                    </div>
                    <div class="card-footer">
                      <div class="stats"><a href="#"  class="view_details">
                        <i class="material-icons">access_time</i>View Details</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- LAST QUATER -->
                <div class="col-md-6">
                  <div class="card card-chart">
                    <div class="card-header card-header-info">
                      <div class="ct-chart" id="websiteViewsChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="300" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="50.833333333333336" x2="50.833333333333336" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="72.5" x2="72.5" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="94.16666666666667" x2="94.16666666666667" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="115.83333333333333" x2="115.83333333333333" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="137.5" x2="137.5" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="159.16666666666669" x2="159.16666666666669" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="180.83333333333334" x2="180.83333333333334" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="202.50000000000003" x2="202.50000000000003" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="224.16666666666669" x2="224.16666666666669" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="245.83333333333334" x2="245.83333333333334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="267.5" x2="267.5" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="289.1666666666667" x2="289.1666666666667" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="21.666666666666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="61.66666666666667" y="125" width="21.666666666666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="83.33333333333334" y="125" width="21.666666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="105" y="125" width="21.66666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="126.66666666666667" y="125" width="21.66666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="148.33333333333334" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="170" y="125" width="21.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="191.66666666666669" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="213.33333333333334" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="235" y="125" width="21.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="256.6666666666667" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="278.33333333333337" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Last Quater</h4>
                      <p class="card-category">Total Income <span><span>&#8358</span>900,000</span></p>
                    </div>
                    <div class="card-footer">
                      <div class="stats"><a href="#"  class="view_details">
                        <i class="material-icons">access_time</i>View Details</a>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- LAST YEAR -->
                <div class="col-md-6">
                  <div class="card card-chart">
                    <div class="card-header card-header-danger">
                      <div class="ct-chart" id="websiteViewsChart">
                        <svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="100%" class="ct-chart-bar" style="width: 100%; height: 100%;"><g class="ct-grids"><line y1="120" y2="120" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="96" y2="96" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="72" y2="72" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="48" y2="48" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="24" y2="24" x1="40" x2="300" class="ct-grid ct-vertical"></line><line y1="0" y2="0" x1="40" x2="300" class="ct-grid ct-vertical"></line></g><g><g class="ct-series ct-series-a"><line x1="50.833333333333336" x2="50.833333333333336" y1="120" y2="54.959999999999994" class="ct-bar" ct:value="542" opacity="1"></line><line x1="72.5" x2="72.5" y1="120" y2="66.84" class="ct-bar" ct:value="443" opacity="1"></line><line x1="94.16666666666667" x2="94.16666666666667" y1="120" y2="81.6" class="ct-bar" ct:value="320" opacity="1"></line><line x1="115.83333333333333" x2="115.83333333333333" y1="120" y2="26.400000000000006" class="ct-bar" ct:value="780" opacity="1"></line><line x1="137.5" x2="137.5" y1="120" y2="53.64" class="ct-bar" ct:value="553" opacity="1"></line><line x1="159.16666666666669" x2="159.16666666666669" y1="120" y2="65.64" class="ct-bar" ct:value="453" opacity="1"></line><line x1="180.83333333333334" x2="180.83333333333334" y1="120" y2="80.88" class="ct-bar" ct:value="326" opacity="1"></line><line x1="202.50000000000003" x2="202.50000000000003" y1="120" y2="67.92" class="ct-bar" ct:value="434" opacity="1"></line><line x1="224.16666666666669" x2="224.16666666666669" y1="120" y2="51.84" class="ct-bar" ct:value="568" opacity="1"></line><line x1="245.83333333333334" x2="245.83333333333334" y1="120" y2="46.8" class="ct-bar" ct:value="610" opacity="1"></line><line x1="267.5" x2="267.5" y1="120" y2="29.28" class="ct-bar" ct:value="756" opacity="1"></line><line x1="289.1666666666667" x2="289.1666666666667" y1="120" y2="12.599999999999994" class="ct-bar" ct:value="895" opacity="1"></line></g></g><g class="ct-labels"><foreignObject style="overflow: visible;" x="40" y="125" width="21.666666666666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="61.66666666666667" y="125" width="21.666666666666668" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">F</span></foreignObject><foreignObject style="overflow: visible;" x="83.33333333333334" y="125" width="21.666666666666664" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="105" y="125" width="21.66666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="126.66666666666667" y="125" width="21.66666666666667" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">M</span></foreignObject><foreignObject style="overflow: visible;" x="148.33333333333334" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="170" y="125" width="21.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">J</span></foreignObject><foreignObject style="overflow: visible;" x="191.66666666666669" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">A</span></foreignObject><foreignObject style="overflow: visible;" x="213.33333333333334" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">S</span></foreignObject><foreignObject style="overflow: visible;" x="235" y="125" width="21.666666666666686" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">O</span></foreignObject><foreignObject style="overflow: visible;" x="256.6666666666667" y="125" width="21.666666666666657" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 22px; height: 20px;">N</span></foreignObject><foreignObject style="overflow: visible;" x="278.33333333333337" y="125" width="30" height="20"><span class="ct-label ct-horizontal ct-end" xmlns="http://www.w3.org/2000/xmlns/" style="width: 30px; height: 20px;">D</span></foreignObject><foreignObject style="overflow: visible;" y="96" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">0</span></foreignObject><foreignObject style="overflow: visible;" y="72" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">200</span></foreignObject><foreignObject style="overflow: visible;" y="48" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">400</span></foreignObject><foreignObject style="overflow: visible;" y="24" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">600</span></foreignObject><foreignObject style="overflow: visible;" y="0" x="0" height="24" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 24px; width: 30px;">800</span></foreignObject><foreignObject style="overflow: visible;" y="-30" x="0" height="30" width="30"><span class="ct-label ct-vertical ct-start" xmlns="http://www.w3.org/2000/xmlns/" style="height: 30px; width: 30px;">1000</span></foreignObject></g></svg>
                      </div>
                    </div>
                    <div class="card-body">
                      <h4 class="card-title">Last Year</h4>
                      <p class="card-category">Total Income <span><span>&#8358</span>500,000</span></p>
                    </div>
                    <div class="card-footer">
                      <div class="stats"><a href="#"  class="view_details">
                        <i class="material-icons">access_time</i>View Details</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!---------- TABLES --------------
              --------------------------------->
              <div class="row">
                <!--  24 HOURS TABLE-->
                <div class="col-12">
                  <div class="card table1 income">
                    <div class="card-header card-header-tabs card-header-primary">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#income" data-toggle="tab">
                                <i class="material-icons"></i>Income
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Expenses
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="income">
                          <div class="card-body table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-primary">
                                    <th>S/n</th>
                                    <th>Department</th>
                                    <th>Staff</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="pull-right">Income</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Front Desk</td>
                                      <td>Christian Matthew</td>
                                      <td>11 April 2020</td>
                                      <td>6:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Restaurant</td>
                                      <td>Onyeka Philp</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>50,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Hall</td>
                                      <td>Mercy Grace</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>8,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Swimming Pool</td>
                                      <td>Nnamdi Okazie</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>2,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Bar</td>
                                      <td>Nancy Eze</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>TOTAL</strong></td>
                                      <td class="pull-right"><strong><span>&#8358</span>100,000.00</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <div class="tab-pane" id="expenses">
                           
                        </div>
                        <div class="tab-pane" id="notification">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- WEEKLY TABLE -->
                <div class="col-12">
                  <div class="card table1 income">
                    <div class="card-header card-header-tabs card-header-warning">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#income" data-toggle="tab">
                                <i class="material-icons"></i>Sunday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Monday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Tuesday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Wednesday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Thursday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Friday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Saturday
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="income">
                          <div class="card-body table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-warning">
                                    <th>S/n</th>
                                    <th>Department</th>
                                    <th>Staff</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="pull-right">Income</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Front Desk</td>
                                      <td>Christian Matthew</td>
                                      <td>11 April 2020</td>
                                      <td>6:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Restaurant</td>
                                      <td>Onyeka Philp</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>50,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Hall</td>
                                      <td>Mercy Grace</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>8,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Swimming Pool</td>
                                      <td>Nnamdi Okazie</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>2,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Bar</td>
                                      <td>Nancy Eze</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>TOTAL</strong></td>
                                      <td class="pull-right"><strong><span>&#8358</span>100,000.00</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <div class="tab-pane" id="expenses">
                           
                        </div>
                        <div class="tab-pane" id="notification">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- MONTHLY TABLE -->
                <div class="col-12">
                  <div class="card table1 income">
                    <div class="card-header card-header-tabs card-header-success">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#wee1" data-toggle="tab">
                                <i class="material-icons"></i>Week 1
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#week2" data-toggle="tab">
                                <i class="material-icons"></i>Week 2
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#week3" data-toggle="tab">
                                <i class="material-icons"></i>Week 3
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#week4" data-toggle="tab">
                                <i class="material-icons"></i>Week 4
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#week5" data-toggle="tab">
                                <i class="material-icons"></i>Week 5
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="week1">
                          <div class="card-body table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-success">
                                    <th>S/n</th>
                                    <th>Department</th>
                                    <th>Staff</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="pull-right">Income</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Front Desk</td>
                                      <td>Christian Matthew</td>
                                      <td>11 April 2020</td>
                                      <td>6:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Restaurant</td>
                                      <td>Onyeka Philp</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>50,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Hall</td>
                                      <td>Mercy Grace</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>8,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Swimming Pool</td>
                                      <td>Nnamdi Okazie</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>2,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Bar</td>
                                      <td>Nancy Eze</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>TOTAL</strong></td>
                                      <td class="pull-right"><strong><span>&#8358</span>100,000.00</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <div class="tab-pane" id="week2">
                           
                        </div>
                        <div class="tab-pane" id="week3">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- QUATERLY TABLE -->
                <div class="col-12">
                  <div class="card table1 income">
                    <div class="card-header card-header-tabs card-header-info">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#1quater" data-toggle="tab">
                                <i class="material-icons"></i>Ist Quater
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#2quater" data-toggle="tab">
                                <i class="material-icons"></i>2nd Quater
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#3quater" data-toggle="tab">
                                <i class="material-icons"></i>3rd Quater
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#4quater" data-toggle="tab">
                                <i class="material-icons"></i>4th Quater
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="1quater">
                          <div class="card-body table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-info">
                                    <th>S/n</th>
                                    <th>Department</th>
                                    <th>Staff</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="pull-right">Income</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Front Desk</td>
                                      <td>Christian Matthew</td>
                                      <td>11 April 2020</td>
                                      <td>6:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Restaurant</td>
                                      <td>Onyeka Philp</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>50,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Hall</td>
                                      <td>Mercy Grace</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>8,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Swimming Pool</td>
                                      <td>Nnamdi Okazie</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>2,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Bar</td>
                                      <td>Nancy Eze</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>TOTAL</strong></td>
                                      <td class="pull-right"><strong><span>&#8358</span>100,000.00</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <div class="tab-pane" id="2quater">
                           
                        </div>
                        <div class="tab-pane" id="3quater">
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- YEAR TABLE -->
                <div class="col-12">
                  <div class="card table1 income">
                    <div class="card-header card-header-tabs card-header-danger">
                      <div class="nav-tabs-navigation">
                        <div class="nav-tabs-wrapper">
                          <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="nav-item">
                              <a class="nav-link active" href="#income" data-toggle="tab">
                                <i class="material-icons"></i>Income
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="#expenses" data-toggle="tab">
                                <i class="material-icons"></i>Expenses
                                <div class="ripple-container"></div>
                              </a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="tab-content">
                        <div class="tab-pane active" id="income">
                          <div class="card-body table-responsive">
                                <table class="table table-hover">
                                  <thead class="text-danger">
                                    <th>S/n</th>
                                    <th>Department</th>
                                    <th>Staff</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th class="pull-right">Income</th>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td>1</td>
                                      <td>Front Desk</td>
                                      <td>Christian Matthew</td>
                                      <td>11 April 2020</td>
                                      <td>6:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>2</td>
                                      <td>Restaurant</td>
                                      <td>Onyeka Philp</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>50,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>3</td>
                                      <td>Hall</td>
                                      <td>Mercy Grace</td>
                                      <td>11 April 2020</td>
                                      <td>9:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>8,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>4</td>
                                      <td>Swimming Pool</td>
                                      <td>Nnamdi Okazie</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>2,000.00</td>
                                    </tr>
                                    <tr>
                                      <td>5</td>
                                      <td>Bar</td>
                                      <td>Nancy Eze</td>
                                      <td>11 April 2020</td>
                                      <td>10:00PM</td>
                                      <td class="pull-right"><span>&#8358</span>20,000.00</td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td><strong>TOTAL</strong></td>
                                      <td class="pull-right"><strong><span>&#8358</span>100,000.00</strong></td>
                                    </tr>
                                  </tbody>
                                </table>
                          </div>
                        </div>
                        <div class="tab-pane" id="expenses">
                           
                        </div>
                        <div class="tab-pane" id="notification">
                          
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
                  
                  <button type="submit" class="btn btn-danger pull-right">Add</button>
                  <div class="clearfix"></div>
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
                  
                  <button type="submit" class="btn btn-danger pull-right">Save</button>
                  <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>


      <footer class="footer">
        <div class="container-fluid">
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by
            <a href="https://www.creative-tim.com" target="_blank">Techpadi</a> for a better web.
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
         /************Card Chart Display Section*******************/
  const details = document.querySelectorAll('.view_details');
  const cardChart = document.querySelectorAll('.card-chart');
  let table1 = document.querySelectorAll('.table1');

  for(let i = 0; i < details.length; i++){

    // Display Table on Chlicking View Details
    details[i].addEventListener('click', function(){
      let baCK = document.getElementById('baCK');

      table1[i].className = `card table1 clicked`;

      baCK.style.display = 'block'

      // Displaying Cards After Clicking On View Details
      for(let b = 0; b < cardChart.length; b++){
        cardChart[b].style.display = 'none';
        cardChart[i].style.display = 'inline-block';
        cardChart[i].parentElement.className = 'col-12';
      };


      baCK.onclick = function (){

        table1[i].className = 'card table1 income';
        baCK.style.display = 'none';

        
        for(let a = 0; a < cardChart.length; a++){
          cardChart[a].style.display = 'inline-block';
          cardChart[i].parentElement.className = 'col-md-6';
        };
      };
    });
  };
    });
  </script>
</body>

</html>