<?php
require "include/lib/db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Гостевая книга</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="include/css/style.css">
	  
	<script src="include/js/jquery-3.3.1.js"></script>
	<script src="include/js/ajax.js"></script>
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Гостевая книга</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  					<ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link advancedSearch" title="Поиск" href="AdvancedSearch.php"><img class="imgSearch" src="include/picter/search.png"> Поиск</a>
					      </li>
					    </ul>
					    <button class="btn btn-info" id="addReview">Добавить 50 записей</button>
  </div>
	
</nav>

<!-- Вывод сообщений -->
<!-- <div class="container block_reviews"> -->
	<div class="container reviews" id="reviews">
		
	</div>
</div>

<hr class="separator">
<div class="container alert-danger" id="content"></div> <!-- Вывод ошибок -->
<div class="container">

	<form id="formSend" action="" method="POST" >
		<div class="row">
				<div class="col-md-2">
					<label>Имя</label>
					<input class="form-control" type="text" name="username" >
				</div>
				<div class="col-md-3">
					<label>Email</label>
					<input class="form-control" type="email" name="email" id="email">
				</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Ссылка</label>
				<input class="form-control" type="url" name="link">
			</div>
			
		</div>
		
		<div class="row">
			<div class="col-md-5 ">
				<div class="form-group text">
					<label>Сообщение</label>
					<textarea id="text" class="form-control text" name="message"></textarea>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-4 ">
				<div class="form-group tags">
					<label>Тег</label>
					
					<select class="form-control" name="tags">
						<option> Жалобы </option>
						<option> Предложения </option>
						<option> Помощь </option>
						<option> Благодарность </option>
					</select>
					<!-- <input class="form-control" type="text" name="tags"> -->

					
				</div>
			</div>
			<div class="col-md-3">
						<label>Введите проверочный код</label>
						<input class="form-control" type="text" name="captcha">
			</div>
			<div class="col-md-1 block_captcha">
				<img id="capch" class="captcha" src="include/captcha/captcha.php">

			</div>

		</div>
		<div class="row">
			<div class="col-md-2">
				<input class="btn btn-success submit" type="submit" name="Sendreview" id="Sendreview">
			</div>
		</div>
	</form>
	<button class="btn btn-link refresher" id="refresh">Обновить</button><!-- Добовление сообщения -->
</div>

</body>
</html>