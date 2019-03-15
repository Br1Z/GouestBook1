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
	<div class=" bg-light  ">
		<form  id="formAdvancedSearch" method="POST">
			<div class="container">
				<label><h6>Расширенный поиск</h6></label><br>
				<div class="row">
					<div class="labelSearch col-md-2">
						<label class="form-control">По имени</label>
						<label class="form-control">По еmail</label>
						<label class="form-control">По cообщению</label>
						<label class="form-control">По тегу</label>
						<label class="form-control">По дате</label>
					</div>
					<div class="inputSearch col-md-4">
						<input class="form-control" type="text" name="">
						<input class="form-control" type="text" name="">
						<input class="form-control" type="text" name="">
						<input class="form-control" type="text" name="">
						<input class="form-control" type="date" name="">
					</div>
				</div>
				<input class="btn btn-outline-success btnSubmit" type="submit" name="advancedSearch">
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