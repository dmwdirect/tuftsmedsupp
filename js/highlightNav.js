      $(document).ready(function(){
 		  var str=location.href.toLowerCase();
        $('.nav li a').each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.highlight").removeClass("highlight");
                        $(this).parent().addClass("highlight"); 
                   }
              	 							}); 
		$('li.highlight').parents().each(function(){
												  
					if ($(this).is('li')){
						$(this).addClass("highlight"); 
						}							  
												  });
	   })
	   
	   $(document).ready(function(){
 		  var str=location.href.toLowerCase();
        $('#subnav li a').each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li.highlight").removeClass("highlight");
                        $(this).parent().addClass("highlight"); 
                   }
              	 							}); 
		$('li.highlight').parents().each(function(){
												  
					if ($(this).is('li')){
						$(this).addClass("highlight"); 
						}							  
												  });
	   })
	   
	   $(document).ready(function(){
 		  var str=location.href.toLowerCase();
        $('.nav li a').each(function() {
                if (str.indexOf(this.href.toLowerCase()) > -1) {
						$("li ul li.highlight").removeClass("highlight");
                        $(this).parent().addClass("highlight"); 
                   }
              	 							}); 
		$('li ul li.highlight').parents().each(function(){
												  
					if ($(this).is('li')){
						$(this).addClass("highlight"); 
						}							  
												  });
	   })