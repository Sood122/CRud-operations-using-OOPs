<?php
// include database connection file
require_once 'function.php';
// Object creation
$insertdata = new DB_con();
if (isset($_POST['insert'])) {
    // Posted Values
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone_number'];
    $password = $_POST['password'];
    $hash_password = hash('sha512', $password);
    $company_name = $_POST['company_name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $zip = $_POST['zipcode'];
    //Function Calling
    $sql = $insertdata->insert($fname, $lname, $email, $phone_number, $address,$hash_password,$company_name,$city,$state,$country,$zip);
    if ($sql) {
        // Message for successfull insertion
        echo "<script>alert('Record inserted successfully');</script>";
        echo "<script>window.location.href='index.php'</script>";
    } else {
        // Message for unsuccessfull insertion
        echo "<script>alert('Something went wrong. Please try again');</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Insert Data</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <h3>Insert Data</h3>
                <hr />
            </div>
        </div>


        <form name="insertrecord" method="post">
            <div class="row">
                <div class="col-md-4"><b>First Name</b>
                    <input type="text" name="first_name" class="form-control" required>
                </div>
                <div class="col-md-4"><b>Last Name</b>
                    <input type="text" name="last_name" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"><b>Email id</b>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="col-md-4"><b>Phone Number</b>
                    <input type="text" name="phone_number" class="form-control" maxlength="10" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"><b>Password</b>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <div class="col-md-4"><b>Confirm Password</b>
                    <input type="text" name="cpassword" class="form-control" maxlength="10" required>
                </div>
            </div>



            <div class="row">
                <div class="col-md-4"><b>Company Nmae</b>
                    <input type="text" name="company_name" class="form-control" required>
                </div>
                <div class="col-md-4"><b>Address</b>
                    <textarea class="form-control" name="address" required></textarea>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4"><b>City</b>
                    <input type="text" name="city" class="form-control" required>
                </div>
                <div class="col-md-4"><b>State</b>
                    <input type="text" name="state" class="form-control" required>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4"><b>Country</b>
                    <input type="text" name="country" class="form-control" required>
                </div>
                <div class="col-md-4"><b>Zipcode</b>
                    <input type="text" name="zipcode" class="form-control" required>
                </div>
            </div>
            
            <div class="row" style="margin-top:1%">
                <div class="col-md-8">
                    <input type="submit" name="insert" value="Submit">
                </div>
            </div>



        </form>
    </div>
    </div>
</body>

</html>