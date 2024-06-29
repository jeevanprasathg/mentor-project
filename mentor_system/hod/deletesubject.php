<?php include("../includes/header.php");?>

<?php
if(isset($_POST["del"]))
{
    $sql = "DELETE FROM  tbl_subject WHERE pname='$_POST[pname]'";
    $result = mysqli_query($conn,$sql);
}






?>