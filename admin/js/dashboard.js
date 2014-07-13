$(document).ready(function(){
	$('img.setting').click(function(){
		if($('ul.dropdownmenu').is(':visible')){
			$('ul.dropdownmenu').hide();
		}else{
			$('ul.dropdownmenu').show();
		}
	});
	$('ul.dropdownmenu').mouseleave(function(){
  				setTimeout("$('ul.dropdownmenu').hide()",5000);
	});
});

function resize(){
	var iframe = document.getElementById("frame");
    try{
     var bHeight = iframe.scrollHeight;
    var dHeight = iframe.scrollHeight;
    var height = Math.max(bHeight, dHeight);
    alert(height);
    iframe.height =  height*3;
    }catch (ex){alert(ex);}
}