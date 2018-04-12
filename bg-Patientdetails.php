<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$_SESSION['pname'] = $_POST["name"];
	$_SESSION['pcontact'] = $_POST["contact"];

	require("dbconfig.php");

	// Create connection
	$conn = new mysqli($host, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}

	// if the user click "next", checking whether the user records is there in database or not
	if (isset($_POST['next']))
	{
		// checks weather the user is registered or not
		$sql = 'SELECT Phone FROM userinfo WHERE Phone LIKE"'. $_POST["contact"] . '" LIMIT 1';
		$result = $conn->query($sql);
		//$result = $result->fetch_assoc();

		// if it exist no problem else insist them to register
		if ($result->num_rows > 0)
			echo 1;		// it's there in record
		else
			echo 0;		// patient not exists
	}
	else if (isset($_POST['register']))
	{	
		echo "<script>alert('aagya re');</script>";
		// adding the new patient record to the database
		$sql = 'INSERT INTO userinfo (Name, EMail, Passw, Phone) VALUES ("' .$_POST['name']. '","' .$_POST['email']. '","' .$_POST['pwd'] . '","' . $_POST['contact']. '")';
		$conn->query($sql);

		// repeating just to ensure the details integrity
		$_SESSION['pname'] = $_POST["name"];
		$_SESSION['pcontact'] = $_POST["contact"];

		// once the user is registered, now prescribe them medicine!
		echo "<script>location.href='prescription.php';</script>";
	}
	mysqli_close($conn);
}