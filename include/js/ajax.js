function show(){
	
	 $.ajax({
        url: "../Take.php", 
        cache: false,
        success: function(html){
            $("#reviews").html(html);
        }
    });
}
function Add(){
	 $.ajax({
        url: "../Ficsture.php", 
        cache: false,
        success: function(html){
            alert('Записи добавленны');
        }
    });
}

$(document).ready(function() {
	show();
	 $("#refresh").click(function(){
	 	$("#capch").attr("src","include/captcha/captcha.php?" +Math.random()) + new Date().getTime();
	 });
	 $("#addReview").click(function(){
	 	Add();
	 });

	$("#formSend").submit(function(e){ // Отправляет POST данные в файл Send.php и там обробатывает
		e.preventDefault();
		$.ajax({
			url: "../Send.php", 
			type: "POST",
			data: $("#formSend").serialize(), // Переводит данные в строку
			dataType: "html",
			success: function(response){
				var take_reviews = setInterval('show()',1000);
				setTimeout(function() {
				  clearInterval(take_reviews);
				}, 1000)
				$("#formSend")[0].reset(); 
				$("#text").val("");
				$("#capch").attr("src","include/captcha/captcha.php?" +Math.random()) + new Date().getTime();
				$("#content").html(response); // Если произведенна ошибка выводит данные в div с id content
			
			}
		});
	});
});


