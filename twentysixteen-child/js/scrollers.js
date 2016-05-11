jQuery(document).ready(function(){


	if(jQuery(window).scrollTop() >= 801){

		jQuery(".main-about-container p").fadeTo("slow",1.0);
	}

	var flag = true;

	if(flag){
		jQuery(window).scroll(function(){
	

			if (window.matchMedia('(min-width:910px)').matches) {
		
    			console.log(jQuery(window).scrollTop() );
		
				if(jQuery(window).scrollTop()>=500){
		
					jQuery(".main-about-container p:first").fadeTo("slow",1.0);

				}

				if(jQuery(window).scrollTop()>=800){
		
					jQuery(".main-about-container p:nth-child(2)").fadeTo("slow",1.0);
					//flag=false;
				}

				//IMAC and yellow slide in
				if(jQuery(window).scrollTop()==1900){
					jQuery(".Imac-and-yellow p").hide("fast").show("slow");
				}

			}//End screen size check

		});

	}//end flag check

});//end doc ready