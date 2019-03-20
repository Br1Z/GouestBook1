<?php
require "include/lib/db.php";
session_start();
	$data = $_POST;
	$errors = array();
		if($data['username'] == ''){
		 	$errors[]= 'Заполниете поле "Имя"';
		}
		if($data['email'] == ''){
		 	$errors[]= 'Заполниете поле "Email"';
		}
		if($data['message'] == ''){
		 	$errors[]= 'Заполниете поле "Сообщение"';
		}
		if($data['captcha'] != $_SESSION['random_code']){
		 	$errors[]= 'Проверочный код введен не верно';
		}
		if(empty($errors)){
			$review = R::dispense('reviews');
			$review->name = $data['username'];
			$review->email = $data['email'];
			$review->link = $data['link'];
			$review->message = $data['message'];
			$review->tags = $data['tags'];
			$review->createdAt = date('Y-m-d H:i:s');
			R::store($review);
		}
		else{
			
			foreach ($errors as $error) {
				echo $error. "<br>";	
			}
			
		}
						

