$(function(){

	$("#bouton-menu").click(function(){
		$("#zone_menu").slideToggle();
	});
});

$(document).ready(function() {
   
   	$(). UItoTop({ easingType: 'easeOutQuart' });
   
});





function printMe() {
	var opts = 'scrollbars=yes,resizable=yes,menubar=no,status=yes';
	var w = 650;
	var h = 400;
	var pw = window.open('print.php','pwin','width='+w+',height='+h+',top=5,left=5,'+opts);
}
function loadPrint(url) {
	document.body.innerHTML = opener.document.getElementById("printContent").innerHTML;
	document.body.innerHTML += "<div id=\"printInfos\">Page imprimée de l'Intranet Onippam : "+url+"</div>";
	window.print();
}
function sendMe() {
	var opts = 'scrollbars=no,resizable=no,menubar=no,status=no';
	var w = 420;
	var h = 300;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open('send.php','swin','width='+w+',height='+h+',top='+t+',left='+l+','+opts);
}