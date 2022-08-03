<?php
	session_start();
	$mysql = new mysqli('localhost', 'root', 'root', 'registration');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="SK.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<style>
@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
</style>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="Log">
			<div class="logo">
				<a href="Kabinet.php"><img src="image/Лого.png" width="34px" height="54px"><spam class="s">Вето-</spam><spam class="b">банк</spam></a>
			</div>
			<div class="Numbers">
				<div class="num1">
					<p class="n1">Звонки по России</p>
					<p class="n2">8 800 342 23 45</p>
					<p class="n1">Звонки для других стран</p>
					<p class="n2">8 496 432 42 54</p>
				</div>
			</div>
			<div class="Region">
				<p class="r1">Регион: Уфа</p>
			</div>
			<div class="Help">
				<img src="image/Quest.png" width="16px" height="16px" class="i">
				<a href="#">Помощь</a>
			</div>
			<div class="List">				
					<nav>
						<a href="#">Услуги</a>
						<a href="#">Счета</a>
						<a href="#">Кредиты</a>
						<a href="#">Депозиты</a>
						<a href="#">Инвестиции</a>
						<a href="#">Переводы</a>
						<a href="#">Валютные операции</a>
						<a href="#">Оплата счетов</a>
					</nav>
			</div>
			<a href="Kabinet.php" class="Exs" <? session_destroy(); ?>>Выйти</a>
		</div>
		<div class="Log2">
			<div class="Hello">
				<p>Здравствуйте <? print $_SESSION['SeconcName']; print " "; print $_SESSION['Name']; ?></p>
			</div>
			
			<!--<iframe src="https://yoomoney.ru/quickpay/shop-widget?writer=seller&targets=%D0%98%D0%BD%D0%B2%D0%B5%D1%81%D1%82%D0%B8%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B9%20%D1%81%D1%87%D0%B5%D1%82&targets-hint=&default-sum=1000&button-text=11&payment-type-choice=on&hint=&successURL=&quickpay=shop&account=4100116558203908&label=1" width="423" height="222" frameborder="0" allowtransparency="true" scrolling="no"></iframe>
		</div>-->
	</header>
	<main>
			<div class="Osnov">
				<h1>Основная информация</h1>
			</div>
			<div class="Personal">
				<p>Ваши персональные данные</p>
			</div>
			<div class="Info">
				<div class="Personal2">
					<p>Фамилия, Имя, Отчество</p>
				</div>	
				<div class="NumbPhone">
					<p>Номер телефона</p>
				</div>
			</div>
			<div class="Info">
				<div class="PackName">
						<p><? print $_SESSION['SeconcName']; print " "; print $_SESSION['Name']; print " "; print $_SESSION['ThirdName']; ?></p>
				</div>
				<div class="PackNumb">
						<p><? print $_SESSION['Telephone']; ?></p>
				</div>
			</div>
			<div class="Info">
				<div class="Adress">
					<p>Адрес регистрации</p>
				</div>
				<div class="Email">
					<p>Электронная почта</p>
				</div>
			</div>
			<div class="Info">
				<div class="PackAdress">
						<p><? print $_SESSION['Adress'];?> <br> <?print $_SESSION['MailIndex']; ?></p>
				</div>
				<div class="PackEmail">
						<p><? print $_SESSION['Email']; ?></p>
				</div>
			</div>
			
	</main>

	<!--<?php
$secret = '000000000000000000000'; 
$r = array(
	'notification_type' => $_POST['notification_type'], 
	'operation_id'      => $_POST['operation_id'],     
	'amount'            => $_POST['amount'],           
	'withdraw_amount'   => $_POST['withdraw_amount'],   
	'currency'          => $_POST['intval'],            
	'datetime'          => $_POST['datetime'],          
	'sender'            => $_POST['sender'],            
	'codepro'           => $_POST['codepro'],           
	'label'             => $_POST['label'],            
	'sha1_hash'         => $_POST['sha1_hash']         
);


if (sha1($r['notification_type'].'&'.
         $r['operation_id'].'&'.
         $r['amount'].'&'.
         $r['currency'].'&'.
         $r['datetime'].'&'.
         $r['sender'].'&'.
         $r['codepro'].'&'.
         $secret.'&'.
         $r['label']) != $r['sha1_hash']) {
	exit(); 
}


$r['amount']          = floatval($r['amount']);
$r['withdraw_amount'] = floatval($r['withdraw_amount']);
$r['label']           = intval($r['label']); 
?>!-->
</body>
</html>