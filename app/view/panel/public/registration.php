<!Doctype html>
<html>
	<head>
		<title>Sign Up</title>
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
							<td height="160"><a href="../../../../index.php"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
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
								<a href="Login.php" ><font size="5"><b>LOGIN</b></font></a>
								<font>&nbsp;&nbsp;</font>
								<a href="registration.php" ><font size="5"><b>SIGN UP</b></font></a>
							</td>
						</tr>
						<tr><td height="5"></td></tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#C0C0C0">
				<td valign="top" colspan="3" align="center">
					<table border="0" bgcolor="#C0C0C0" width="1170">
						<tr> 
							<td>
								<table  align="center" border="0">
									<tr>
										<td valign="center"><img src="app/view/resources/images/p3a.png" width="380" alt=""></td>
										<td>
											<fieldset>
												<legend><h3>SIGN UP</h3></legend>
												<form method="post">
													<table border="0" id="reginfo">
														<tr>
															<td>
																<span>Name:</span>
															</td>
															<td>
																<input type="text" name="name" value="<?=$customer['name']?>">
															</td>
														</tr>
														<tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>Email:</span>
															</td>
															<td>
																<input type="text" name="email" "<?=$customer['email']?>">
																&nbsp;&nbsp;<img src="app/view/resources/images/i.png" alt="" width="22" align="center">
															</td>
														</tr>
														<!-- <tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>Address:</span>
															</td>
															<td>
																<input type="text" name="address">
															</td>
														</tr>
														<tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>Contact Number:</span>
															</td>
															<td>
																<input type="text" name="address">
															</td>
														</tr>
														<tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>User Name:</span>
															</td>
															<td>
																<input type="text" name="username">
															</td>
														</tr>
														<tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>Password:</span>
															</td>
															<td>
																<input type="Password" name="pass">
															</td>
														</tr>
														<tr><td colspan="2"> <hr></td></tr>
														<tr>
															<td>
																<span>Confirm Password:</span>
															</td>
															<td>
																<input type="Password">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td width="600">
																<fieldset>
																	<legend>Gender</legend>
																	<input type="radio" name="gen" value="Male">Male
																	<input type="radio" name="gen" value="Female">Female
																	<input type="radio" name="gen" value="Other">Other
																</fieldset>
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td width="600">
																<fieldset>
																	<legend>Date of Birth</legend>
																	<table>
																		<tr>
																			<td>
																				<input type="text" name="day" placeholder="Day" size="4" name="day"/> /
																			</td>
																			<td>
																				<input type="text" name="month" placeholder="Month" size="4" name="month"/> /
																			</td>
																			<td>
																				<input type="text" name="year" placeholder="Year" size="4" name="year"/>
																			</td>
																			<td>
																				&nbsp(dd/mm/yyyy)
																			</td>
																		</tr>
																	</table>
																</fieldset>
															</td>
														</tr> -->
													</table>
													<hr>
													<input type="submit" value="Submit" class="smbtn">
													<a href="login.php"><input type="Reset" value="Reset" class="smbtn"></a>
												</form>
											</fieldset>
										</td>
										<td valign="center"><img src="app/view/resources/images/p3b.png" width="380" alt=""></td>
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
		.smbtn{\
			height: 31px !important;\
			border: none;\
			border-radius: 3px;\
			width: 60px !important;\
			margin-right: 10px;\
			background-color: #E41E26;\
			color: #D2D2D2;\
			transition: all  0.2s ease-in-out 0s;\
		}\
		.smbtn:hover{\
			box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
		}\
		#reginfo input{\
			width: 176px\
		}\
		"));
		document.head.appendChild(newStyle);
	</script>
	<script src="../../../../data/core/front-end/handler.js"></script>

	</body>
</html>