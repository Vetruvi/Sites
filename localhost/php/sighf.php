<?php
$Login = filter_var(trim($_POST['Login']),
FILTER_SANITIZE_STRING);
$Password = filter_var(trim($_POST['Password']),
FILTER_SANITIZE_STRING);
$Kard = filter_var(trim($_POST['Kard']),
FILTER_SANITIZE_STRING);
$Kod = filter_var(trim($_POST['Kod']),
FILTER_SANITIZE_STRING);

$mysql = new mysqli('localhost', 'root', 'root', 'registration');
	$query = mysqli_query($mysql, "SELECT * FROM `users` WHERE `Login` = '$Login' AND `Password` = '$Password'");
	$data = mysqli_query($mysql, "SELECT * FROM `users` WHERE `Kard` = '$Kard' AND `Kod` = '$Kod'"); 
		$user1 = mysqli_fetch_array($query);
		$user2 = mysqli_fetch_array($data);
		echo $user1;

		if(count($user1) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user1) == 1){
	echo "Логин или праоль введены неверно";
	exit();
}
else if(count($user2) == 0){
	echo "Такой пользователь не найден.";
	exit();
}
else if(count($user2) == 1){
	echo "Логин или праоль введены неверно";
	exit();
}



$mysql->close();

header('Location: Base.php');	

	

?>