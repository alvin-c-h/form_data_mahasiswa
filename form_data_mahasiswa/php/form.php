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
	
	
	//DEFINE MAKE TABLE
	$sql = 'CREATE TABLE IF NOT EXISTS `mahasiswa` (`id_mahasiswa` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,`name` varchar(80) NOT NULL,`NIM` int(11) NOT NULL,`email` varchar(80) NOT NULL,`address` varchar(200) NOT NULL,`phone` varchar(30) NOT NULL)';
	
	//EXECUTE MAKE TABLE
	$retval = mysqli_query($conn, $sql);
	
	//DEFINE QUERY INSERT
	$sql = 'INSERT INTO mahasiswa (name, NIM, email, address, phone) VALUES("'.$name.'","'.$NIM.'","'.$email.'","'.$address.'","'.$phone.'")';
	
	//EXECUTE QUERY INSERT
	$retval = mysqli_query($conn, $sql);
	
	//DEFINE SELECT QUERY
	$sql = 'SELECT * FROM mahasiswa';
	
	//EXECUTE SELECT QUERY
	$retval = mysqli_query($conn, $sql);
	
	//LOOPING TO DISPLAY ALL DATA
    while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    echo "id_mahasiswa : {$row['id_mahasiswa']} <br>".
        "name : {$row['name']} <br> ".
        "NIM : {$row['NIM']} <br> ".
		"email : {$row['email']} <br> ".
		"address : {$row['address']} <br> ".
		"phone : {$row['phone']} <br> ".
        "------------------------------- <br> ";
    }

?>