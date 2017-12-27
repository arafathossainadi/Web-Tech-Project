<!DOCTYPE html>
<html lang="en">
<head>
	<title>EMPLOYEE</title>
	<link rel="icon" href="app/view/resources/images/logo.png">
	<script src="../../resources/js//jquery-3.2.1.min.js"></script>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td width="25"></td>
						<td height="160"><a href="index.php?controller=employee&action=dashboard"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<td align="right"><font size="7" color="white">EMPLOYEE PANEL</font></td>
					</tr>
					<tr><td height="10"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="8DCAA1">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="5"></td></tr>
					<tr>
						<td align="right">
							<td align="right" valign="center">&nbsp;
								<a href="index.php?controller=public&action=login" id="logout">
									<font size="5">Logout</font>
									<image src="app/view/resources/images/logout.png" height="25" alt="icon"/>
								</a>
							</td>
						</td>
					</tr>
					<tr><td height="5"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#C0C0C0">
			<td >
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr>
						<td width="150" align="left" valign="top" bgcolor="#52be80" class="addash">
							<table border="0" bgcolor="#52be80" align="center">
								<tr><td height="10"></td></tr>
								<tr>
									<td >
										<a href="index.php?controller=employee&action=dashboard">
											<button>
												<img src="app/view/resources/images/dashboard.png" height="40">
												<span class="dash">Dashboard</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>

									<td >
										<a href="index.php?controller=employee&action=message"><button>
												<img src="app/view/resources/images/message.png" height="40">
												<span class="dash">Messages(3)</span>
											</button></a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>

									<td >
										<a href="index.php?controller=employee&action=edit-profile">
											<button>
												<img src="app/view/resources/images/profile.png" height="40">
												<span class="dash">Edit Profile</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td valign="top" >
										<a href="index.php?controller=employee&action=change-password">
											<button>
												<img src="app/view/resources/images/password_icon.png" height="43">
												<span>Change<br>Password</span>
											</button>
										</a>
									</td>
								</tr>

							</table>
						</td>
						<td width="895" bgcolor="#C0C0C0" valign="top">
							<table border="0" width="860" align="center">
								<tr><td height="20"></td></tr>
								<tr>
									<td align="center">
										<table>
											<tr>
												<td>
												<fieldset>
												<legend><h3>Order Details</h3></legend>
												<form>
													<table border="0">
														<tr>
															<td colspan="3" align="center">
																<table border="0">
																	<tr>
																		<td align="center">
																			<img id="order_image" src="app/view/resources/images/product1.jpg" width="300">
																		</td>
																	</tr>
																	<tr><td height="10"></td></tr>
																</table>
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left" width="140">
																<b>Order Id :</b>
															</td>
															<td align="left">
																1001
															</td>
														</tr>

														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Product Id :</b>
															</td>
															<td align="left">
																2001
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Product Name :</b>
															</td>
															<td align="left">
																Car -ABC
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Color :</b>
															</td>
															<td align="left">
																Black
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Customer Name :</b>
															</td>
															<td align="left">
																ABC DEF
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Phone No. :</b>
															</td>
															<td align="left">
																12345678
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Address :</b>
															</td>
															<td align="left">
																Dhaka
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Email :</b>
															</td>
															<td align="left">
																abc@gmail.com
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Order Date & Time:</b>
															</td>
															<td align="left">
																1/1/17
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Quantity :</b>
															</td>
															<td align="left">
																1
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td colspan="2" align="center">
																
																<hr>
																<input type="Reset" value="Cancel" class="smbtn">
																<input type="submit" value="OK" class="smbtn">
															</td>
														</tr>
													</table>
												</form>
												</fieldset>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr><td height="20"></td></tr>
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
	<script src="../../../../data/core/front-end//handler.js"></script>
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
			cursor: pointer;\
		}\
		#logout img{\
			position: relative;\
			top: 4px;\
			left: 3px;\
		}\
		"));
		document.head.appendChild(newStyle);
	</script>
</body>
</html>
