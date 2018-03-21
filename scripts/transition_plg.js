(function($) {
	/*General Settings*/
        var settings = {
                effect: "fadein",
		duration: 2000
        }; 
        
        $.fn.transit = function(options) {
                $(this).hide();
                /*Fetching user defined values*/
                if(!jQuery.isEmptyObject(options)){
                        if(options.effect){
                                var effect   = options.effect;
                        }
                        if(options.duration){
                                var duration = options.duration; 
                        }
                }                
                /*Fetching config values*/
                
                
                /*Checking with config values*/
                if(!effect){
                	var effect = settings.effect;	
                }
                if(!duration){
                	var duration = settings.duration;	
                }
                /*Checking with config values*/
                
                
                /*Applying corresponding effects*/
                if(effect == 'fadein') {
			$(this).fadeIn(duration);
		}
                /*Applying corresponding effects*/
                
		/*else if(settings.effect == 'animate'){
			$(this).fadeIn(duration);
		}*/
        };
        
}( jQuery ));