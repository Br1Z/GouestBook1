<?php
require "include/lib/db.php";

	$reviews = R::getAll('SELECT * FROM reviews ORDER BY `created_at` DESC'); 
			
			?>
			<table style="width: 1000px;" class="container" align="" border="1">
					<tr align="center">
					<th width="100">Имя</th> 
					<th width="80">Email</th> 
					<th width="350">Сообщение</th> 
					<th width="120">Ссылка</th>
					<th width="150">Тег</th>  
					<th >Опубликованно</th> 
			</tr>
			<?php
			foreach ($reviews as $review) {

					echo "<tr >".
					"<th style='padding: 5px;'>". $review['name'] . "</th>". //вывод имени
					"<th style='padding: 5px;'>". $review['email'] . "</th>". // вывод емайла
					"<th style='padding: 5px;'>". $review['message'] . "</th>";// вывод сообщения
					if (($review['link']) == '') {//  вывод ссылки
						echo "<th style='padding: 5px;'>"."Ссылки нету"."</th>";					
					}else{
						echo "<th style='padding: 5px;'>".$review['link']."</th>";
					}
					echo "<th style='padding: 5px;'>".$review['tags']."</th>";// вывод тегов
							// выввод времени
							$SelectDate = htmlspecialchars($review['created_at']);
							$SelectDate = date('d.m.Y H:i', strtotime($SelectDate));
							echo "<th>".$SelectDate."</th>";
					echo "</tr>";
			}
?>
			</table>

<?php

/*

<?php if(($review['link']) == ''): ?>
							<span>Сслыки нету</span>
						<?php else :?>
							<span><?php echo $review['link'];?> </span> <br>
						<?php endif; ?>


$date1 = strtotime($review['created_at']);
				$date2 = strtotime(date('Y-m-d H:i:s'));
				$interval = abs($date2 - $date1);
				$minutes   = round($interval / 60);
				if($minutes > 59){
					$hour = round($minutes / 60);
					switch ($hour % 10) {
						case 1: echo $hour . ' час назад'; break;
						case 2:
						case 3:
						case 4: echo $hour . ' часа назад'; break;
						default:echo $hour . ' часов назад'; break;
					}
				}elseif ($minutes == 0) {
					echo 'Сейчас'; 
				}else{
					switch ($minutes % 10) {
						case 1: echo $minutes . ' минуту назад';break;
						case 2:
						case 3:
						case 4: echo $minutes . ' минуты назад';break;
						default:echo $minutes . ' минут назад'; break;
					}
				}




				// $SelectDate = htmlspecialchars($review['created_at']);
				// $SelectDate = date('d:m:Y H:i:s', strtotime($SelectDate));
*/

?>