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
	<div align="center" class="container">
		<h1>Гостевая книга</h1>
	</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <form class=" form-inline  my-3 my-lg-0" id="fromSearch">
		     <!-- form-inline -->
			      	<div>
			      		<input class="form-control mr-sm-2" name="search" type="text" placeholder="Искать"><br>
			      	<!-- <a class="nav-link " href="#"> Рассширенный поиск</a> -->
				  		 <ul class="navbar-nav advancedSearchblock mr-auto">
					      <li class="nav-item">
					        <a class="nav-link advancedSearch" href="AdvancedSearch.php"> Рассширенный поиск</a>
					      </li>
					    </ul>
			      	</div>
					<div class="buttonsSearch">
						<input class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search" value="Поиск">
						<input class="btn btn-outline-danger my-2 my-sm-0" type="reset" name="clearSearch" id="clearSearch">   
					</div>
	    </form>
  </div>
	
</nav>
<!-- <a href="tester/ne_ebet.php">asdasd</a> -->
<div class="container block_reviews"><!-- Вывод сообщений -->
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
					<input class="form-control" type="text" name="username">
				</div>
				<div class="col-md-3">
					<label>Email</label>
					<input class="form-control" type="email" name="email">
				</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<label>Ссылка</label>
				<input class="form-control" type="text" name="homepage">
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
				<input class="btn btn-success submit" onclick="reload()" type="submit" name="Sendreview">
			</div>
		</div>
	</form>
	<!-- <a href="" class="refresher"><img  id="refresh" src="include/picter/refresh.png"></a> -->
	<button class="btn btn-link refresher" id="refresh">Обновить</button><!-- Добовление сообщения -->
</div>

</body>
</html>