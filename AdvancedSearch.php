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
	<script src="include/js/advanced_search.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="index.php">Гостевая книга</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	  					<ul class="navbar-nav mr-auto">
					      <li class="nav-item">
					        <a class="nav-link advancedSearch" title="Поиск" href="AdvancedSearch.php"><img class="imgSearch" src="include/picter/search.png"> Поиск</a>
					      </li>
					    </ul>
  </div>
	
</nav>
	<div class=" bg-light  ">
		<form  id="formAdvancedSearch" method="POST">
			<div class="container">
				<label><h5>Поиск</h5></label><br>
				<div class="row">
					<div class="labelSearch col-md-2">
						<label class="form-control">По имени</label>
						<label class="form-control">По еmail</label>
						<label class="form-control">По cообщению</label>
						<label class="form-control">По Ссылки</label>
						<label class="form-control">По тегу</label>
						<label class="form-control">По дате</label>
					</div>
					<div class="inputSearch col-md-4">
						<input class="distanceInputSearch form-control" type="text" name="SearchName" id="SearchName" onkeyup="checkValInput()">
						<input class="distanceInputSearch form-control" type="text" name="SearchEmail" id="SearchEmail" onkeyup="checkValInput()">
						<input class="distanceInputSearch form-control" type="text" name="SearchMessage" id="SearchMessage" onkeyup="checkValInput()">
						<!-- <input class="form-control" type="text" name="SearchTag"> -->
						<input class="distanceInputSearch form-control" type="text" name="SearchLink" id="SearchLink" onkeyup="checkValInput()">

						<select class="distanceInputSearch form-control" name="SearchTag" id="SearchTag">
							<option selected hidden value="0">  </option>
							<option value="Жалобы"> Жалобы </option>
							<option value="Предложения"> Предложения </option>
							<option value="Помощь"> Помощь </option>
							<option value="Благодарность"> Благодарность </option>
						</select>

						<input class="distanceInputSearch form-control" type="date" name="SearchDate" id="SearchDate" onkeyup="checkValInput()">
					</div>
				</div>
				<input class="btn btn-outline-success btnAdvancedSearch"  type="submit" name="advancedSearch" id="advancedSearch">
				<input class="btn btn-outline-danger btnAdvancedSearch" type="reset" name="clearSearch" id="clearSearch">
			</div>
		</form>
	</div>
	
</div>
<!-- <a href="tester/ne_ebet.php">asdasd</a> -->
<div class="container block_reviews"><!-- Вывод сообщений -->
	<div class="container reviewsOnAdvancedSearch" id="reviews">
		
	</div>
</div>


</body>
</html>