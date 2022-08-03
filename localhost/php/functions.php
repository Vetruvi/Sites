<?php
$Email = filter_var(trim($_POST['Email']),
FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']),
FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']),
FILTER_SANITIZE_STRING);
$Name = filter_var(trim($_POST['Name']),
FILTER_SANITIZE_STRING);
$SeconcName = filter_var(trim($_POST['SeconcName']),
FILTER_SANITIZE_STRING);

if (mb_strlen($Email) < 10 || mb_strlen($Email) > 50) {
	echo "Недопустимая длина почты";
	exit();
} else if (mb_strlen($pass) < 8 || mb_strlen($pass) > 50) {
	echo "Недопустимая длина пароля";
	exit();
} else if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
	echo "Недопустимая длина логина";
	exit();
} else if (mb_strlen($Name) < 2 || mb_strlen($Name) > 50) {
	echo "Недопустимая длина имени";
	exit();
} else if (mb_strlen($SeconcName) < 2 || mb_strlen($SeconcName) > 50) {
	echo "Недопустимая длина фамилии";
	exit();
}
		$mysql = new mysqli('localhost', 'root', 'root', 'users');
		$mysql -> query("INSERT INTO `users` (`email`, `pass`, `login`,  `name`, `secondname`) VALUES('$Email', '$pass', '$login','$Name','$SeconcName')");
		$mysql_close;
		header('Location: Registration.php');
?>