<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet"  href="BaseStyle.css">
	<title>Document</title>
</head>
<body>
	<header>
		<div class="Flex">
			<div class="logo">
				<p><img src="image/Лого.png" width="34px" height="54px">Вето-<spam class="b">банк</spam></p>
			</div>
			<div class="Sag">
				<h1>База данных</h1>
			</div>
			</div>
			<hr>
	</header>
	<main>
	<form  method="post" action="php/Searh.php?go"  id="searchform" class="search"> 
      <input  type="text" name="name" placeholder="Напишите кого найти" class="sae" id="search-text" onkeyup="tableSearch()"> 
    </form> 
    
		<table id="info-table">

			<tbody>

				<tr>

				<td>ID<td>

				<td>Фамилия</td>

				<td>Имя</td>

				<td>Отчество</td>

				<td>Адрес</td>

				<td>Дата рождения</td>

				<td>Номер телефона</td>

				<td>Номер карты</td>

				<td>Пин-код</td>

				<td>Логин</td>

				<td>Пароль</td>

				<td>Email</td>

				<td>Индекс</td>

				</tr>

				</tbody>
					<?php

$mysql = new mysqli('localhost', 'root', 'root', 'registration');

$result=mysqli_query($mysql, "SELECT * FROM `users`");

while ($row=mysqli_fetch_array($result))

{ 

echo "<tr>\n<td>".$row["id"]."</td>"."\n"."<td>"."".$row["fdf"]."

</td>"."\n"."<td>"."".$row["SeconcName"]."</td>"."\n"."<td>"."".$row["Name"]."</td>"."\n"."<td>"."".$row["ThirdName"]."</td>"."\n"."<td>"."".$row

["Adress"]."</td>"."\n"."<td>"."".$row["Date"]."</td>"."\n"."<td>"."".$row["Telephone"]."</td>"."\n"."<td>"."".$row["Kard"]."</td>"."\n"."<td>"."".$row["Kod"]."</td>"."\n"."<td>"."".$row["Login"]."</td>"."\n"."<td>

"."".$row["Password"]."</td>"."\n"."<td>"."".$row["Email"]."</td>".

"\n"."<td>"."".$row["MailIndex"]."</td>"."\n"."</tr>"."\n";

}

$mysql -> close();
					?>
<script>
function tableSearch() {
    var phrase = document.getElementById('search-text');
    var table = document.getElementById('info-table');
    var regPhrase = new RegExp(phrase.value, 'i');
    var flag = false;
    for (var i = 1; i < table.rows.length; i++) {
        flag = false;
        for (var j = table.rows[i].cells.length - 1; j >= 0; j--) {
            flag = regPhrase.test(table.rows[i].cells[j].innerHTML);
            if (flag) break;
        }
        if (flag) {
            table.rows[i].style.display = "";
        } else {
            table.rows[i].style.display = "none";
        }

    }
}
</script>

					
				</table>
	</main>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</body>
</html>