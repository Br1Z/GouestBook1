<?php
require "include/lib/db.php";
	
	$searchs = explode(" ", $_POST['search']);

	foreach ($searchs as $search) {
		$sql[] = "`name` LIKE '%$search%'";
		$sql[] = "`message` LIKE '%$search%'";
		$sql[] = "`email` LIKE '%$search%'";
		$sql[] = "`tags` LIKE '%$search%'";
		//$sql[] = "`created_at` LIKE '%$search%'";
	}

	$results = R::getAll("SELECT * FROM reviews WHERE" . implode("OR", $sql)); 

	//`name` LIKE '%$search%' OR `message` LIKE '%$search%' OR `tags` LIKE '%$search%' OR `created_at` LIKE '%$search%'  ORDER BY `created_at` DESC

	if($results == null){
		echo 'Ничего не найдено';
	}else{
		?>
		<table style="width: 1000px;" class="container" align="" border="1">
					<tr align="center">
					<th width="100">Имя</th> 
					<th width="100">Email</th> 
					<th width="350">Сообщение</th> 
					<th width="120">Ссылка</th>
					<th width="150">Тег</th>  
					<th width="">Опубликованно</th> 
			</tr>
		<?php
			foreach ($results as $result) {
					echo "<tr>".
					"<th>". $result['name'] . "</th>". //вывод имени
					"<th>". $result['email'] . "</th>". // вывод емайла
					"<th>". $result['message'] . "</th>";// вывод сообщения
					if (($result['homepage']) == '') {//  вывод ссылки
						echo "<th>"."Ссылки нету"."</th>";					
					}else{
						echo "<th>".$result['homepage']."</th>";
					}
					echo "<th>".$result['tags']."</th>";// вывод тегов
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