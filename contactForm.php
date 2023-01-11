<?php
	$Nom = $_POST['Nom'];
	$Prenom = $_POST['Prenom'];
	$Email = $_POST['Email'];
	$Message = $_POST['Message'];
	$conn = new mysqli('localhost','root','','contactForm');

	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(Nom, Prenom, Email, Message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $Nom, $Prenom, $Email, $Message);
		$execval = $stmt->execute();
		echo "registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>