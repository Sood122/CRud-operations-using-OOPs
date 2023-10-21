<?php
session_start();
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'crudproject');
class DB_con
{
	function __construct()
	{
		$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
		$this->dbh = $con;
		// Check connection
		if (mysqli_connect_errno()) {
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
	}
	//Data Insertion Function
	public function insert($fname, $lname, $email, $phone_number, $address,$hash_password,$company_name,$city,$state,$country,$zip)
	{
		$ret = mysqli_query($this->dbh, "insert into userstbl(`first_name`, `last_name`, `email`, `password`, `phone_number`, `company_name`, `address`, `city`, `state`, `country`, `zipcode`) VALUES ('$fname', '$lname', '$email', '$hash_password', '$phone_number', '$company_name', '$address', '$city', '$state', '$country', '$zip');");
		return $ret;
	}
	//Data read Function
	public function fetchdata()
	{
		$result = mysqli_query($this->dbh, "select * from userstbl");
		return $result;
	}
	//Data one record read Function
	public function fetchonerecord($userid)
	{
		$oneresult = mysqli_query($this->dbh, "select * from userstbl where id=$userid");
		return $oneresult;
	}
	//Data updation Function
	public function update($fname, $lname, $email, $phone_number, $address,$company_name,$city,$state,$country,$zip, $userid)
	{
		$updaterecord = mysqli_query($this->dbh, "update  userstbl set first_name='$fname',last_name='$lname',email='$email',phone_number='$phone_number',address='$address',company_name='$company_name',city='$city',state='$state',country='$country',zipcode='$zip' where id='$userid' ");
		return $updaterecord;
	}
	//Data Deletion function Function
	public function delete($rid)
	{
		$deleterecord = mysqli_query($this->dbh, "delete from userstbl where id=$rid");
		return $deleterecord;
	}
}
?>