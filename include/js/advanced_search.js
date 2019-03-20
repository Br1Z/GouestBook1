function checkValInput(){
	var name = $('#SearchName').val();
	var email = $('#SearchEmail').val();
	var message = $('#SearchMessage').val();
	var link = $('#SearchLink').val();
	var date_at = $('#SearchDate').val();
		if ( name.length != 0 || email.length != 0 || message.length != 0 || link.length != 0 || date_at != 0) {
			$('#advancedSearch').attr('disabled', false);
		}
		else{
			$('#advancedSearch').attr('disabled', true);
		}
}
function checkValSelect(){
	$("#SearchTag").change(function(){
			var select = $("#SearchTag :selected").val();
		if (select != 0) {
			$('#advancedSearch').attr('disabled', false);
			
		}
		else{
			$('#advancedSearch').attr('disabled', true);
		}
		
		});
}
function checkValDate(){
	$('input[type="date"]').change(function(){
        //alert(this.value);         //Date in full format alert(new Date(this.value));
        var inputDate = new Date(this.value);
        if (inputDate != 0) {
			$('#advancedSearch').attr('disabled', false);
			
		}
		else{
			$('#advancedSearch').attr('disabled', true);
		}

    });
}
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
	checkValInput();
	checkValSelect();
	checkValDate();
$("#clearSearch").click(function(e){ // Если нажата кнопка отправить
			$.ajax({
	        url: "../Take.php", 
	        cache: false,
	        success: function(html){
	            $("#reviews").html(html);
	        }
		});
	});
	$("#formAdvancedSearch").submit(function(e){ // Если нажата кнопка отправить
		e.preventDefault();
		$.ajax({
			url: "../Search.php", 
			type: "POST",
			data: $("#formAdvancedSearch").serialize(), // Переводит данные в строку
			dataType: "html",
			success: function(response){
				
				$("#reviews").html(response); // Если произведенна ошибка выводит данные в div с id content
			// 
			}
		});
	});

});

