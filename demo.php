<?php
error_reporting(0);
include('config.php');
$result = mysqli_query($conn, "SELECT* from department ORDER by id DESC");
$hamid = mysqli_query($conn, "SELECT* from designation ORDER by id DESC");
$aliyan = mysqli_query($conn, "SELECT* from employee ORDER by id DESC");
?>
<?php
  if (isset($_POST['ADD'])) {
                 $DesignationTitle = $_POST['DesignationTitle'];
                 $DesignationID = $_POST['DesignationID'];
                 $PickColor = $_POST['PickColor'];
    $hamid = mysqli_query($conn, "INSERT into designation value( '', '$DesignationTitle', '$DesignationID','$PickColor')");
                 };
                 header("Location:department.php");
                 ?>