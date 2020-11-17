
$(function(){
	$('.menu-m').click (function(){
	$('#menu .menu-lateral').slideToggle();	
	$(this).toggleClass('active');
		return false;
	});
	
	$('.menu-grade').click (function(){
	$('#grade .menu-topo').slideToggle();	
	
	$(this).toggleClass('active');
		return false;
		});
	
	$('.senha').click (function(){
	$('.mostrasenha').slideToggle();	
	
	$(this).toggleClass('active');
		return false;
		});

});