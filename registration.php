<!Doctype html>
<html>
	<head>
		<title>Sign Up</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		<table width="1170" align="center" border="0" cellspacing="0"  >
			<tr bgcolor="black">
				<td width="200">
					<table border="0">
						<tr>
							<td>&nbsp;&nbsp;&nbsp;</td>
							<td><?phpecho ""?><a href="Homepage.php"><img src="Image/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						</tr>
					</table>
				</td>
				<td colspan="3" align="right">
					<table border="0">
						<tr>
							<td><input type="text" placeholder="Search Your Product Here" name="search_bar" style="padding: 8px;" size="60" valign="center"/></td>
							<td>
								<button valign="center">
									<font size="5">Search</font><img src="Image/icon1.png" height="25" alt="Save icon">
								</button>
							</td>
							<td><a><img src="Image/cart.png" height="55" alt="cart_icon"></a></td>
							<td width="10"></td>
						</tr>
					</table>
				</td>
			</tr>
			<tr bgcolor="#d1f2eb">
				<td colspan="3" align="right">
					<table>
						<tr>
							<td><a style="text-decoration:none;" href="Homepage.php"><font size="5"><b>Home</b></font></a></td>
							<td><a href="Homepage.php"><img src="Image/home.png" height="25" alt="home_icon"></a></td>
							<td>&nbsp;<font size=4"><b>|&nbsp;&nbsp;</b></font></td>
							<td><a style="text-decoration:none;"><font size="5"><b>About</b></font></a></td>
							<td><a><img src="Image/about.png" height="25" alt="about_icon"></a></td>
							<td>&nbsp;<font size=4"><b>|&nbsp;&nbsp;</b></font></td>
							<td><a style="text-decoration:none;"><font size="5"><b>Contact</b></font></a></td>
							<td><a><img src="Image/contact.png" height="25" alt="contact_icon"></a></td>
							<td>&nbsp;<font size=4"><b>|&nbsp;&nbsp;</b></font></td>
							<td><a style="text-decoration:none;"><font size="5"><b>Login</b></font></a></td>
							<td><a><img src="Image/login.png" height="25" alt="login_icon"></a></td>
							<td>&nbsp;<font size=4"><b>|&nbsp;&nbsp;</b></font></td>
							<td><a style="text-decoration:none;"><font size="5"><b>Sign Up</b></font></a></td>
							<td><a><img src="Image/signup.png" height="25" alt="signup_icon"></a></td>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td   valign="top" align="center" colspan="3">
					<table border="0" bgcolor="#C0C0C0" width="1170">
						<tr> 
							<td>
								<table width="400" align="center">
									<tr>
										<td>
											<fieldset>
												<legend><h3>SIGN UP</h3></legend>
												<form action="regHandle.php">
													<table>
														<tr>
															<td>
																<span>Name</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="name">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>Email</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="email">
																&nbsp&nbsp<img src="images/i.png" alt="" width="22" align="center">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>Address</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="address">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>Contact Number</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="address">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>User Name</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="text" name="username">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>Password</span>
															</td>
															<td>
																&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp:&nbsp<input type="Password" name="pass">
															</td>
														</tr>
													</table>
													<hr>
													<table>
														<tr>
															<td>
																<span>Confirm Password</span>
															</td>
															<td>
																:&nbsp<input type="Password">
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
																			<td >
																				<input type="text" name="day" placeholder="Day" size="5" name="day"> /
																			</td>
																			<td>
																				<input type="text" name="month" placeholder="Month" size="5" name="month"> /
																			</td>
																			<td>
																				<input type="text" name="year" placeholder="Year" size="5" name="year">
																			</td>
																			<td>
																				&nbsp(dd/mm/yyyy)
																			</td>
																		</tr>
																	</table>
																</fieldset>
															</td>
														</tr>
													</table>
													<hr>
													<input type="submit">
													<input type="Reset" value="Reset">
												</form>
											</fieldset>
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
				<td colspan="3">
					<table border="0">
						<tr><td height="20" colspan="6"></td></tr>
						<tr>
							<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
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
								<a href="http://www.linkedin.com"><img src="Image/lin.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="http://www.gmail.com"><img src="Image/g+.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="http://www.facebook.com"><img src="Image/fb.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="http://www.twitter.com"><img src="Image/twitt.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<a href="http://www.instagram.com"><img src="Image/insta.png"  height="50" valign="top"><br/><br/></a>
							</td>
							<td width="50"></td>
							<td align="center" valign="top">
								
								<font size="5" color="white"><b><u><i>Payement Method</i></u></b></font><br/><br/>
								<img src="Image/payoneer.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<img src="Image/payza.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
								<img src="Image/paypal.png"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							</td>
						</tr>
						<tr><td height="20" colspan="6"></td></tr>
					</table>
				</td>	
			</tr>
			<tr bgcolor="black" height="50" >
				<td colspan="2">
					<table border="0">
						<tr>
							<td  width="900"  align="center" valign="center"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright©2017</td>
							<td  width="300" align="center" valign="center"><font color="white">Terms and Conditions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>