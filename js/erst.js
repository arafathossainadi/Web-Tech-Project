var newStyle = document.createElement('style');
newStyle.appendChild(document.createTextNode("\
	@font-face {\
		font-family:lr;\
		src:url(./fonts/Lato-Regular.ttf);\
	}\
	*{\
		font-family: lr;\
	}\
	#empgen{\
		width: 155px;\
	}\
"));
document.head.appendChild(newStyle);