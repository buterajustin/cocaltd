function popup(id){
	var opts = 'scrollbars=yes,resizable=no,menubar=yes,status=no';
	var w = 700;
	var h = 600;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open('pop_up.php?id='+id,'ppw','width='+w+',height='+h+',top=50,left='+l+','+opts);
}

function popwin(url,name,w,h,optionlist,align)
{
	if(align == "center")
	{
		t = ((screen.height-h)/2);
		l = ((screen.width-w)/2);
		optionlist += (optionlist != "" ? "," : "")+"top="+t+",left="+l;
	}
	optionlist = optionlist != "" ? ","+optionlist : "";
	eval(name+" = window.open('"+url+"','"+name+"','width="+w+",height="+h+optionlist+"');");
	eval(name+".focus();");
}

function popup_texte2(id,type){
//	alert("popup2");
	var opts = 'scrollbars=yes,resizable=no,status=no,menubar=no,location=no';
	var w = 600;
	var h = 600;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open('popup2.php?id='+id+'&type='+type,'','width='+w+',height='+h+',left='+l+','+opts);
}

function popup_texte(id){
	var opts = 'scrollbars=yes,resizable=no,status=no,menubar=no,location=no';
	var w = 600;
	var h = 600;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open('popup.php?id='+id,'','width='+w+',height='+h+',left='+l+','+opts);
}

function popup_contact(id){
	var opts = 'scrollbars=yes,resizable=no,status=no,menubar=no,location=no';
	var w = 500;
	var h = 400;
	var t = (screen.height - h)/2;
	var l = (screen.width - w)/2;
	var pw = window.open('popup_contact.php?id='+id,'','width='+w+',height='+h+',left='+l+','+opts);
}