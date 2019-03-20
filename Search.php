<?php
require "include/lib/db.php";
	
	
	if (!empty($_POST['SearchName'])) {
		$searchs1 = explode(" ", $_POST['SearchName']);
			foreach ($searchs1 as $search) {
		 		$find[] = "`name` LIKE '%$search%'";
		 	}
	}
	if (!empty($_POST['SearchEmail'])) {
		$searchEmail = $_POST['SearchEmail'];
		$find[] =  "`email` LIKE '%$searchEmail%'"; 
	}
	if (!empty($_POST['SearchMessage'])) {
		$searchs2 = explode(" ", $_POST['SearchMessage']);
			foreach ($searchs2 as $search) {
		 		$find[] = "`message` LIKE '%$search%'";
		 	}
	}
	if (!empty($_POST['SearchLink'])) {
		$searchLink = $_POST['SearchLink'];;
		$find[] = "`link` LIKE '%$searchLink%'";
	}	
	if (!empty($_POST['SearchTag'])) {
		$searchTag = $_POST['SearchTag'];
		$find[] = "`tags` LIKE '%$searchTag%'";
	}
	if (!empty($_POST['SearchDate'])) {
		$searchDate = $_POST['SearchDate'];
		$find[] = "`created_at` LIKE '%$searchDate%'";
	}

	$results = R::getAll("SELECT * FROM reviews WHERE" . implode("AND", $find) . "ORDER BY `created_at` DESC"); 
	//`name` LIKE '%$search%' OR `message` LIKE '%$search%' OR `tags` LIKE '%$search%' OR `created_at` LIKE '%$search%'  ORDER BY `created_at` DESC
		if($results == null){
			echo '<div align="center">Ничего не найдено</div>';
		}else{
		?>
		<table style="width: 1000px;" class="container" align="" border="1">
					<tr align="center">
					<th width="100">Имя</th> 
					<th width="100">Email</th> 
					<th width="350">Сообщение</th> 
					<th width="120">Ссылка</th>
					<th width="150">Тег</th>  
					<th >Опубликованно</th> 
			</tr>
		<?php
			foreach ($results as $result) {
					echo "<tr >".
					"<th style='padding: 5px;'>". $result['name'] . "</th>". //вывод имени
					"<th style='padding: 5px;'>". $result['email'] . "</th>". // вывод емайла
					"<th style='padding: 5px;'>". $result['message'] . "</th>";// вывод сообщения
					if (($result['link']) == '') {//  вывод ссылки
						echo "<th style='padding: 5px;'>"."Ссылки нету"."</th>";					
					}else{
						echo "<th style='padding: 5px;'>".$result['link']."</th>";
					}
					echo "<th style='padding: 5px;'>".$result['tags']."</th>";// вывод тегов
							// выввод времени
							$SelectDate = htmlspecialchars($result['created_at']);
							$SelectDate = date('d.m.Y H:i', strtotime($SelectDate));
							echo "<th>".$SelectDate."</th>";
					echo "</tr>";
			}
		?>
		</table><?php
	}
?>
