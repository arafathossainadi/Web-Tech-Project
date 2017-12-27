<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="app/view/resources/Images/logo.png">
	<script src="../../resources/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td width="25"></td>
						<td height="160"><a href="index.php?controller=admin&action=dashboard"><img src="app/view/resources/Images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<td align="right"><font size="10" color="white">ADMIN PANEL</font></td>
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
									<image src="app/view/resources/Images/logout.png" height="25" alt="icon"/>
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
										<a href="index.php?controller=admin&action=dashboard">
											<button>
												<img src="app/view/resources/Images/dashboard.png" height="40">
												<span class="dash">Dashboard</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=all-product-info">
											<button>
												<img src="app/view/resources/Images/vehicle.png" height="40">
												<span >All Stuff<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=employee-info">
											<button>
												<img src="app/view/resources/Images/employee.png" height="40">
												<span >Employee<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=customer-info">
											<button>
												<img src="app/view/resources/Images/customerinfo.png" height="40">
												<span >Customer<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=sales-history">
											<button>
												<img src="app/view/resources/Images/chart.png" height="40">
												<span >Sales<br>History</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=message">
											<button>
												<img src="app/view/resources/Images/message.png" height="40">
												<span class="dash">Messages(3)</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="index.php?controller=admin&action=edit-profile">
											<button>
												<img src="app/view/resources/Images/profile.png" height="40">
												<span class="dash">Edit Profile</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
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
												<legend><h3>Employee Register</h3></legend>
												<form>
													<table border="0">
														<tr>
															<td colspan="3" align="center">
																<table border="0">
																	<tr>
																		<td align="center">
																			<img id="empp" src="app/view/resources/Images/defpp.png" width="200">
																		</td>
																	</tr>
																	<tr><td height="10"></td></tr>
																	<tr>
																		<td align="center">
																			<input type="button" id="ui" value="upload image" onclick="document.getElementById('uploadimage').click();">
																			<input type="file" style="display:none;" id="uploadimage" name="file">
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>														
														</tr>
														<tr>
															<td align="left">
																<b>Epmloyee Name :</b>
															</td>
															<td align="left">
																<input type="text" name="name">
															</td>
														</tr>
														
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Email :</b>
															</td>
															<td align="left">
																<input type="text" name="email">
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Address :</b>
															</td>
															<td align="left">
																<input type="text" name="address">
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Contact No. :</b>
															</td>
															<td align="left">
																<input type="text" name="contactNo">
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b >Gender :</b>
															</td>
															<td align="left">
																<select id="empgen">
																	<option value="Select Any">Select Any</option>
																	<option value="Male">Male</option>
																	<option value="Female">Female</option>
																	<option value="Other">Other</option>
																</select>
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Password :</b>
															</td>
															<td align="left">
																<input type="text" name="password">
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Confirm Password :</b>
															</td>
															<td align="left">
																<input type="password" name="password">
															</td>
														</tr>
														<tr>
															<td align="right" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left">
																<b>Salary :</b>
															</td>
															<td align="left">
																<input type="text" name="name">
															</td>
														</tr>
													</table>
													<hr>
													<input type="Reset" value="Reset" class="smbtn">
													<input type="submit" value="Submit" class="smbtn">
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
<script type="text/javascript" src="../../resources/js/admin/employee-add-st.js"></script>
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
		#empgen{\
			width: 155px;\
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
			margin-right: 10px;\
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
</script>
</body>
</html>