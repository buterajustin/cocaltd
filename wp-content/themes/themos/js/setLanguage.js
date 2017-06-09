function setLangue(lg) {
	page = self.location.href.replace("&", "|");
	window.location.href='langue.php?lg='+lg+'&url='+page;;
}
