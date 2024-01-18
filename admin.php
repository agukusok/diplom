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

		<div class="allOrders lite-bg">
			<div class="container content allOrders-content">
				<h2 class="dark-h2">
					все заказы
				</h2>
				<table>
					<tr>
						<th>ID клиента</th>
						<th>сервис</th>
						<th>продукт</th>
						<th>статус</th>
						<th>дата начала</th>
						<th>дата окончания</th>
						<th>№ договора</th>
					</tr>
					<tr>
						<th>1</th>
						<th>Для бухгалтера и кадровика</th>
						<th>1С:Сверка</th>
						<th>В работе</th>
						<th>01-01-2024</th>
						<th>01-01-2025</th>
						<th>121</th>
					</tr>
					<tr>
						<th>2</th>
						<th>Для электронного документооборота</th>
						<th>1С-ЭДО</th>
						<th>Завершён</th>
						<th>01-01-2022</th>
						<th>01-01-2023</th>
						<th>122</th>
					</tr>
					<tr>
						<th>3</th>
						<th>Для розничной торговли</th>
						<th>1С-Товары</th>
						<th>В работе</th>
						<th>01-01-2023</th>
						<th>01-01-2024</th>
						<th>123</th>
					</tr>
				</table>
			</div>
		</div>

		<div class="users dark-bg">
			<div class="container content users-content">
				<h2 class="lite-h2">
					пользователи
				</h2>
				<table>
					<tr>
						<th>ID клиента</th>
						<th>Фамилия</th>
						<th>имя</th>
						<th>отчество</th>
						<th>номер телефона</th>
						<th>email</th>
					</tr>
					<tr>
						<th>1</th>
						<th>иванов</th>
						<th>петр</th>
						<th>сергеевич</th>
						<th>89232959226</th>
						<th>ivanov@mail.ru</th>
					</tr>
					<tr>
						<th>2</th>
						<th>сидоров</th>
						<th>давид</th>
						<th>дмитриевич</th>
						<th>89532659244</th>
						<th>sidorov@mail.ru</th>
					</tr>
					<tr>
						<th>3</th>
						<th>петров</th>
						<th>дмитрий</th>
						<th>игоревич</th>
						<th>89537659144</th>
						<th>petrov@mail.r</th>
					</tr>
				</table>
			</div>
		</div>

		</div>
	</main>



	<?php include('elements/footerAdmin.php'); ?>

</body>

</html>