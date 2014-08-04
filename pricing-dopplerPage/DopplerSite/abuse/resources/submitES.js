//Submit functionality

//Validate an email and returns true if it is valid or false if its not
function validateEmail(valor) {
if (/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/.test(valor)){
return (true)
} else {
return (false);
}}

//Shows the email error message container 
function showEmailErrorMessage(){
	$("#subscribeForm").hide();
	$("#emailErrorMessage").fadeIn(300, function(){																 
		setTimeout(function(){
			$("#emailErrorMessage").fadeOut(300, function(){
				$("#subscribeForm").fadeIn(300);
			});
		}, 2000);
	});
	$("#emailErrorMessage").css("display", "inline-block");
}

//Subscribe the email and returns the confirmation or error message
function subscribe()
{    						
	$.getJSON('subscribe.php?email='+escape($("#email").val())+'&callback=?',																
		function(result){
			if(result[0].status == "true")
			{
				$("#subscribeForm").hide();				
				$("#subscribeConfirmationContainer").fadeIn(300);
				setTimeout(function(){
					$("#email").val("Ingresa tu Email aquí"); 
					$("#subscribeSubmit").attr("disabled", "disabled");			
					$("#subscribeConfirmationContainer").fadeOut(300, function(){ $("#subscribeForm").fadeIn(300); });						
				}, 3000);					
			}
			else
			{	
				$("#subscribeForm").hide();							
				$("#subscribeErrorContainer").fadeIn(300);	
				setTimeout(function(){
					$("#subscribeErrorContainer").fadeOut(300, function(){ $("#subscribeForm").fadeIn(300); });						
				}, 3000);
			}		
		}
	);		
}