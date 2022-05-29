<?php  

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "catering";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$salt = "catering";
$password_encrypted = sha1($password.$salt);


$sql = "INSERT INTO user (name, emailid, password) 
VALUES ('$name', '$email', '$password_encrypted')";

if($conn->query($sql) === TRUE){
	
	header("Location: signlog.php");
	?>
	<script>
		alert('Values have been inserted');
		
	</script>
	<?php
	
}
else{
	?>
	<script>
		alert('Values did not insert');
	</script>
	<?php
}


?>




















