<?php
$SeconcName = filter_var(trim($_POST['SeconcName']),
FILTER_SANITIZE_STRING);
$Name = filter_var(trim($_POST['Name']),
FILTER_SANITIZE_STRING);
$ThirdName = filter_var(trim($_POST['ThirdName']),
FILTER_SANITIZE_STRING);
$Adress = filter_var(trim($_POST['Adress']),
FILTER_SANITIZE_STRING);
$Date = filter_var(trim($_POST['Date']),
FILTER_SANITIZE_STRING);
$Telephone = filter_var(trim($_POST['Telephone']),
FILTER_SANITIZE_STRING);
$Kard = filter_var(trim($_POST['Kard']),
FILTER_SANITIZE_STRING);
$Kod = filter_var(trim($_POST['Kod']),
FILTER_SANITIZE_STRING);
$Login = filter_var(trim($_POST['Login']),
FILTER_SANITIZE_STRING);
$Password = filter_var(trim($_POST['Password']),
FILTER_SANITIZE_STRING);
$Email = filter_var(trim($_POST['Email']),
FILTER_SANITIZE_STRING);
$MailIndex = filter_var(trim($_POST['MailIndex']),
FILTER_SANITIZE_STRING);

if (mb_strlen($SeconcName) < 1 || mb_strlen($SeconcName) > 50) {
	echo "Недопустимая длина фамилии";
	exit();
} else if (mb_strlen($Adress) < 2 || mb_strlen($Adress) > 100) {
	echo "Недопустимая длина адресса";
	exit();
} else if (mb_strlen($Date) < 2 || mb_strlen($Date) > 50) {
	echo "Недопустимая длина даты рождения";
	exit();
} else if (mb_strlen($Telephone) < 2 || mb_strlen($Telephone) > 50) {
	echo "Недопустимая длина телефона";
	exit();
}



		$mysql = new mysqli('localhost', 'root', 'root', 'registration');

		$mysql -> query("INSERT INTO `users` (`SeconcName`, `Name`, `ThirdName`, `Adress`,  `Date`, `Telephone`, `Kard`, `Kod`, `Login`, `Password`, `Email`, `MailIndex`) VALUES('$SeconcName', '$Name', '$ThirdName', '$Adress', '$Date', '$Telephone', '$Kard', '$Kod', '$Login', '$Password', '$Email', '$MailIndex')");

		$mysql -> close();
		header('Location: /Base.php');
?>