<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo ROOT_PATH ?>assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?php echo ROOT_PATH ?>assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rooms
  </title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo ROOT_PATH ?>assets/css/material-dashboard.css?v=2.1.2" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?php echo ROOT_PATH ?>assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white"
      data-image="<?php echo ROOT_PATH ?>assets/img/sidebar-1.jpg">
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
            <a class="nav-link" href="<?php echo ADMIN_ROOT_URL ?>">
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
              <li class="nav-item "><a class="nav-link" href="<?php echo ADMIN_ROOT_URL?>academic">
                  <p>Academic</p>
                </a></li>
              <li class="nav-item "><a class="nav-link" href="<?php echo ADMIN_ROOT_URL?>courses">
                  <p>Courses</p>
                </a></li>
              <li class="nav-item "><a class="nav-link" href="<?php echo ADMIN_ROOT_URL?>travel">
                  <p>Travel</p>
                </a></li>
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
            <a class="navbar-brand" href="javascript:;">Student Profile</a>
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
                  <a class="dropdown-item" href="<?php echo ROOT_URL; ?>users/logout">Log out</a>
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

            <?php Messages::display(); ?>
            <div class="col-md-12">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">people</i>
                  </div>
                  <p class="card-category">students</p>
                  <h3 class="card-title">
                    <?php
                  require 'C:\xampp\htdocs\damvola\classes\class.php';
                            $database = new Database;
                            $database->query("SELECT COUNT(*) FROM users");
                            $rows = $database->resultset();
                        ?>
                    <?php foreach($rows as $row) : ?>
                    <div style="margin-top:5px;">
                      <?php print_r(implode($row)); ?>
                    </div>
                    <?php endforeach; ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <i class="material-icons text-danger"></i>results
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
                  <h4 class="card-title">Current Booking</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Student ID</th>
                      <th>Name</th>
                      <th class="text-right">Action</th>

                      <th></th>
                    </thead>
                    <tbody>
                      <?php
                        $database->query("SELECT * FROM users ");
                        $rows = $database->resultset();
                      ?>
                      <?php foreach ($rows as $row) : ?>
                      <tr>
                        <td>
                          <?php echo $row['stu_id'] ?>
                        </td>
                        <td>
                          <?php echo $row['sname'] ?>
                          <?php echo $row['fname'] ?>
                        </td>
                        <td class=" text-right">
                          <a href="#" data-toggle="modal" data-target="#<?php echo $row['stu_id'] ?>addRoom"
                            class="btn btn-primary pull-right">Upload Result</a>
                        </td>
                      </tr>
                      <div class="modal fade" id="<?php echo $row['stu_id'] ?>addRoom" tabindex="-1" role="dialog"
                        aria-labelledby="mediumModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                          <div class="modal-content">
                            <div class="modal-header header-primary">
                              <h4>upload
                                <?php echo $row['stu_id'] ?> result
                              </h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body">
                              <div class="card-body">
                                <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                                  <div class="row">
                                    <div class="col-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Course</label>

                                        <select name="course" id="select" class="form-control">
                                          <option value="0">&nbsp;</option>
                                          <?php foreach ($viewmodel as $item) : ?>
                                            <?php if ($row['stu_id'] == $item['stu_id']): ?>
                                              <option value="<?php echo $item['course_title'] ?> <?php echo $item['course_unit'] ?>">
                                                <?php echo $item['course_title'] ?>&nbsp;
                                                <?php echo $item['course_unit'] ?>
                                              </option>
                                              <?php else : ?>
    
                                              <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                        <input type="hidden" name="unit" value="">
                                        <div class="select-icon">
                                          <i class="material-icons text-seconday"
                                            style="font-size: 1.5rem;">arrow_drop_down</i>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Point</label>
                                        <input type="number" name="point" class="form-control" min="0">
                                      </div>
                                    </div>
                                    <div class="col-md-6 col-12">
                                      <div class="form-group">
                                        <label class="bmd-label-floating">Grade</label>
                                        <select name="grade" id="select" class="form-control">
                                          <option value="0">Grade</option>
                                          <option value="A">A</option>
                                          <option value="B">B</option>
                                          <option value="C">C</option>
                                          <option value="D">D</option>
                                          <option value="F">F</option>
                                        </select>
                                        <div class="select-icon">
                                          <i class="material-icons text-seconday"
                                            style="font-size: 1.5rem;">arrow_drop_down</i>
                                        </div>
                                      </div>
                                    </div>

                                    <input type="hidden" name="staffid" value="<?php echo $_SESSION['admin_user_data']['staff_Id'] ?>">
                                    <input type="hidden" name="id" value="<?php echo $row['stu_id'] ?>">
                                  </div>

                                  <input type="submit" name="room_add" value="Add" class="btn btn-primary pull-right">
                                  <div class="clearfix"></div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Current Booking</h4>
                </div>
                <div class="card-body table-responsive">
                  <table class="table table-hover">
                    <thead class="text-warning">
                      <th>Studnet ID</th>
                      <th>Course Title</th>
                      <th>Points </th>
                      <th>course Unit</th>
                      <th>Grade</th>
                      <th></th>
                    </thead>
                    <tbody>
                      <tr>
                      <?php
                        $database->query("SELECT * FROM academic ORDER BY id DESC");
                        $rows = $database->resultset();
                      ?>
                        <?php foreach ($rows as $row) : ?>
                          <td><?php echo $row['stu_id'] ?></td>
                          <td><?php echo $row['course_name'] ?></td>
                          <td><?php echo $row['points'] ?></td>
                          <td><?php echo $row['course_unit'] ?></td>
                          <td><?php echo $row['grade'] ?></td>
                      </tr>
                  <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- MODAL -->
    <!-- ------ADD ROOMS MODAL -->
    <div class="modal fade" id="addRoom" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
      aria-hidden="true">
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
              <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
                <div class="row">
                  <div class="col-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Courses title</label>
                      <input type="text" name="title" class="form-control" min="0">
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">Courses code</label>
                      <input type="text" name="code" class="form-control" min="0">
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">course unit</label>
                      <input type="number" name="unit" class="form-control" min="0">
                    </div>
                  </div>
                </div>

                <input type="submit" name="room_course" value="Add" class="btn btn-primary pull-right">
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- ---------------------------------------ADD EXPENSES -->
    <div class="modal fadeIn" id="Expense" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
          <div class="modal-header header-primary">
            <h4>Add Expenses</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="addExpense">
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <select name="select" class="form-control">
                      <option value="0" class="bmd-label-floating">Select Expense</option>
                      <option value="1">Restaurant</option>
                      <option value="2">Bar</option>
                      <option value="3">Others</option>
                    </select>
                    <div class="select-icon">
                      <i class="material-icons text-seconday" style="font-size: 1.5rem;">arrow_drop_down</i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row expenseBody income">
                <div class="col-6">
                  <div class="form-group">
                    <select name="select" id="select" class="form-control">
                      <option value="0">Choose Category</option>
                      <option value="1">Local</option>
                      <option value="2">Intercontinental</option>
                      <option value="3">Snacks</option>
                      <option value="4">Deserts</option>
                    </select>
                    <div class="select-icon">
                      <i class="material-icons text-seconday" style="font-size: 1.5rem;">arrow_drop_down</i>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <select name="select" id="select" class="form-control">
                      <option value="0" class="bmd-label-floating">Select Food</option>
                      <option value="1">Rice and Stew</option>
                      <option value="2">Fried Rice</option>
                    </select>
                    <div class="select-icon">
                      <i class="material-icons text-seconday" style="font-size: 1.5rem;">arrow_drop_down</i>
                    </div>
                  </div>
                </div>
                <div class="col-6">
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
              <div class="row expenseBody income">
                <div class="col-6">
                  <div class="form-group">
                    <select name="select" id="select" class="form-control">
                      <option value="0">Choose Category</option>
                      <option value="1">Spirit</option>
                      <option value="2">Beer</option>
                      <option value="3">Soft Drink</option>
                      <option value="4">Wine</option>
                    </select>
                    <div class="select-icon">
                      <i class="material-icons text-seconday" style="font-size: 1.5rem;">arrow_drop_down</i>
                    </div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <select name="select" id="select" class="form-control">
                      <option value="0" class="bmd-label-floating">Select Drink</option>
                      <option value="1">Pure Heaven</option>
                      <option value="2">Eva</option>
                    </select>
                    <div class="select-icon">
                      <i class="material-icons text-seconday" style="font-size: 1.5rem;">arrow_drop_down</i>
                    </div>
                  </div>
                </div>
                <div class="col-6">
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
              <div class="row expenseBody income">
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
    <div class="modal fade" id="receipt" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-body">

            <div class="card">
              <div class="card-body">
                <div class="card-title2">
                  <h2 class="modal-title" id="mediumModalLabel">Limpopo Spring Hotels</h2>
                  <p>Boskel Road Opposite Intels Camp, Off Aba/Port Harcourt Expressway,
                    Port-Harcourt,Nigeria<br>
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
                          <td class="text-right">
                            <strong><span>&#8358</span>82,000.00</strong>
                          </td>
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
                          <td class="text-right">
                            <strong><span>&#8358</span>2,000.00</strong>
                          </td>
                        </tr>
                        <tr>
                          <td>Service Charge:</td>
                          <td class="text-right">
                            <strong><span>&#8358</span>4,400.00</strong>
                          </td>
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
                  <p>I/We agree that my/our liability for this bill is not walved and agree to be
                    held personally/jointly liable in the event that the sponsoring authority
                    fails to pay for any part or the full amount of these charges.
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
    <div class="modal fade" id="extend-stay" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
      aria-hidden="true">
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
                          <input type="date" class="form-control" id="disabled-input" name="disabled-input"
                            placeholder="" disabled="12/12/2019">
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
            <img src="<?php echo ROOT_PATH ?>assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo ROOT_PATH ?>assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo ROOT_PATH ?>assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="<?php echo ROOT_PATH ?>assets/img/sidebar-4.jpg" alt="">
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
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot;
            45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot;
            50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="<?php echo ROOT_PATH ?>assets/js/core/jquery.min.js"></script>
  <script src="<?php echo ROOT_PATH ?>assets/js/core/popper.min.js"></script>
  <script src="<?php echo ROOT_PATH ?>assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<? echo ROOT_PATH ?>assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo ROOT_PATH ?>assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo ROOT_PATH ?>assets/js/material-dashboard.js?v=2.1.2" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo ROOT_PATH ?>assets/demo/demo.js"></script>
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

          if ($sidebar_img_container.length != 0 && $(
            '.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' +
                new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $(
            '.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
              'img').data('src');

            $full_page_background.fadeOut('fast', function () {
              $full_page_background.css('background-image', 'url("' +
                new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr(
              'src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find(
              'img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' +
              new_image_full_page + '")');
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
        const cooperate = document.getElementById('cooperate');
        const individual = document.getElementById('individual');
        const cooperate2 = document.querySelector('.cooperate');
        const addCoperate = document.getElementById('add');

        individual.checked = true;

        cooperate2.style.display = 'none';
        addCoperate.style.display = 'none';



        cooperate.onclick = () => {
          if (cooperate.checked == true) {
            cooperate2.style.display = 'block';
            addCoperate.style.display = 'block';
            add.previousElementSibling.previousElementSibling.classList =
              'row show-clicked'
          };
        };

        individual.onclick = () => {
          cooperate2.style.display = 'none';
          addCoperate.style.display = 'none';
          add.previousElementSibling.previousElementSibling.classList = 'row income'
        };

        const extraRoom = document.getElementById('extraRoom');
        let extraRoomOptions = document.querySelectorAll('.extra');

        extraRoom.addEventListener('click', () => {
          for (let i = 1; i < extraRoomOptions.length; i++) {
            if (extraRoom.value == i) {

              for (let a = i; a > 0; a--) {
                extraRoomOptions[a].classList = 'row extra show';
              }
            }

            while (i > extraRoom.value) {
              extraRoomOptions[i].classList = 'row extra income';
              i++
            }
          }
        })

      });
    });
  </script>
  <script src="<?php echo ROOT_PATH ?>assets/js/main.js"></script>
</body>

</html>