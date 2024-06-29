<?php  include ("../includes/header.php");?>

<?php  include ("../includes/dbconnection.php");?>

  <body class="login">
    <div>
     

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="login.php" method="post">
              <h1>HOD  Login </h1>

              <?php
            if(isset($_SESSION['login']))
            {
                echo($_SESSION['login']);
                unset($_SESSION['login']);//unset used to hide after reload the page
            }
            
            

            ?>



              <?php
              if(isset($_POST["submit"]))
              {
               $sql = "select * from tbl_admin where username='$_POST[username]' and password='$_POST[password]}'";
              // $res = $db -> query($sql);
               if($res->num_rows>0)
                {
                  $ro = $res->fetch_assoc();
                  $_SESSION["username"] = $ro["username"];
                  echo"<script>window.open('index.php')</script>";
                }
                else
                {
                 echo"<div class = 'error'>Invalid username or password</div>";
                }
              }

              ?>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" />
              </div>
              <div>
                <a class="btn btn-default submit" name="login">Log in</a>
              </div>

              <div class="clearfix"></div>

               <div class="separator">
                 

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> JEEVAN PRASATH G!</h1>
                  <p>©2023 All Rights Reserved.</p>
                </div>
              </div> 
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>


<?php
//submit button click or not
if(isset($_POST['submit']))
{
  

    //2.,sql query to check the username and password or not
    $sql ="SELECT*FROM tbl_admin WHERE username='$username' AND password='$password'";

    //3.,execute the query
    $res=mysqli_query($conn,$sql);

    //4., count ros to check the user exists are not

    $count =mysqli_num_rows($res);

    if($count==0)
    {
        //user available
        $_SESSION['login'] =" Login Successfull";
       // $_SESSION['user']= $username;//check whether the user is loggeg in or out

        //redirect to home page
        header("location:admin/index.php");
    }
    else{
        //user not available
        $_SESSION['login'] =" Login failed";
        //redirect to home page
        header("location:admin/login.php");
    }


}




?>



