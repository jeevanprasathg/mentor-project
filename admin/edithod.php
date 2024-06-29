<?php include("../includes/header.php");

if(isset($_GET['empid'])){
  //$empid = $_POST['empid'];
  $ename = $row['ename'];
  $desgination = $row['desgination'];
  $email = $row['email'];
  $number = $row['number'];
  $joining = $row['joining'];
  $username = $row['username'];
  $password = md5($row['password']);
  $password2 = md5($row['password2']);

  //$sql = "INSERT INTO tbl_hod  VALUES (null,'$empid','$ename','$desgination','$email','$number','$joining','$username','$password','$password2')";
    $sql = "UPDATE tbl_hod  SET `id`=$id,`name`='$ename',`desgination`='$desgination',`email`='$email',`number`='$number',`joining`='$joining',`username`='$username',`password`='$password',`password2`='$password2' WHERE `empid`='$empid',";
  $result = mysqli_query($conn,$sql);
 // $result = mysqli_query($conn , $sql);
   $row = mysqli_fetch_assoc($result);

  if($result)
  {
   echo"updated";
   // header("location:index.php?msg= Record Updated");
  }
  else
  {
    echo"Failed:".mysqli_error($conn);
  }

  mysqli_close($conn);


  
 }




?>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>KGiSL -IIM</span></a>
          </div>

          <div class="clearfix"></div>

          <!-- menu profile quick info -->
          <div class="profile clearfix">
            <div class="profile_pic">
              <img src="images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome</span>
              <h2>admin</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />


<?php include("../includes/sidebar.php"); ?>

 <!-- top navigation -->
 <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Jeevan
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <!-- <li><a href="javascript:;">Help</a></li> -->
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit HOD</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="edithod.php" method="POST"  >

                      </p>
                      <span class="section">Edit Personal Info</span>

                       <?php 
                          //$empid = $_GET['empid'];
                          //$sql = "SELECT * FROM tbl_hod WHERE empid = $empid ";
                          //$result = mysqli_query($conn , $sql);
                          //$row = mysqli_fetch_assoc($result);
                         ?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="empid">Emp ID <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="empid" class="form-control col-md-7 col-xs-12" name="empid" value="" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="ename" value="" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Desgination <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="dest" class="form-control col-md-7 col-xs-12" name="desgination" value="" required="required" type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" value=""  required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Mobile Number <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="number" name="number" value="" required="required"  class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">Website URL <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" name="website" required="required" placeholder="www.website.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div> -->
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="joining">Date of joining <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="joining" type="date" name="joining" value="" class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div> 
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="username" type="text" name="username" value=""  class="optional form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" value="" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Repeat Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" value="" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>











<?php include("../includes/footer.php"); ?>