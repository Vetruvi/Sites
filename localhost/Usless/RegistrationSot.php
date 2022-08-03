<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Regisration</title>
	<link rel="stylesheet" href="RegistrationSot.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<div class="Logo">
			
			<h1><a class="logoo" href="YESS RUS.html"><img src="image/Лого.png" width="33px" height="54px"><span class="Bitmin">Вето-Банк</span></a></h1>
			<div class="Registr">
				<h2 class="Reg">Регистрация</h2>
				<a href="Base.php" class="Sign">База данных</a>
			</div>
		</div>

		<div class="Create">
			
				<form action="php/functionsSot.php" method="POST">
					<input type="text" name="SeconcName" class="form-control" id="SeconcName" placeholder="Фамилия"><br>
					<input type="text" name="Name" class="form-control" id="Name" placeholder="Имя"><br>
					<input type="text" name="ThirdName" class="form-control" id="ThirdName" placeholder="Отчество"><br>
					<input type="text" name="Adress" class="form-control" id="ThirdName" placeholder="Адрес"><br>
					<input type="text" name="Date" class="form-control" id="Date" placeholder="Дата рождения"><br>
					<input type="text" name="Telephone" class="form-control" id="Tel" placeholder="Телефон"><br>
					<input type="text" name="Kard" class="form-control" id="Kard" placeholder="Номер карты"><br>
					<input type="text" name="Kod" class="form-control" id="Kod" placeholder="Пин-код"><br>
					<input type="text" name="Login" class="form-control" id="Login" placeholder="Логин"><br>
					<input type="text" name="Password" class="form-control" id="Password" placeholder="Пароль"><br>
					<button type="submit" class="btn btn-success" name="submit">Зарегестрировать клиента</button><br>
				</form>
			

		</div>
		
			<!--<div class="soc">
				<a href="#">VK</a>
			</div>-->
			
			
			
	</main>
</body>
</html>