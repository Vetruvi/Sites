<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Regisration</title>
	<link rel="stylesheet" href="RegistrationR.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>
	<main>
		<div class="Logo">
			<h1><a class="logoo" href="#"><img src="image/Лого.png" width="33px" height="54px"><span class="Bitmin">Вето-<spam class="ban">Банк</spam></span></a></h1>
			<h2 class="Reg">Войти в онлайн банк</h2>
		</div>

		<div class="Create">
			
				<form action="php/Login.php" method="POST">
					
					<input type="text" name="Login" class="form-control" id="Login" placeholder="Логин"><br>
					<input type="text" name="Password" class="form-control" id="Password" placeholder="Пароль"><br>
					<input type="text" name="Kard" class="form-card" id="Kard" placeholder="Номер карты"><br>
					<input type="text" name="Pin" class="form-card" id="Pin" placeholder="Пароль"><br>
					<div class="Registr">
						<a href="#" class="Sign" onclick="hide()" name="Sign" id="Sign">Войти через номер карты</a>
						<a href="#" class="Sign2" onclick="hide2()" name="Sign2" id="Sign2">Войти через логин</a>
					</div>
					<button type="submit" class="btn btn-success" name="submit">Войти</button><br>
					<hr class="line">
				</form>
			<div class="Klient">
				<a href="#">Стать клиентом</a>
			</div>
		</div>
		<div class="NumberT">
			<div class="N1">
				<p><u>8 (800) 700-00-00</u></p>
				<p><u>+7 (495) 45-444-57</u></p>
			</div>
			<div class="N2">
				<p>Для звонков по России</p>
				<p class="N22">Для звонков по Уфе</p>
			</div>
		</div>
		<div class="Foot">
			<p>© 2001—2021 Вето-Банк. Генеральная лицензия ЦБ РФ №1426.</p>
		</div>
			<!--<div class="soc">
				<a href="#">VK</a>
			</div>-->
			
	</main>
	<script>
		function hide() {
			if (document.getElementById("Login").style.display = "inline-block") {
  				document.getElementById("Login").style.display = "none";
  				document.getElementById("Password").style.display = "none";
  				document.getElementById("Kard").style.display = "inline-block";
  				document.getElementById("Pin").style.display = "inline-block";
  				document.getElementById("Sign").style.display = "none";
  				document.getElementById("Sign2").style.display = "inline-block";  		
} 		
}
		function hide2() {
			if (document.getElementById("Login").style.display = "none") {
  				document.getElementById("Login").style.display = "inline-block";
  				document.getElementById("Password").style.display = "inline-block";
  				document.getElementById("Kard").style.display = "none";
  				document.getElementById("Pin").style.display = "none";
  				document.getElementById("Sign2").style.display = "none"; 
  				document.getElementById("Sign").style.display = "inline-block"; 		
} 		
}
	</script>
</body>
</html>