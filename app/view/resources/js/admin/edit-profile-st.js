var newStyle = document.createElement('style');
newStyle.appendChild(document.createTextNode("\
@font-face {\
	font-family:lr;\
	src:url(../../resources/fonts/Lato-Regular.ttf);\
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
.smbtn{\
	height: 31px !important;\
	border: none;\
	border-radius: 3px;\
	width: 60px;\
	background-color: #E41E26;\
	color: #D2D2D2;\
	transition: all  0.2s ease-in-out 0s;\
}\
.smbtn:hover{\
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
	cursor: pointer;\
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
	cursor: pointer;\
}\
#logout img{\
	position: relative;\
	top: 4px;\
	left: 3px;\
}\
"));
document.head.appendChild(newStyle);