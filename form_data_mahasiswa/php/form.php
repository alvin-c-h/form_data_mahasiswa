<?php
	//CAPTURE PARAMETER
	$name = $_POST['name'];
	$NIM = $_POST['NIM'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];

	//CONNECTION PARAMETER
	$host = 'db';
	$user = 'root';
	$password = 'root';
	$db = 'prak_sistem_terdistribusi';

	$conn = mysqli_connect($host,$user,$password,$db);
	if(! $conn ) {
		die('Could not connect: ' . mysqli_error());
	}
	echo 'Successfully connected to MYSQL <br> <br>';

	//DEFINE QUERY INSERT
	$sql = 'INSERT INTO mahasiswa (name, NIM, email, address, phone) VALUES("'.$name.'","'.$NIM.'","'.$email.'","'.$address.'","'.$phone.'")';
	
	//EXECUTE QUERY INSERT
	$retval = mysqli_query($conn, $sql);
	
	if(! $retval ) {
		die('Could get data: ' . mysqli_error());
	}
	
	echo 'Successfully Insert Data';
	
	mysqli_close($conn);
?>