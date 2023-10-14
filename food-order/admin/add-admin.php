<?php include('partials/menu.php'); ?>

<div class="main-content">
  <div class="wrapper">
<h1>Add Admin</h1>
<br><br>

<?php
if (isset($_SESSION['add'])) { //checking whether thesession is set or not

  echo $_SESSION['add']; //Displaying session message
  unset($_SESSION['add']); //Removing session message
}
 ?>

<form method="post" action="">  <!-- whenever we submit our value through form we need 'post'. Values are pass hidden.-->'
  <table class="tbl-30">
    <tr>
      <td>Full Name: </td>
      <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
      <tr>
      <td>Username: </td>
      <td>
        <input type="text" name="username" placeholder="Your Username">
      </td>
      </tr>
      <tr>
      <td>Password: </td>
      <td>
        <input type="password" name="password" placeholder="Your Password">
      </td>
      </tr>
    </tr>

    <tr>
      <td colspan="2">
        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
      </td>
    </tr>
  </table>
</form>


  </div>
</div>

<?php include('partials/footer.php') ?>

<?php
//process the value from From and save it in SQLiteDatabase
//Check whether the submit button is clicked or not
//1. Get the data from form
if(isset($_POST["submit"]))
{
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password =md5($_POST['password']); //md5 a function to encrypt the pass

    //2. SQL query to save the data into Database
    //not including ID below because id is primary and it will auto increment
    $sql = "INSERT INTO tbl_admin SET
    full_name ='$full_name',
    username ='$username',
    password ='$password'
    ";


    //3. executinh query and saving data into database
    //$resolve will hold the true or false value.
    //If query executed successfully the its value will be true and viceversa.
    $res = mysqli_query($conn,$sql) or die(mysqli_error()); //die will stop for the process

    //4. Check whether thw (query is executed) data is inserted or not and display appropriate message
    if($res==TRUE)
    {
      //Date Inserted
      //echo "data inserted";
      //create a session variable to display Message
      $_SESSION['add'] = "Admin added successfully";
      //Redirect Page to manage Admin
      header("location:".SITEURL.'admin/manage-admin.php');

    }

    else
    {
      // echo "failed to insert";
      //create a session variable to display Message
      $_SESSION['add'] = "Failed to Add Admin";
      //Redirect Page to add Admin
      header("location:".SITEURL.'admin/add-admin.php');
    }


}

?>
