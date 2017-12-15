var newStyle = document.createElement('style');
newStyle.appendChild(document.createTextNode("\
@font-face {\
	font-family:lr;\
	src:url(../fonts/Lato-Regular.ttf);\
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
#logout{\
	text-decoration: none;\
	position: relative;\
	bottom : 1px;\
	color: #212121;\
	padding: 9px;\
	padding-bottom: 5px;\
	transition: all  0.2s ease-in-out 0s\
}\
#logout:hover{\
	background-color: #D7DBDD;\
	border-radius: 45px;\
}\
#logout img{\
	position: relative;\
	top: 4px;\
	left: 3px;\
}\
"));
document.head.appendChild(newStyle);