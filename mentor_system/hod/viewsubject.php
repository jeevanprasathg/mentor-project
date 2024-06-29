<?php
include("../includes/header.php");
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




<?php
include("../includes/hodsidebar.php");
?>

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
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

            <div class="right_col" role="main">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Subject Details <small>Users</small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S.no</th>
                          <th>subject code</th>
                          <th>subject name</th>
                          <th>paper type</th>
                          <th>Comes under</th>
                          <th>Action</th>
                          
                        </tr>
                      </thead>


                      <tbody >
                        <?php  
                        $sql = "SELECT * FROM tbl_subject";
                        $result = mysqli_query($conn,$sql);

                        $id =1;
                        while($row = mysqli_fetch_assoc($result))
                        {

                         
                          $pcode = $row['pcode'];
                          $pname = $row['pname'];
                          $type = $row['type'];
                          $under = $row['under'];
                          //$joining = $row['joining'];

                          ?>
                        <tr>
                          <td><?php echo $id++ ?></td>
                          <!-- <td><?php echo $empid?></td> -->
                          <td><?php echo $pcode?></td>
                          
                          <td><?php echo $pname ?></td>
                          <td><?php echo $type ?></td>
                           <td><?php echo $under?></td>
                          
                          <td> 
                            <a href="deletesubject.php" name="del" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
                        </tr> 
                        
                          <?php
                        }
                        
                        ?>
                        
                        
                      
                
                       
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </div>
        
   

<?php
include("../includes/footer.php")
?>


<?php
    if(isset($_POST["del"]))
    {
        mysqli_query($link,"delete from tbl_subject where pname='$_POST[pname]'");
    }

    
    ?>