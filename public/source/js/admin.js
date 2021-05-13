$(function(){

	$('#slide-submenu').on('click',function() {			        
        $(this).closest('.list-group').fadeOut('slide',function(){
        	$('.list-group').fadeIn();	
        });
        
      });

	$('.bars-btn').on('click',function(){		
        $(this).next('.list-group').toggle('slide');
        $('.list-group').hide();
	})
})