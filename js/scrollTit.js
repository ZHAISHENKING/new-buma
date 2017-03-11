function scrollAuto(){
						var i=-1;
					
					 // auto play 
				    function autoScroll(){ 
				       setInterval(function(){ 
				            i++; 
				           console.log(i);
				            moveTit(i); 
				        }, 5000); 
				  
				    } 
				    function moveTit(num){
				    	 if(i==4){
									i=1;
									$('.simple-banner').css({top:0});
								}
				    	$('.simple-banner').stop().animate({top:i*-40+"px"},400);
				    }
				    autoScroll();
					
}
