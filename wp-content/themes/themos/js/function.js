
function resize_hauteur(tab,height){
		var height = (typeof height !== 'undefined') ? height : false;
		if (tab instanceof Array){
			max_height = '';
			
			for (var i=0; i<tab.length; i++){
				if(i==0){
					max_height = tab[i];
				}else{
					if($(tab[i])[0].getBoundingClientRect().height < $(max_height)[0].getBoundingClientRect().height){
						$(tab[i]).css("min-height",$(max_height)[0].getBoundingClientRect().height);
						if(height){
							$(tab[i]).css("height",$(max_height)[0].getBoundingClientRect().height);
						}
					}
					else if($(tab[i])[0].getBoundingClientRect().height > $(max_height)[0].getBoundingClientRect().height){
						max_height = tab[i];				
					}
				}
			}
			
		
			for (var i=0; i<tab.length; i++){
				$(tab[i]).css("min-height",$(max_height)[0].getBoundingClientRect().height);
			}
			
		}else{
			
				max_height = 0;
				
				$(tab).each(function(){
					if($(this)[0].getBoundingClientRect().height > max_height){
						max_height = $(this)[0].getBoundingClientRect().height;				
					}
				})
				
				$(tab).each(function(){
					$(this).css("min-height",max_height);
					if(height){
						$(this).css("height",max_height);
					}
				})
		}
}


function printMe() {
	var opts = 'scrollbars=yes,resizable=yes,menubar=no,status=yes';
	var w = (screen.width - 20)*0.75;
	var h = (screen.height - 100);
	var pw = window.open('print.html','pwin','width='+w+',height='+h+',top=5,left=5,'+opts);
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
	var pw = window.open('pop_envoi.php','swin','width='+w+',height='+h+',top='+t+',left='+l+','+opts);
}
function resetf(f) {
	f.raz.value = "reset";
	f.submit();
}
function golink(id) {
	if(id && !isNaN(id)) {
		window.open('pop_lien.php?id='+id,'lien','top=10,left=10,width=600,height=600,scrollbars=yes,resizable=yes,toolbar=yes,menubar=yes,status=yes');
	}
}
function picsearch(e) {
	sf = document.searchform;
	sf.style.cssText = e ? "display:block" : "display:none";
}
function afficherloi(id) {
	
		window.location.href = 'index.php?page=36';
}
function pw(u) {
	var opts = 'scrollbars=yes,resizable=yes,menubar=yes,status=yes';
	var w = 700;
	var h = 600;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open(u,'ppw','width='+w+',height='+h+',top=50,left='+l+','+opts);
}