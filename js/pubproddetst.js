var newStyle = document.createElement('style');
newStyle.appendChild(document.createTextNode("\
@font-face {\
	font-family:lr;\
	src:url(./fonts/Lato-Regular.ttf);\
}\
*{\
	font-family: lr;\
}\
#top-menu > a{\
	position: relative;\
	text-decoration: none;\
	color:#212121;\
	-webkit-transition: color 0.2s ease-in-out 0s;\
        	transition: color 0.2s ease-in-out 0s;\
}\
#top-menu > a:hover{\
	color: #E41E26;\
}\
#top-menu > a::before{\
	content: '';\
	position: absolute;\
	width: 100%;\
	height: 2px;\
	bottom: -5px;\
	left: 0;\
	background-color: #E41E26;\
	visibility: hidden;\
	-webkit-transform: scaleX(0);\
	transform: scaleX(0);\
	-webkit-transition: all 0.2s ease-in-out 0s;\
	transition: all 0.2s ease-in-out 0s;\
}\
#top-menu > a:hover::before{\
	visibility: visible;\
	  -webkit-transform: scaleX(0.9);\
	  transform: scaleX(0.9);\
}\
#schct input{\
	height: 25px;\
}\
#schct input::placeholder{\
	color:#E41E26;\
}\
#schct button{\
	height: 31px;\
	border: none;\
	border-radius: 3px;\
	width: 85px;\
	background-color: #E41E26;\
	color: #D2D2D2;\
	transition: all  0.2s ease-in-out 0s;\
}\
#schct button:hover{\
	background-color: #D2D2D2;\
	color: #E41E26;\
	cursor: pointer;\
}\
"));
document.head.appendChild(newStyle);