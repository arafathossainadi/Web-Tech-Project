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
}\
.container {\
    position: relative;\
    width100%;\
}\
\
.image {\
  opacity: 1;\
  display: block;\
  height:180px;\
  transition: .5s ease;\
  backface-visibility: hidden;\
}\
\
.middle {\
  transition: .5s ease;\
  opacity: 0;\
  position: absolute;\
  top: 50%;\
  left: 50%;\
  transform: translate(-50%, -50%);\
  -ms-transform: translate(-50%, -50%)\
}\
\
.container:hover .image {\
  opacity: 0.3;\
}\
\
.container:hover .middle {\
  opacity: 1;\
}\
\
.text {\
  background-color: #D2D2D2;\
  border-radius: 5px;\
  width:80px;\
  font-size: 16px;\
  padding: 10px 15px;\
  transition: all  0.2s ease-in-out 0s;\
}\
.text a{\
	color: #E41E26;\
	text-decoration: none;\
	transition: all  0.2s ease-in-out 0s;\
}\
.text:hover {\
  background-color: #E41E26;\
}\
 .text:hover a {\
  color: #D2D2D2;\
}\
#atc{\
	height: 31px;\
	border: none;\
	border-radius: 3px;\
	width: 85px;\
	background-color: #E41E26;\
	color: #D2D2D2;\
	transition: all  0.2s ease-in-out 0s;\
}\
#atc:hover{\
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
}\
#feedback input{\
	height: 25px;\
	margin-top: 5px;\
}\
#feedback textarea{\
	resize: none;\
	width: 217px;\
	margin-top: 7px;\
}\
#smbtn{\
	height: 31px !important;\
	border: none;\
	border-radius: 3px;\
	width: 95px;\
	background-color: #E41E26;\
	color: #D2D2D2;\
	transition: all  0.2s ease-in-out 0s;\
}\
#smbtn:hover{\
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
}\
"));
document.head.appendChild(newStyle);