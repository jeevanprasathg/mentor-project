<?php 

include("../includes/header.php"); 

$sql = "DELETE FROM tbl_hod WHERE empid='" . $_GET["empid"] . "'";
$id =  $_GET["empid"];

$result = mysqli_query($conn,$sql);

if($result==true)
{

   echo "<script> 
            alert('HOD Deleted <?php echo $id; ?>');
            window.open('viewhod.php','_self');
          </script>";
}
else
{
  echo"Failed:".mysqli_error($conn);
}


mysqli_close($conn);








?>




