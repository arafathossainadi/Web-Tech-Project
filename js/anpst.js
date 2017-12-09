var newStyle = document.createElement('style');
newStyle.appendChild(document.createTextNode("\
@font-face {\
	font-family:lr;\
	src:url(./fonts/Lato-Regular.ttf);\
}\
*{\
	font-family: lr;\
}\
.addash button{\
	position:relative;\
	width: 150px;\
	height: 52px;\
	border-radius: 5px;\
	border: none;\
}\
.addash button:hover{\
	-webkit-box-shadow: 0 2px 10px -2px red;\
	box-shadow: 0 2px 10px -2px black;\
	bottom: 2px;\
}\
.addash img{\
	top: 6px;\
	left: 5px;\
	position: absolute;\
}\
.dash{\
	top: 16px !important;\
}\
.addash span{\
	color: #E41E26;\
	text-align: left;\
	top: 6px;\
	left: 54px;\
	position: absolute;\
	font-size: 17px;\
}\
"));
document.head.appendChild(newStyle);