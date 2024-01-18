<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
		defer></script>
</head>

<body>
	<?php include('elements/nav.php'); ?>
	<main class="main">
		<div class="welcome dark-bg">
			<div class="container welcome-content ">
				<h1 class="welcome-h1">
					здравствуйте, <br> Карина
				</h1>
				<img src="img/people5.png" alt="">
			</div>
		</div>

		<div class="orders lite-bg">
			<div class="container content orders-content">
				<h2 class="dark-h2">
					ваши заказы
				</h2>
				<table>
					<tr>
						<th>сервис</th>
						<th>продукт</th>
						<th>статус</th>
						<th>дата начала</th>
						<th>дата окончания</th>
						<th>№ договора</th>
					</tr>
					<th>Для розничной торговли</th>
					<th>1С-Товары</th>
					<th>В работе</th>
					<th>01-01-2023</th>
					<th>01-01-2024</th>
					<th>123</th>
				</table>
			</div>
		</div>

		<div class="createOrders dark-bg">
			<div class="container content createOrders-content">
				<h2 class="lite-h2">
					Сделать заказ
				</h2>
				<div class="forma-container">
					<form action="">
						<label style="color: rgba(255, 255, 255, 0.5)">выберете сервис</label>
						<select name="services" size="1" style="margin-top: 10px">
							<option value="">Для бухгалтера и кадровика</option>
							<option value="">Для бизнеса</option>
							<option value="">Для электронного документооборота</option>
							<option value="">Для розничной торговли</option>
						</select>
						<label style="color: rgba(255, 255, 255, 0.5)">выберете продукт</label>
						<select name="services" size="1" style="margin-top: 10px">
							<option value="">1С-Отчетность</option>
							<option value="">1C:Кабинет сотрудника</option>
							<option value="">1С:Контрагент</option>
							<option value="">1С:Сверка</option>
						</select>
						<input type="email" name="" id="" placeholder="ВАШ EMAIL">
						<button type="submit">ОТПРАВИТЬ</button>
					</form>
				</div>
			</div>
		</div>

		<div class="feedback lite-bg">
			<div class="container content feedback-content">
				<h2 class="h2-dark">
					оставить отзыв
				</h2>
				<div class="forma-container">
					<form action="">
						<textarea name="" id="" cols="30" rows="10"
							placeholder="Напишите здесь свой отзыв о нашей работе"></textarea>
						<button type="submit">ОТПРАВИТЬ</button>
					</form>
				</div>
			</div>
		</div>
	</main>



	<?php include('elements/footer.php'); ?>

</body>

</html>