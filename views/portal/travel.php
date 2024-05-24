<!--
=========================================================
Material Dashboard - v2.1.2
=========================================================
Product Page: https://www.creative-tim.com/product/material-dashboard
Copyright 2020 Creative Tim (https://www.creative-tim.com)
Coded by Creative Tim
=========================================================
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Halls
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
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
          School Management
        </a></div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>">
              <i class="material-icons">home</i>
              <p>Home</p>
            </a>
          </li>
          <li class="nav-item dropdwn active">
            <a class="nav-link" href="#">
              <i class="material-icons">content_paste</i>
              <p>Portal</p>
            </a>
            <ul class="unstyled-list">
              <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>portal\academic"><p>Academic</p></a></li>
              <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>portal\courses"><p>Courses</p></a></li>
              <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>portal\finance"><p>Finances</p></a></li>
              <li class="nav-item "><a class="nav-link" href="<?php echo ROOT_URL?>portal\travel"><p>Travel</p></a></li>
            </ul>
          </li>
          <li class="nav-item dropdwn">
            <a class="nav-link" href="#">
              <i class="material-icons">settings</i>
              <p>Settings</p>
            </a>
            <ul class="unstyled-list">
              <li class="nav-item"><a href="<?php echo ROOT_URL ?>setting\general" class="nav-link">
                  <p>General Settings</p>
                </a></li>
              <li class="nav-item"><a href="<?php echo ROOT_URL ?>setting\admin" class="nav-link">
                  <p>Administrative Settings</p>
                </a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="support.html">
              <i class="material-icons">messages</i>
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
            <a class="navbar-brand" href="javascript:;">Bookings</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">connecting_airports</i>
                  </div>
                  <p class="card-category">travel</p>
                  <h3 class="card-title">out of school
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger"></i>
                    <a href="javascript:;" data-toggle="modal" data-target="#addRooms">Book travel pass</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- ROOM BOOKING SECTION -->
            <style>
                  * {
                    box-sizing: border-box;
                  }

                  body {
                    background-color: #f1f1f1;
                  }

                  h1 {
                    text-align: center;
                  }

                  input {
                    font-size: 17px;
                    border: 1px solid #aaaaaa;
                  }

                  /* Mark input boxes that gets an error on validation: */
                  input.invalid {
                    background-color: #ffdddd;
                  }

                  /* Hide all steps by default: */
                  .tab {
                    display: none;
                  }

                  button {
                    background-color: #04AA6D;
                    color: #ffffff;
                    border: none;
                    padding: 10px 20px;
                    font-size: 17px;
                    font-family: Raleway;
                    cursor: pointer;
                  }

                  button:hover {
                    opacity: 0.8;
                  }

                  /* Make circles that indicate the steps of the form: */
                  .step {
                    height: 15px;
                    width: 15px;
                    margin: 0 2px;
                    background-color: #bbbbbb;
                    border: none;
                    border-radius: 50%;
                    display: inline-block;
                    opacity: 0.5;
                  }

                  .step.active {
                    opacity: 1;
                  }

                  /* Mark the steps that are finished and valid: */
                  .step.finish {
                    background-color: #04AA6D;
                  }
                </style>

            <!-- ALL ROOM BOOKING SUMMARY SECTION -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Hall Bookings</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Exit</th>
                      <th>Destination</th>
                      <th>Return</th>
                      <th>Student no</th>
                      <th>Parent no</th>
                      <th class="text-right">action</th>
                    </thead>
                    <tbody>
                      <?php foreach ($viewmodel as $item) : ?>
                        <?php if ($item['check_stats'] == "" && $item['stu_id'] == $_SESSION['user_data']['studentId']) : ?>
                          <tr>
                            <td><?php echo $item['date_of_exit']; ?></td>
                            <td><?php echo $item['destination']; ?></td>
                            <td><?php echo $item['date_of_return']; ?></td>
                            <td><?php echo $item['phone_no']; ?></td>
                            <td><?php echo $item['parent_phone_no']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Extend Stay" data-toggle="modal" data-target="#extend-stay" class="btn btn-warning btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Check-Out" data-toggle="modal" data-target="#receipt" class="btn btn-success btn-link btn-sm">
                                <i class="material-icons">done</i>
                              </button>
                              <form style="display: inline;" action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                <input type="hidden" name="check_stats_out" value="done">
                                <input type="hidden" value="check-out" name="checkout">
                                <button type="submit" rel="tooltip" class="btn btn-success btn-link btn-sm">
                                  <i class="material-icons">done</i>
                                </button>
                              </form>
                            </td>
                          </tr>
                        <?php else : ?>

                        <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- BOOKING ARCHIVE -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Booking Archive</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>S/n</th>
                      <th>Exit</th>
                      <th>Destination</th>
                      <th>Return</th>
                      <th>Student no</th>
                      <th>Parent no</th>
                      <th class="text-right">action</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <?php foreach ($viewmodel as $item) : ?>
                        <?php if ($item['check_stats'] == "returned" && $item['stu_id'] == $_SESSION['user_data']['studentId']) : ?>
                          <tr>
                            <td><?php echo $item['id']; ?></td>
                            <td><?php echo $item['date_of_exit']; ?></td>
                            <td><?php echo $item['destination']; ?></td>
                            <td><?php echo $item['date_of_return']; ?></td>
                            <td><?php echo $item['phone_no']; ?></td>
                            <td><?php echo $item['parent_phone_no']; ?></td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="More Details" data-toggle="" data-target="" class="btn btn-link btn-md">
                                <i class="material-icons">more_horiz</i>
                              </button>
                            </td>

                          </tr>
                        <?php else : ?>

                        <?php endif; ?>
                      <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- MODAL -->
      <!-- ------ADD ROOMS MODAL -->
      <div class="modal fade" id="addRooms" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Add Hall</h4>
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
                        <label class="bmd-label-floating">Hall Name</label>
                        <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Hall Capacity</label>
                        <input type="number" class="form-control" min="0">
                      </div>
                    </div>
                    <div class="col-md-6 col-12">
                      <div class="form-group">
                        <label class="bmd-label-floating">Hall Price</label>
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
      <!-- ---------------------------------------ADD EXPENSES -->
      <div class="modal fade" id="Expense" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Add Expenses</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <select name="select" id="select1" class="form-control">
                        <option value="0" class="bmd-label-floating">Select Expense</option>
                        <option value="1">Restaurant</option>
                        <option value="2">Others</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div id="restaurant">
                    <div class="col-6">
                      <div class="form-group">
                        <select name="select" id="select" class="form-control">
                          <option value="0" class="bmd-label-floating">Select Food</option>
                          <option value="1">Restaurant</option>
                          <option value="2">Others</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Quantity</label>
                        <input type="number" class="form-control" min="1" value="">
                      </div>
                    </div>
                    <div class="col-3">
                      <div class="form-group">
                        <label class="bmd-label-floating">Price</label>
                        <input type="text" class="form-control" value="&#8358">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row" id="others">
                  <div class="col-6">
                    <div class="form-group">
                      <label class="bmd-label-floating">Expense</label>
                      <input type="text" class="form-control" value="">
                    </div>
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label class="bmd-label-floating">Price</label>
                      <input type="text" class="form-control" value="&#8358">
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right">Add Expense</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- ----------------------------------------------------------CHECK-OUT MODAL -->
      <div class="modal fade" id="receipt" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-body">

              <div class="card-js">
                <div class="card-body">
                  <div class="card-title2">
                    <h2 class="modal-title" id="mediumModalLabel">Limpopo Spring Hotels</h2>
                    <p>Boskel Road Opposite Intels Camp, Off Aba/Port Harcourt Expressway, Port-Harcourt,Nigeria<br>
                      Email: reservation@limpopohote.com Website: www.limpopohotel.com</p>
                  </div>
                  <hr>
                  <h3 class="card-title summary-heading">Summary</h3>

                  <div class="summary-body">
                    <div class="row">
                      <div class="col-md-6">
                        <table class="top-table">
                          <tr>
                            <td>Name:</td>
                            <td class="text-right"><strong>Franklin Ugwuzo</strong></td>
                          </tr>
                          <tr>
                            <td>Adress:</td>
                            <td class="text-right"><strong>1 Odani lane</strong></td>
                          </tr>
                          <tr>
                            <td>Room Type/No:</td>
                            <td class="text-right"><strong>Single/010</strong></td>
                          </tr>
                          <tr>
                            <td>Rate:</td>
                            <td class="text-right"><strong><span>&#8358</span>82,000.00</strong></td>
                          </tr>
                        </table>
                      </div>
                      <div class="col-md-6">
                        <table class="top-table col-12">
                          <tr>
                            <td>Invoive #:</td>
                            <td class="text-right"><strong>11808</strong></td>
                          </tr>
                          <tr>
                            <td>Date Of Arrival:</td>
                            <td class="text-right"><strong>1 March 2020</strong></td>
                          </tr>
                          <tr>
                            <td>Date Of Depature:</td>
                            <td class="text-right"><strong>14 March 2020</strong></td>
                          </tr>
                          <tr>
                            <td>Number of Persons:</td>
                            <td class="text-right"><strong>1</strong></td>
                          </tr>
                          <tr>
                            <td>Print Date:</td>
                            <td class="text-right"><strong>14 March 2020</strong></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <table class="middle-table col-12">
                          <tr>
                            <th>S/n</th>
                            <th>Description</th>
                            <th>DR</th>
                            <th>CR</th>
                            <th>Entry By</th>
                            <th>Entry Date</th>
                          </tr>

                          <tr>
                            <td>1</td>
                            <td>Logging Bill On Check In</td>
                            <td><span>&#8358</span>83,000</td>
                            <td><span>&#8358</span>0.00</td>
                            <td>Chizzy</td>
                            <td>1 March 2020</td>
                          </tr>

                          <tr>
                            <td></td>
                            <td></td>
                            <td><span>&#8358</span>83,000</td>
                            <td><span>&#8358</span>0.00</td>
                            <td></td>
                            <td></td>
                          </tr>
                        </table>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-12">
                        <table class="bottom-table float-right col-md-6">
                          <tr>
                            <td>VAT:</td>
                            <td class="text-right"><strong><span>&#8358</span>2,000.00</strong></td>
                          </tr>
                          <tr>
                            <td>Service Charge:</td>
                            <td class="text-right"><strong><span>&#8358</span>4,400.00</strong></td>
                          </tr>
                          <tr>
                            <td>Date Of Depature:</td>
                            <td class="text-right"><strong>14 March 2020</strong></td>
                          </tr>
                          <tr>
                            <td>Number of Persons:</td>
                            <td class="text-right"><strong>1</strong></td>
                          </tr>
                          <tr>
                            <td>Print Date:</td>
                            <td class="text-right"><strong>14 March 2020</strong></td>
                          </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="card-footer2">
                    <p>I/We agree that my/our liability for this bill is not walved and agree to be held personally/jointly liable in the event that the sponsoring authority fails to pay for any part or the full amount of these charges.
                    <h5>ACCOUNT CERTIFIED CORRECT, GUEST SIGNATURE:<span> </span></h5>
                    <h5>PLEASE DROP YOUR KEY AT THE RECEPTION</h5>
                  </div>

                  <button type="submit" class="btn btn-primary pull-right col-12">Print</button>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- -----------------EXTEND STAY MODAL -->
      <div class="modal fade" id="extend-stay" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header header-primary">
              <h4>Extend Stay</h4>
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
                        <div class="col-12">
                          <div class="form-group">
                            <label>Check-In-Date</label>
                            <input type="date" class="form-control" id="disabled-input" name="disabled-input" placeholder="" disabled="12/12/2019">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label>Check-Out-Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="" type="text">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="form-group">
                            <label>New-Check-Out-Date</label>
                            <input type="date" class="form-control" id="date" name="date" value="12/12/2019" type="text">
                          </div>
                        </div>

                      </div>

                      <button type="submit" class="btn btn-primary pull-right">Extend</button>
                      <div class="clearfix"></div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- END OF MODAL -->
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
          <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank" class="btn btn-primary btn-block">Free Download</a>
        </li>
        <!-- <li class="header-title">Want more components?</li>
                  <li class="button-container">
                    <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                      Get the pro version
                    </a>
                  </li> -->
        <li class="button-container">
          <a href="https://demos.creative-tim.com/material-dashboard/docs/2.1/getting-started/introduction.html" target="_blank" class="btn btn-default btn-block">
            View Documentation
          </a>
        </li>
        <li class="button-container github-star">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
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
    $(document).ready(function() {
      $().ready(function() {
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
        $('.fixed-plugin a').click(function(event) {
          // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });
        $('.fixed-plugin .active-color span').click(function() {
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
        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');
          var new_color = $(this).data('background-color');
          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });
        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');
          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');
          var new_image = $(this).find("img").attr('src');
          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }
          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');
            $full_page_background.fadeOut('fast', function() {
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
        $('.switch-sidebar-image input').change(function() {
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
        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');
          $input = $(this);
          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();
          } else {
            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');
            setTimeout(function() {
              $('body').addClass('sidebar-mini');
              md.misc.sidebar_mini_active = true;
            }, 300);
          }
          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);
          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);
        });
      });
    });
  </script>
</body>

</html>