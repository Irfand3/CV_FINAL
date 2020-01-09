$(document).ready(function(){

$('#angular').hover(function(){
	$(this).css("color", "#dd0031");
	$('.angular').slideDown(1000);
});

$('#html').hover(function(){
	$(this).css("color", "#F36519");
	$('.html').slideDown(1000);
});

$('#css').hover(function(){
	$(this).css("color", "#2299F8");
	$('.css').slideDown(1000);
},function(){
	$('.css').css("display", "none");
});

$('#js').hover(function(){
	$(this).css("color", "#f0db4f");
	$('.js').slideDown(1000);
});

$('#node').hover(function(){
	$(this).css("color", "#71a961");
	$('.node').slideDown(1000);
});

$('#database').hover(function(){
	$(this).css("color", "#5AC2D3");
	$('.database').slideDown(1000);
});

$('#java').hover(function(){
	$(this).css("color", "#E76D00");
	$('.java').slideDown(1000);
});

$('#php').hover(function(){
	$(this).css("color", "#777AB3");
	$('.php').slideDown(1000);
});

$('#cpp').hover(function(){
	$(this).css("color", "#067CC8");
	$('.cpp').slideDown(1000);
});

$('#link1').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link2').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link3').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link4').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link5').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link6').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link7').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});

$('#link8').hover(function(){
	$(this).css("color", "#E8BBA2");
}, function(){
	$(this).css("color", "");
});





var $img = $('#img');
imgw = $img.width();
imgh = $img.height();

$('#img').hover(function () {
	$(this).width(imgw * 1.5);
	$(this).height(imgh * 1.5);
}, function(){
	$(this).width(imgw);
	$(this).height(imgh);
})

});