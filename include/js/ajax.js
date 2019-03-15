function show(){
	
	 $.ajax({
        url: "../Take.php", 
        cache: false,
        success: function(html){
            $("#reviews").html(html);
        }
    });
}
$(document).ready(function() {
	show();
	//setInterval('show()',1000);
	$("#refresh").click(function(){
		$("#capch").attr("src","include/captcha/captcha.php?" +Math.random()) + new Date().getTime();
	});
$("#clearSearch").click(function(e){ // Если нажата кнопка отправить
			$.ajax({
	        url: "../Take.php", 
	        cache: false,
	        success: function(html){
	            $("#reviews").html(html);
	        }
		});
	});
//НИЖЕ ОПИСАН СКРИПТ РАССШИРЕННОГО ПОИСКА
	$("#fromSearch").submit(function(e){ // Если нажата кнопка отправить
		e.preventDefault();
		$.ajax({
			url: "../Search.php", 
			type: "POST",
			data: $("#fromSearch").serialize(), // Переводит данные в строку
			dataType: "html",
			success: function(response){
				
				$("#reviews").html(response); // Если произведенна ошибка выводит данные в div с id content
			// 
			}
		});
	});
// НИЖЕ ОПИСАН СКРИПТ ОТВЕЧАЕТ ЗА ПОИСК
	$("#fromSearch").submit(function(e){ // Если нажата кнопка отправить
		e.preventDefault();
		$.ajax({
			url: "../Search.php", 
			type: "POST",
			data: $("#fromSearch").serialize(), // Переводит данные в строку
			dataType: "html",
			success: function(response){
				
				$("#reviews").html(response); // Если произведенна ошибка выводит данные в div с id content
			// 
			}
		});
	});

	

//НИЖЕ ОПИСАН СКРИПТ ОТВЕЧАЕТ ЗА ДОБАВЛЕНИЕ
	$("#formSend").submit(function(e){ // Если нажата кнопка отправить
		e.preventDefault();
		$.ajax({
			url: "../Send.php", 
			type: "POST",
			data: $("#formSend").serialize(), // Переводит данные в строку
			dataType: "html",
			success: function(response){
				//alert("Сообщение оставленно успешно");
				$("#formSend")[0].reset(); // Очищает форму
				$("#text").val(""); // Очищает <textarea>
				$("#capch").attr("src","include/captcha/captcha.php?" +Math.random()) + new Date().getTime();
				$("#content").html(response); // Если произведенна ошибка выводит данные в div с id content
			// 
			}
		});
	});




});

/*
ТРАЙЛЫ
 Рабочая тема
 $("#capch").attr("src","include/captcha/captcha.php?" +Math.random()) + new Date().getTime();
 ===============================================================================================

$("#capch").src = 'include/captcha/captcha.php?_=' + new Date().getTime();

*/