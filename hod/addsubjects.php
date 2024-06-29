<?php include("../includes/header.php");

if(isset($_POST['submit'])){
  $pcode = $_POST['pcode'];
  $pname = $_POST['pname'];
  $type = $_POST['type'];
  $under = $_POST['under'];
  
  $sql = "INSERT INTO tbl_subject  VALUES (null,'$pcode','$pname','$type','$under')";

  $result = mysqli_query($conn,$sql);

  if($result)
  {
    echo"inserted";
    //header("location:index.php?msg=New Record Created");
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
              <h2>HOD</h2>
            </div>
          </div>
          <!-- /menu profile quick info -->

          <br />


<?php include("../includes/hodsidebar.php"); ?>

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
                <h3>Department Of Computer Science</h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div> -->
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">

                    <form class="form-horizontal form-label-left" action="addsubjects.php" method="POST"  >

                      </p>
                      <span class="section">Subjects</span>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Code<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="empid" class="form-control col-md-7 col-xs-12" name="pcode" placeholder="Enter id" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Subject Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" name="pname" placeholder="both name(s) e.g Jon Doe" required="required" type="text">
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="" for="name">paper type<span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat" value="core"  name="type" value="core"> Core <br><br>
                              <input type="radio" class="flat" value="elective" name="type"  value="elective"> Elective




                            </label>
                          </div>
                          
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" name="" for="name">Comes under<span class="required">*</span>
                        </label>
                        <div class="radio">
                            <label>
                              <input type="radio" class="flat"   value="semester1" name="under" value="semester1"> semester 1 <br><br>
                              <input type="radio" class="flat"  value="semester2" name="under"  value="semester2">semester 2 <br><br>
                              <input type="radio" class="flat"  value="semester3" name="under"  value="semester3">semester 3 <br><br>
                              <input type="radio" class="flat"  value="semester4" name="under"  value="semester4">semester 4 




                            </label>
                          </div>
                          
                      </div>

                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >comes under <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6  col-xs-12">
                          <select class="form-control">
                            <option >Choose option</option>
                            <option name="under">Semester one</option>
                            <option name="under">Semester two</option>
                            <option name="under">Semester three</option>
                            <option name="under">Semester four</option>
                          </select>
                        </div>
                      </div> -->
                     
                      
                      
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