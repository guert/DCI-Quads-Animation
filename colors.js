$(document).ready(function(){
		$('#blue').click(function(){
			$('body').css("background-color","#336699");
			$('body').css("background-image","url('http://www.guert.com/img/spacer.gif')");
		});
		$('#green').click(function(){
			$('body').css("background-color","#24802c");
			$('body').css("background-image","url('http://www.guert.com/img/gumby.png')");
			$('body').css("background-repeat","no-repeat");
		});
		$('#red').click(function(){
			$('body').css("background-color","#8e1b20");
			$('body').css("background-image","url('http://www.guert.com/img/spacer.gif')");
		});
		$('#black').click(function(){
			$('body').css("background-color","#000000");
			$('body').css("background-image","url('http://www.guert.com/img/spacer.gif')");
		});
	});