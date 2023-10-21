<?php
// include function file
include_once("function.php");
//Object
$updatedata = new DB_con();
if (isset($_POST['update'])) {
  // Get the userid
  $userid = intval($_GET['id']);
  // Posted Values
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $email = $_POST['email'];
  $phone_number = $_POST['phone_number'];
  $company_name = $_POST['company_name'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $country = $_POST['country'];
  $zip = $_POST['zipcode'];
  //Function Calling
  $sql = $updatedata->update($fname, $lname, $email, $phone_number, $address, $company_name, $city, $state, $country, $zip, $userid);
  // Mesage after updation
  echo "<script>alert('Record Updated successfully');</script>";
  // Code for redirection
  echo "<script>window.location.href='index.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Update</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <h3>Update Records</h3>
        <hr />
      </div>
    </div>

    <?php
    // Get the userid
    $userid = intval($_GET['id']);
    $onerecord = new DB_con();
    $sql = $onerecord->fetchonerecord($userid);
    $i = 1;
    while ($row = mysqli_fetch_array($sql)) {
    ?>
      <form name="insertrecord" method="post">
        <div class="row">
          <div class="col-md-4"><b>First Name</b>
            <input type="text" name="first_name" value="<?php echo htmlentities($row['first_name']); ?>" class="form-control" required>
          </div>
          <div class="col-md-4"><b>Last Name</b>
            <input type="text" name="last_name" value="<?php echo htmlentities($row['last_name']); ?>" class="form-control" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"><b>Email id</b>
            <input type="email" name="email" value="<?php echo htmlentities($row['email']); ?>" class="form-control" required>
          </div>
          <div class="col-md-4"><b>phone_number</b>
            <input type="text" name="phone_number" value="<?php echo htmlentities($row['phone_number']); ?>" class="form-control" maxlength="10" required>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4"><b>Company Nmae</b>
            <input type="text" name="company_name" value="<?php echo htmlentities($row['company_name']); ?>" class="form-control" required>
          </div>
          <div class="col-md-4"><b>address</b>
            <textarea class="form-control" name="address" required><?php echo htmlentities($row['address']); ?></textarea>
          </div>
        </div>

        <div class="row">
                <div class="col-md-4"><b>City</b>
                    <input type="text" name="city" value="<?php echo htmlentities($row['city']); ?>"class="form-control" required>
                </div>
                <div class="col-md-4"><b>State</b>
                    <input type="text" name="state" value="<?php echo htmlentities($row['state']); ?>"class="form-control" required>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4"><b>Country</b>
                    <input type="text" name="country" value="<?php echo htmlentities($row['country']); ?>"class="form-control" required>
                </div>
                <div class="col-md-4"><b>Zipcode</b>
                    <input type="text" name="zipcode" value="<?php echo htmlentities($row['zipcode']); ?>"class="form-control" required>
                </div>
            </div>

      <?php } ?>
      <div class="row" style="margin-top:1%">
        <div class="col-md-8">
          <input type="submit" name="update" value="Update">
        </div>
      </div>
      </form>


  </div>
  </div>

</body>
</htm