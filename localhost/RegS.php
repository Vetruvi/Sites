<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Regisration</title>
	<link rel="stylesheet" href="RegS.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<div class="ramka-6">
			<div class="Reh">
				<h1>Регистрация клиентов</h1>
			</div>
			<form action="php/functionsSot.php" method="POST">
				<div class="Reg">
					<p class="oneP">Фамилия</p>
					<p class="twoP">Имя</p>
					<p class ="threeP">Отчество</p>
				</div>
				<div class="Reg">
					<input type="text" name="SeconcName" class="form-control" id="SeconcName" placeholder="Фамилия"><br>
					<input type="text" name="Name" class="form-control" id="Name" placeholder="Имя"><br>
					<input type="text" name="ThirdName" class="form-control" id="ThirdName" placeholder="Отчество"><br>
				</div>
				<div class="Reg">
					<p class="onePA">Адрес</p>
					<p class="twoPD">Дата рождения</p>
					<p class ="threePT">Телефон</p>
				</div>
				<div class="Reg">
					<input type="text" name="Adress" class="form-control" id="ThirdName" placeholder="Адрес"><br>
					<input type="text" name="Date" class="form-control" id="Date" placeholder="Дата рождения"><br>
					<input type="text" name="Telephone" class="form-control" id="Tel" placeholder="Телефон"><br>
				</div>
				<div class="Reg">
					<p class="oneP1">Номер карты</p>
					<p class="twoP2">Пин-код</p>
					<p class ="threeP3">Логин</p>
				</div>
				<div class="Reg">
					<input type="text" name="Kard" class="form-control" id="Kard" placeholder="Номер карты"><br>
					<input type="text" name="Kod" class="form-control" id="Kod" placeholder="Пин-код"><br>
					<input type="text" name="Login" class="form-control" id="Login" placeholder="Логин"><br>
				</div>
				<div class="Reg">
					<p class="oneP1">Пароль</p>
					<p class="twoPE">Email</p>
					<p class ="threePI">Индекс</p>
				</div>
				<div class="Reg">
					<input type="text" name="Password" class="form-control" id="Password" placeholder="Пароль"><br>
					<input type="text" name="Email" class="form-control" id="Email" placeholder="Email"><br>
					<input type="text" name="MailIndex" class="form-control" id="MailIndex" placeholder="Индекс"><br>
				</div>
				<div class="Reg">
					<a href="Base.php">База данных</a>
					<button type="submit" class="btn btn-success" name="submit">Зарегестрировать клиента</button><br>
				</div>
			</form>
		</div>
	</main>
</body>
</html>