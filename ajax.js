$( document ).ready(function() {
    $("#btn").click(
		function(){
			sendAjaxForm('result_form', 'ajax_form', 'ajax1.php');
			return false; 
		}
	);
});
 
function sendAjaxForm(result_form, ajax_form, url) {
    jQuery.ajax({
        url:    "ajax1.php", 
        type:     "POST", 
        dataType: "html", 
        data: jQuery("#"+ajax_form).serialize(),  
        success: function(response) { 
              
        	result = jQuery.parseJSON(response);

        	document.getElementById(result_form).innerHTML = result;
             
    	},
    	error: function(response) { 
    		document.getElementById(result_form).innerHTML = "Ошибка. Данные не отправленны.";
    	}
     
 	});
}


