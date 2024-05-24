 
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
              <a class="nav-link" href="<?php echo ROOT_URL?>">
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
                <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>booking\rooms"><p>Rooms</p></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>booking\resturant"><p>Resturant</p></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>booking\bar"><p>Bar</p></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>booking\halls"><p>Halls</p></a></li>
                <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>booking\pool"><p>Swimming Pool</p></a></li>
                <li class="nav-item "><a class="nav-link" href=""><p>Miscellenious Booking</p></a></li>
              </ul>
            </li>
            <li class="nav-item dropdwn active">
              <a class="nav-link" href="#">
                <i class="material-icons">settings</i> 
                <p>Settings</p>
              </a>
              <ul class="unstyled-list">
                <li class="nav-item"><a href="<?php echo ROOT_URL?>setting\general" class="nav-link"><p>General Settings</p></a></li>
                <li class="nav-item"><a href="<?php echo ROOT_URL?>setting\admin" class="nav-link"><p>Administrative Settings</p></a></li>
              </ul>
            </li>
            <li class="nav-item ">
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
              <div class="card-primary card card-stats  card2" onclick= "linkPage()">
                <div class="card-header card-header-primary card-header-icon">          
                  <div class="card-icon card-icon2">
                    <i class="material-icons">people</i>
                  </div>
                  <h3 class="card-title card-title2"><a href="<?php echo ROOT_URL ?>users\register" class="text-link text-dark">Users</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-md-12" >
              <div class="card card-stats card2" onclick="">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 48 48" height="48px" id="Layer_4" version="1.1" viewBox="0 0 48 48" width="48px" fill="white" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M0,9v7.756v1.713v1.019h2c2.492,0,4.513,2.021,4.513,4.512c0,2.493-2.021,4.513-4.513,4.513H0v1.02v1.713V39h48v-7.756  v-1.702v-1.03h-2c-2.492,0-4.513-2.02-4.513-4.512c0-2.492,2.021-4.512,4.513-4.512h2v-1.404v-1.327V9H0z M38.479,24  c0,3.46,2.339,6.368,5.521,7.245V35H4v-3.756c3.181-0.877,5.521-3.784,5.521-7.245c0-3.459-2.339-6.366-5.521-7.243V13h40v3.756  C40.818,17.633,38.479,20.54,38.479,24z"/><g><path d="M22.244,20.909c0,1.638-0.316,2.866-0.95,3.689c-0.634,0.822-1.562,1.233-2.785,1.233c-1.176,0-2.082-0.422-2.723-1.266   s-0.961-2.062-0.961-3.656c0-3.252,1.228-4.878,3.684-4.878c1.203,0,2.124,0.422,2.77,1.265   C21.922,18.14,22.244,19.344,22.244,20.909z M17.515,20.931c0,0.904,0.081,1.579,0.24,2.023c0.161,0.445,0.418,0.668,0.773,0.668   c0.684,0,1.026-0.897,1.026-2.691c0-1.779-0.343-2.668-1.026-2.668c-0.355,0-0.612,0.219-0.773,0.656   C17.596,19.357,17.515,20.027,17.515,20.931z M29.588,16.255l-8.657,15.606h-2.562l8.656-15.606H29.588z M33.175,27.144   c0,1.631-0.316,2.855-0.95,3.678c-0.633,0.822-1.562,1.233-2.786,1.233c-1.175,0-2.081-0.423-2.722-1.265   c-0.64-0.844-0.961-2.06-0.961-3.646c0-3.252,1.229-4.878,3.683-4.878c1.204,0,2.128,0.421,2.772,1.265   C32.855,24.374,33.175,25.578,33.175,27.144z M28.445,27.165c0,0.903,0.081,1.578,0.241,2.022c0.159,0.446,0.418,0.668,0.774,0.668   c0.682,0,1.023-0.897,1.023-2.69c0-1.779-0.342-2.669-1.023-2.669c-0.356,0-0.615,0.219-0.774,0.656   C28.526,25.592,28.445,26.262,28.445,27.165z"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2"><a href="<?php echo ROOT_URL ?>setting\coupons" class="text-link text-dark">Coupons</a>
                  </h3>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card card-stats card2">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><svg fill="white" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g id="Solid"><path d="M216,336a72,72,0,1,0,72,72A72.08124,72.08124,0,0,0,216,336Zm24,64v16H224v16h16v16H224v16H208V448H192V432h16V416H192V400h7.355l-21.60205-27.00293,12.49414-9.99414L216,395.19336l25.75293-32.19043,12.49414,9.99414L232.645,400Z"/><path d="M457.97778,376h14.49463a72.37559,72.37559,0,0,0-40.54809-35.89746A88.40824,88.40824,0,0,1,457.97778,376Z"/><path d="M128,408a88.09957,88.09957,0,0,1,88-88h32a87.76277,87.76277,0,0,1,63.96338,27.62793A87.19592,87.19592,0,0,1,376,320h32a87.78731,87.78731,0,0,1,24,3.32666V104H384a24.0275,24.0275,0,0,1-24-24V32H88a8.00917,8.00917,0,0,0-8,8V472a8.00917,8.00917,0,0,0,8,8h77.4624A87.95674,87.95674,0,0,1,128,408ZM408,296H248V280H408Zm0-32H200V248H408Zm0-32H264V216H408Zm0-48v16H320V184ZM232,92.68652l24,24L300.68579,72H280V56h48v48H312V83.31421l-56,55.99927-24-24-50.34277,50.34375-11.31446-11.31446ZM104,184H304v16H104Zm0,32H248v16H104Zm0,32h80v16H104Zm0,32H232v16H104Zm0,32h48v16H104Z"/><path d="M271.9209,340.10156A88.40762,88.40762,0,0,1,297.97583,376h14.49658A72.37461,72.37461,0,0,0,271.9209,340.10156Z"/><path d="M271.9209,475.89844A72.37461,72.37461,0,0,0,312.47241,440H297.97583A88.40762,88.40762,0,0,1,271.9209,475.89844Z"/><path d="M431.92432,475.89746A72.37559,72.37559,0,0,0,472.47241,440H457.97778A88.40824,88.40824,0,0,1,431.92432,475.89746Z"/><path d="M478.18579,392H462.54a88.28764,88.28764,0,0,1,0,32h15.64575a71.46123,71.46123,0,0,0,0-32Z"/><path d="M302.53809,392a88.28764,88.28764,0,0,1,0,32h15.6477a71.46123,71.46123,0,0,0,0-32Z"/><path d="M376.002,336a71.36331,71.36331,0,0,0-54.01977,24.39844,87.83134,87.83134,0,0,1,0,95.20312A71.36331,71.36331,0,0,0,376.002,480a72,72,0,1,0,0-144Zm24,48h-24a8,8,0,0,0,0,16,23.99787,23.99787,0,0,1,8,46.62378V464h-16V448h-16V432h24a8,8,0,1,0,0-16,23.99787,23.99787,0,0,1-8-46.62378V352h16v16h16Z"/><path d="M384,88h36.68555L376,43.31445V80A8.00917,8.00917,0,0,0,384,88Z"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2"><a href="<?php echo ROOT_URL ?>setting\VAT" class="text-link text-dark">Value Added Tax (VAT)</a>
                  </h3>
                </div>
              </div>
            </div>
           <div class="col-md-12">
              <div class="card card-stats card2">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><svg id="Layer_1" fill="white" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="XMLID_189_"><path d="M43.2,163v331.4h131.2V163H43.2z M73.9,480.7H48.2v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z    M74,435.2H48.3V413c0-6.3,4-11.4,9-11.4H65c5,0,9,5.1,9,11.4V435.2z M74.1,389.7H48.4v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V389.7z M74.2,344.2H48.5V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M74.3,298.7H48.6v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M74.4,253.2H48.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z    M74.5,207.7H48.8v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M105.4,480.7H79.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V480.7z M105.5,435.2H79.8V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M105.6,389.7H79.9v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M105.7,344.2H80V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z    M105.8,298.7H80.1v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M105.9,253.2H80.2v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V253.2z M106,207.7H80.3v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M136.9,480.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M137,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z    M137.1,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M137.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V344.2z M137.3,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M137.4,253.2h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M137.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z    M168.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M168.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V435.2z M168.6,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M168.7,344.2h-25.7V322   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M168.8,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z    M168.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M169,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V207.7z" id="XMLID_277_"/><path d="M336.2,163v331.4h131.2V163H336.2z M366.9,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4   V480.7z M367,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M367.1,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V389.7z M367.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M367.3,298.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M367.4,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z    M367.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M398.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V480.7z M398.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z M398.6,389.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M398.7,344.2H373V322c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z    M398.8,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M398.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V253.2z M399,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z M429.8,480.7h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M429.9,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V435.2z    M430,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M430.2,344.2h-25.7V322c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V344.2z M430.3,298.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z M430.4,253.2h-25.7v-22.2   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M430.5,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V207.7z    M461.3,480.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V480.7z M461.4,435.2h-25.7V413c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V435.2z M461.5,389.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V389.7z M461.6,344.2h-25.7V322   c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V344.2z M461.7,298.7H436v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V298.7z    M461.9,253.2h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8c5,0,9,5.1,9,11.4V253.2z M462,207.7h-25.7v-22.2c0-6.3,4-11.4,9-11.4h7.8   c5,0,9,5.1,9,11.4V207.7z" id="XMLID_247_"/><path d="M174.4,365.1v129.4h161.7V365.1H174.4z M204.4,486.2h-23.9v-15.9h23.9V486.2z M204.4,461.7h-23.9v-15.9   h23.9V461.7z M204.4,437.2h-23.9v-15.9h23.9V437.2z M204.4,412.7h-23.9v-15.9h23.9V412.7z M204.4,388.2h-23.9v-15.9h23.9V388.2z    M235.8,486.2h-23.9v-15.9h23.9V486.2z M235.8,461.7h-23.9v-15.9h23.9V461.7z M235.8,437.2h-23.9v-15.9h23.9V437.2z M235.8,412.7   h-23.9v-15.9h23.9V412.7z M235.8,388.2h-23.9v-15.9h23.9V388.2z M267.1,486.2h-23.9v-15.9h23.9V486.2z M267.1,461.7h-23.9v-15.9   h23.9V461.7z M267.1,437.2h-23.9v-15.9h23.9V437.2z M267.1,412.7h-23.9v-15.9h23.9V412.7z M267.1,388.2h-23.9v-15.9h23.9V388.2z    M298.4,486.2h-23.9v-15.9h23.9V486.2z M298.4,461.7h-23.9v-15.9h23.9V461.7z M298.4,437.2h-23.9v-15.9h23.9V437.2z M298.4,412.7   h-23.9v-15.9h23.9V412.7z M298.4,388.2h-23.9v-15.9h23.9V388.2z M329.7,486.2h-23.9v-15.9h23.9V486.2z M329.7,461.7h-23.9v-15.9   h23.9V461.7z M329.7,437.2h-23.9v-15.9h23.9V437.2z M329.7,412.7h-23.9v-15.9h23.9V412.7z M329.7,388.2h-23.9v-15.9h23.9V388.2z" id="XMLID_220_"/><path d="M174.4,95.5v268.3h161.7V95.5H174.4z M329.7,355.3H180.8V347h148.9V355.3z M329.7,336.6H180.8v-8.3h148.9   V336.6z M329.7,317.9H180.8v-8.3h148.9V317.9z M329.7,299.1H180.8v-8.3h148.9V299.1z M329.7,280.4H180.8v-8.3h148.9V280.4z    M329.7,261.7H180.8v-8.3h148.9V261.7z M329.7,243H180.8v-8.3h148.9V243z M329.7,224.2H180.8V216h148.9V224.2z M329.7,205.5H180.8   v-8.3h148.9V205.5z M329.7,186.8H180.8v-8.3h148.9V186.8z M329.7,168.1H180.8v-8.3h148.9V168.1z M329.7,149.3H180.8v-8.3h148.9   V149.3z M329.7,130.6H180.8v-8.3h148.9V130.6z M329.7,111.9H180.8v-8.3h148.9V111.9z" id="XMLID_204_"/><polygon id="XMLID_203_" points="172,76.5 43.2,108.3 43.2,160.4 172,160.4  "/><polygon id="XMLID_202_" points="41.6,98.8 172,74.6 172,77.3 43.2,105.4  "/><polygon id="XMLID_201_" points="338.1,76.8 466.9,108.6 466.9,160.7 338.1,160.7  "/><polygon id="XMLID_200_" points="466.9,98.9 338.1,74.9 338.1,77.7 466.9,105.1  "/><g id="XMLID_191_"><path d="M237.6,36.2c-6.8,0-10.2,6.3-10.2,13.2c0,6.8,3.7,12.8,10.1,12.8c6.5,0,10.2-6,10.2-13.2    C247.7,42.8,244.4,36.2,237.6,36.2z" id="XMLID_199_"/><path d="M174.4,6v87.5h158.8V6H174.4z M217.8,65.1h-4.1V50.2h-15.3v14.9h-4.1V33.4h4.1v13.3h15.3V33.4h4.1V65.1z     M237.3,65.6c-8.4,0-14.2-6.5-14.2-16.1c0-10.1,6.3-16.6,14.7-16.6c8.7,0,14.2,6.6,14.2,16C252,59.8,245.4,65.6,237.3,65.6z     M276,36.8h-9.7v28.2h-4.1V36.8h-9.6v-3.5H276V36.8z M297.3,65.1h-17.8V33.4h17.1v3.4h-13v10h12.3v3.4h-12.3v11.4h13.7V65.1z     M320.3,65.1h-17.6V33.4h4.1v28.3h13.5V65.1z" id="XMLID_192_"/></g><rect height="9.5" id="XMLID_190_" width="446.1" x="33" y="496.5"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2"><a href="<?php echo ROOT_URL ?>setting\facilities" class="text-link text-dark">Facilities</a>
                  </h3>
                </div>
              </div>
            </div>
          <div class="col-md-12">
              <div class="card card-stats card2">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg height="32px" fill="white" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g transform="translate(384 144)"><path d="M-383-119h12c0.554,0,1-0.336,1-0.75v-1.5c0-0.414-0.446-0.75-1-0.75h-12c-0.553,0-1,0.336-1,0.75v1.5   C-384-119.336-383.553-119-383-119z M-383-115h12c0.554,0,1-0.336,1-0.75v-1.5c0-0.414-0.446-0.75-1-0.75h-12   c-0.553,0-1,0.336-1,0.75v1.5C-384-115.336-383.553-115-383-115z M-383-123h12c0.554,0,1-0.336,1-0.75v-1.5   c0-0.414-0.446-0.75-1-0.75h-12c-0.553,0-1,0.336-1,0.75v1.5C-384-123.336-383.553-123-383-123z M-368.044-123.397   c0.017-0.117,0.044-0.229,0.044-0.353v-1.5c0-1.543-1.316-2.75-3-2.75h-4c0-2.763,2.238-5,5-5c2.763,0,5,2.237,5,5   C-365-125.935-366.256-124.16-368.044-123.397z M-384-137h28v18h-12.118c0.07-0.237,0.118-0.487,0.118-0.75V-121h6   c0-2.209,1.791-4,4-4v-6c-2.209,0-4-1.791-4-4h-16c0,2.209-1.791,4-4,4v3h-1c-0.354,0-0.686,0.063-1,0.162V-137z M-352-141v20h-2   v-18h-28v-2H-352z"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2"><a href="<?php echo ROOT_URL ?>setting\Finacialsummary" class="text-link text-dark">Financial Summary</a>
                  </h3>
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
</body>

</html>