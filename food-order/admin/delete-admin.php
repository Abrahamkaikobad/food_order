<?php
//Include constants .php file here
include('../config/constants.php');

//1.Get the ID of admin to be deleted
echo $id = $_GET['id'];
//2.create sql query to delete Admin
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//Execute the Query
$res = mysqli_query($conn, $sql);

// check whether the query executed successfully or not
if($res == TRUE)
{
  //Query Executed succesffulyy and admin deleted
  //echo "Admin Deleted";
  //Create session varibale to display Message
  $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
  //Redirect to Manage admin page
  header('location:'.SITEURL.'admin/manage-admin.php');
}

else {

   // Failed to delete admin
  // echo "Failed to Delte Admmin";

  $SESSION['delete'] = "<div class='error'>Failed to Delete Admin. Try Again later.</div>";
  header('location:'.SITEURL.'admin/manage-admin.php');

}
//3.redirect to manage admin page with message(success/error)

 ?>
