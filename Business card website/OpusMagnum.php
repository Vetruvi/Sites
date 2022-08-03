<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" http-equiv="X-UA_Compatible">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/StyleMagnum.css" rel="stylesheet">
	<title>Document</title>
</head>
<body>
	<div class="container">
	<div class="row">
		<div class="col">
			<h1 class="text-right" style="font-size: 72px; font-family: 'Times New Roman'; margin-top: 100px;"><spam >Курсы по <br> математике</spam> <br> <hr class="text-right" style="height:1.5px; width: 209px; margin-top: 109px;"> </h1>
		</div>
	</div>
	<div class="row">
		<div class="col">
			<p class="text-right" style="font-family: 'Times New Roman'; font-size: 28px; font-style: italic; font-weight: lighter;">“Часто говорят, что цифры управляют <br> миром; по крайней мере нет сомнения в <br> том, что цифры показывают, как он <br> управляется” <br> <spam class='Got'> И. Гете</spam></p>
	</div>
	</div>
		<div class="row" style="margin-top: 103px; margin-bottom: 53px;">
		<div class="col border-0 bg-light" style="margin-right: 38px;">
			<p class="text-center" id="Repet"><spam id="DPidor">Занимаюсь</spam> <br> репетиторством с 40 лет<br>
			<spam class="text-center" id="Rinok"> Уже 25 лет на рынке</spam></p>
			<hr class="text-center" id="Line">
			<p class="text-center" id="Start">Начало занятий с 12:00</p>
		</div>
		<div class="col border-0 bg-light" style="margin-right: 38px;">
			<p class="text-center" id="Want">Хотите записатся или оставить заявку?</p>
			<button class="text-center" id="show">+792766633322</button>

			<div class="col-md-8 mx-auto" style="position: relative; right: 19%; bottom: 100%;">
			<dialog class="text-center" style="padding:0px 40px 0px 40px; width: 400px;">
				<div class="row">
					<div class="col">
							<p class="text-center" style="margin: 20px 0 20px 0; font-family: 'Times New Roman';">Напишите свой номер телефона</p>
						<div class="input-group" style="position: relative;">
							<form action="php/send.php" method="post">
							<input type="text" name="Number" class="form-control" id="Number" style="width: 275px; margin: 0 0 30px 20px;">
							<input type="submit" name="close" class="text-center" id="close" value="Оставить заявку" style="margin: 0 0 30px 35px; height: 60px;"></input>
							</form>
						</div>
					</div>
				</div>
			</dialog>

		</div>
		</div>
		<div class="col border-0 bg-light" style="margin-right: 38px;">
			<p class="text-center" id="Relax"> Выходные ПН и ВТ  <br> <spam class="text-center" id="Ban"> Занятия с 12:00 до 20:00 </spam> </p>
			<hr class="text-center" id="Line2">
			<p class="text-center" id="Begin">Подготовка для 9 и 11 классов</p>
		</div>
		</div>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script>
			var dialog = document.querySelector('dialog');
			document.querySelector('#show').onclick = function() {
  			dialog.show();	};
			document.querySelector('#close').onclick = function() {
				alert('заявка успешно оставлена вам перезвонят в течении дня');
  			dialog.close();	};
				var Repet = document.querySelector('#Repet');
				var Rinok = document.querySelector('#Rinok');
				var DPidor = document.querySelector('#DPidor');
				var Line = document.querySelector('#Line');
				var Start = document.querySelector('#Start');
				var show = document.querySelector('#show');
				var Relax = document.querySelector('#Relax');
				var Ban = document.querySelector('#Ban');
				var Line2 = document.querySelector('#Line2');
				var Begin = document.querySelector('#Begin');
				var show = document.querySelector('#show');
				var Want = document.querySelector('#Want');
			if (document.documentElement.clientWidth <= 1366 && document.documentElement.clientHeight <= 766) {
			Rinok.style.fontSize = '20px';
			Rinok.style.paddingRight = '77px';
			Repet.style.fontSize ='24px';
			Repet.style.paddingLeft='6px';
			DPidor.style.marginRight='135px';
			Line.style.marginLeft = '34px';
			Start.style.paddingRight='15px';
			show.style.marginLeft='40px';
			Relax.style.fontSize='26px';
			Relax.style.paddingRight='46px';
			Ban.style.paddingRight='11px';
			Ban.style.fontSize='20px';
			Begin.style.fontSize='20px';
			Begin.style.marginRight='4px';
			Line2.style.marginLeft='28px';
			show.style.fontSize='20px';
			show.style.marginLeft='50px';
			Want.style.fontSize='28px';
}
  	</script>
</body>
</html>
