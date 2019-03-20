<?php
require "include/lib/db.php";
require "faker/vendor/autoload.php";
$faker = Faker\Factory::create('ru_RU');

	for ($i=0; $i <=50 ; $i++) { 
	$tags = array( "Жалобы","Предложения","Помощь","Благодарность" );
	$rand_keys = array_rand($tags,1);
	$tag = $tags[$rand_keys]; 
	$data = [
		"username" => $faker->firstNameMale,
		"email" => $faker->email,
		"link" => $faker->url,
		"message"=> $faker->text,
		"tags" => $tag,
		"date" => $faker->date .' '.  $faker->time ,

	];

	 $review = R::dispense('reviews');
	 $review->name = $data['username'];
	 $review->email = $data['email'];
	 $review->link = $data['link'];
	 $review->message = $data['message'];
	 $review->tags = $data['tags'];
	 $review->createdAt = $data['date'];
	 R::store($review);		

	}

