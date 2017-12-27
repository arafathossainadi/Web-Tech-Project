<!Doctype html>
<html>
	<head>
		<title>Login</title>
		<link rel="icon" href="app/view/resources/images/logo.png">
	</head>
	<body>
		<table width="100%" border="0" cellspacing="0" align="center">
			<tr bgcolor="#212121">
				<td>
					<table width="1170" align="center" border="0" cellspacing="0">
						<tr><td height="10"></td></tr>
						<tr id="schct">
							<td width="25"></td>
							<td height="160"><a href="index.php?controller=public&action=index"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						</tr>
						<tr><td height="10"></td></tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#d1f2eb">
				<td>
					<table width="1170" align="center" border="0" cellspacing="0">
						<tr><td height="5"></td></tr>
						<tr>
							<td align="right" id="top-menu">
								<a  href="index.php?controller=public&action=index"><font size="5"><b>HOME</b></font></a>
								<font>&nbsp;&nbsp;</font>
								<a href="about.php" ><font size="5"><b>ABOUT</b></font></a>
								<font>&nbsp;&nbsp;</font>
								<a href="Contact.php" ><font size="5"><b>CONTACT</b></font></a>
								<font>&nbsp;&nbsp;</font>
								<a href="index.php?controller=public&action=login" ><font size="5"><b>LOGIN</b></font></a>
								<font>&nbsp;&nbsp;</font>
								<a href="index.php?controller=public&action=registration" ><font size="5"><b>SIGN UP</b></font></a>
							</td>
						</tr>
						<tr><td height="5"></td></tr>
					</table>
				</td>
			</tr>
			<tr  bgcolor="grey">
				<td >
					<table width="1170" align="center" border="0" cellspacing="0">
						<tr>
							<td height="500" valign="center">
								<table  align="center" border="0">
									<tr><td height="20"></td></tr>
									<tr>
										<td width="300">
											<img src="app/view/resources/images/p1.png" height="250" alt="">
										</td>
										<td  align="center">
											<form method="post">
												<fieldset>
													<legend><font size="5"><b>LOGIN</b></font></legend>
														<table>
															<tr>
																<td><font size="5"><b><i>Username&nbsp;&nbsp;&nbsp;</i></b><input type="text" id="username" placeholder="  Username" name="username" value="<?=$userlogin['username']?>" size="30" valign="center" required/><td>
															</tr>
															<tr></tr>
															<tr>
																<td><font size="5"><b><i>Password&nbsp;&nbsp;&nbsp;&nbsp;</i></b><input type="password" id="password" placeholder="  Password" name="password" value="<?=$userlogin['password']?>"  size="30" valign="center" required/><td>
															</tr>
														</table>
														<hr/>
														<table align="left">
															<tr>
																<td><input type="checkbox" name="remember_me"><font size="3"><b>&nbsp;&nbsp;Remember me&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><a href="email-verify.php">Forgot Password?</a><br/><br></font></td>
															</tr>
															<tr>
																<td align="left">
																	<button type="submit" id="smbtn" valign="center" align="right">
																		<font size="">Login</font>
																	</button>
																</td>
															</tr>
															<tr>
																<td><br><u>Not a member yet ?</u>&nbsp;&nbsp;<a href="registration.php">Sign Up</a></td>
															</tr>
														</table>
												</fieldset>
											</form>
										</td>
										<td width="300" align="right">
											<img src="app/view/resources/images/p2.png" height="250" alt="">
										</td>
									</tr>
									<tr><td height="20"></td></tr>
								</table>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#424949 ">
				<td >
					<table width="1170" align="center" border="0" cellspacing="0">
						<tr>
							<td colspan="3">
								<table border="0">
									<tr><td height="20"></td></tr>
									<tr>
										<td width="70"></td>
										<td align="left" valign="top">
												<font color="#f7f9f9" size="5"><u>Contact Us</u></font><br/>
												<table><tr><td height="1"></td></tr></table>
												<font color="#f7f9f9" size="4">Webomotorsbd.com<br/>
												Dhaka,Bangladesh.<br/>
												Email:&nbsp;webomotor@gmail.com<br/>
												Phone:&nbsp;01234-123456<br/>
										</td>
										<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td align="center" width="350" valign="top">
											<font size="5" color="white"><b><u>Join Us On</u></b></font><br/><br/>
											<a href="http://www.linkedin.com"><img src="app/view/resources/images/lin.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="http://www.gmail.com"><img src="app/view/resources/images/g+.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="http://www.facebook.com"><img src="app/view/resources/images/fb.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="http://www.twitter.com"><img src="app/view/resources/images/twitt.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<a href="http://www.instagram.com"><img src="app/view/resources/images/insta.png"  height="50" valign="top"><br/><br/></a>
										</td>
										<td width="50"></td>
										<td align="center" valign="top">
											
											<font size="5" color="white"><b><u><i>Payement Method</i></u></b></font><br/><br/>
											<img src="app/view/resources/images/payoneer.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<img src="app/view/resources/images/payza.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											<img src="app/view/resources/images/paypal.png"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
										</td>
									</tr>
									<tr><td height="20"></td></tr>
								</table>
							</td>	
						</tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#212121" height="50" >
				<td>
					<table width="1170" align="center">
						<td colspan="2">
							<table border="0" align="center">
								<tr>
									<td width="300"></td>
									<td  width="600"  align="center" valign="center"><font color="white">Copyright©2017</td>
									<td  width="300" align="center" valign="center"><font color="white">Terms and Conditions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</td>
								</tr>
							</table>
						</td>
					</table>
				</td>
			</tr>
		</table>
	<script>
		var newStyle = document.createElement('style');
		newStyle.appendChild(document.createTextNode("\
		@font-face {\
			font-family:lr;\
			src:url(app/view/resources/fonts/Lato-Regular.ttf);\
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
		#smbtn{\
			height: 31px !important;\
			border: none;\
			border-radius: 3px;\
			width: 65px !important;\
			background-color: #E41E26;\
			color: #D2D2D2;\
			transition: all  0.2s ease-in-out 0s;\
		}\
		#smbtn:hover{\
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
		}\
		#opi textarea{\
			resize: none;\
			width: 250px;\
		}\
		#opi input{\
		 	width: 250px;\
		}\
		"));
		document.head.appendChild(newStyle);
	</script>
	</body>
</html>