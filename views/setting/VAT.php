 
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
                <li class="nav-item "><a class="nav-link" href="halls.html"><p>Halls</p></a></li>
                <li class="nav-item "><a class="nav-link" href="bar.html"><p>Bar</p></a></li>
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
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  
                  <div class="card-icon card-icon2">
                    <i class="material-icons"><?xml version="1.0" ?><svg fill="white" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><title/><g id="Solid"><path d="M216,336a72,72,0,1,0,72,72A72.08124,72.08124,0,0,0,216,336Zm24,64v16H224v16h16v16H224v16H208V448H192V432h16V416H192V400h7.355l-21.60205-27.00293,12.49414-9.99414L216,395.19336l25.75293-32.19043,12.49414,9.99414L232.645,400Z"/><path d="M457.97778,376h14.49463a72.37559,72.37559,0,0,0-40.54809-35.89746A88.40824,88.40824,0,0,1,457.97778,376Z"/><path d="M128,408a88.09957,88.09957,0,0,1,88-88h32a87.76277,87.76277,0,0,1,63.96338,27.62793A87.19592,87.19592,0,0,1,376,320h32a87.78731,87.78731,0,0,1,24,3.32666V104H384a24.0275,24.0275,0,0,1-24-24V32H88a8.00917,8.00917,0,0,0-8,8V472a8.00917,8.00917,0,0,0,8,8h77.4624A87.95674,87.95674,0,0,1,128,408ZM408,296H248V280H408Zm0-32H200V248H408Zm0-32H264V216H408Zm0-48v16H320V184ZM232,92.68652l24,24L300.68579,72H280V56h48v48H312V83.31421l-56,55.99927-24-24-50.34277,50.34375-11.31446-11.31446ZM104,184H304v16H104Zm0,32H248v16H104Zm0,32h80v16H104Zm0,32H232v16H104Zm0,32h48v16H104Z"/><path d="M271.9209,340.10156A88.40762,88.40762,0,0,1,297.97583,376h14.49658A72.37461,72.37461,0,0,0,271.9209,340.10156Z"/><path d="M271.9209,475.89844A72.37461,72.37461,0,0,0,312.47241,440H297.97583A88.40762,88.40762,0,0,1,271.9209,475.89844Z"/><path d="M431.92432,475.89746A72.37559,72.37559,0,0,0,472.47241,440H457.97778A88.40824,88.40824,0,0,1,431.92432,475.89746Z"/><path d="M478.18579,392H462.54a88.28764,88.28764,0,0,1,0,32h15.64575a71.46123,71.46123,0,0,0,0-32Z"/><path d="M302.53809,392a88.28764,88.28764,0,0,1,0,32h15.6477a71.46123,71.46123,0,0,0,0-32Z"/><path d="M376.002,336a71.36331,71.36331,0,0,0-54.01977,24.39844,87.83134,87.83134,0,0,1,0,95.20312A71.36331,71.36331,0,0,0,376.002,480a72,72,0,1,0,0-144Zm24,48h-24a8,8,0,0,0,0,16,23.99787,23.99787,0,0,1,8,46.62378V464h-16V448h-16V432h24a8,8,0,1,0,0-16,23.99787,23.99787,0,0,1-8-46.62378V352h16v16h16Z"/><path d="M384,88h36.68555L376,43.31445V80A8.00917,8.00917,0,0,0,384,88Z"/></g></svg></i>
                  </div>
                  <h3 class="card-title card-title2">Value Added Tax (VAT)
                  </h3>
                </div>
              </div>
            </div>

            
            <!-- VAT CARD -->
            <div class="col-md-12">
              <div class="card vatCard">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">VAT</h4>
                </div>
                <div class="card-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="add_user">
                        <div class="card-body">
                  <br>
                  <div class="row">
                        <div class="col-md-2">
                          <div class="form-group">
                            <h5 >Vate Rate</h5>
                          </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                            <label class="bmd-label-floating"></label>
                            <input type="number" class="form-control" value="">
                          </div>
                      </div>
                      <div class="col-md-2">
                        <div class="form-group">
                          <p>%</p>
                        </div>
                          
                      </div>
                  </div>
                  <br>
                  <h4 class="card-title">VAT RECORDS</h4>
                  <div class="row">
                        <div class="col-md-2 col-12">
                          <div class="form-group  p-2">
                            <select name="select"class="form-control">
                              <option value="0">Select Year</option>
                              <option value="1">2019</option>
                              <option value="1">2020</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group p-2">
                            <div class="form-group">
                            <label class="bmd-label-floating">Total VAT</label>
                            <input type="text" class="form-control" value="&#8358">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-2">
                        <button type="button" rel="tooltip" title="View More Details" class="btn btn-danger btn-link btn-lg  p-2">
                                <i class="material-icons">more_horiz</i>
                              </button>
                      </div>
                  </div>
                  <table class="table table-hover income">
                        <thead class="text-primary">
                          <th>Month</th>
                          <th>VAT Rate</th>
                          <th>Total VAT</th>
                          <th>Action</th>
                        </thead>
                        <tbody>
                          <tr>
                            <td>January</td>
                            <td>2%</td>
                            <td>10,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete Coupon" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>February</td>
                            <td>2%</td>
                            <td>15,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete Coupon" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>March</td>
                            <td>2%</td>
                            <td>10,310</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete Coupon" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                            </td>
                          </tr>
                          <tr>
                            <td>April</td>
                            <td>2%</td>
                            <td>1,000</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Delete Coupon" class="btn btn-danger btn-link btn-sm">
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