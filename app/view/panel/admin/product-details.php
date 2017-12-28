
<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="app/view/resources/Images/logo.png">
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
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr>
						<td width="180" align="left" valign="top" bgcolor="#52be80" class="addash">
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
						<td valign="center" bgcolor="D7DBDD">
							<table border="0" width="800" align="center">
								<tr>
									<td valign="top" bgcolor="D7DBDD" align="center">
										<table>
											<tr>
												<td height="50"></td>
											</tr>
										</table>
										<table width="500" align="center">
											<tr>
												<td>
													<fieldset>
														<img src="app/view/resources/Images/<?=$idProduct[0]['Image']?>" alt="car Image" height="270" width="500"><br/><br><br>
													</fieldset>
												</td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td>
										<table border="0">
											<tr>
												<td>
													<table>
														<tr>
															<td height="20"></td>
														</tr>
													</table>
													<font size="5">
														<table align="left" border="0" cellpadding="5">
															<tr>
																<td width="230px" align="left" valign="top"><b>Name</b></td>
																<td valign="top">:</td>
																<td align="left" valign="top"><?=$idProduct[0]['ModelNo']?></td>
															</tr>
															<tr>
																<td align="left" valign="top"><b>Category</b></td>
																<td valign="top">:</td>
																<td align="left" valign="top"><?=$idProduct[0]['Category']?></td>
															</tr>
															<tr>
																<td align="left" valign="top"><b>Brand</b></td>
																<td valign="top">:</td>
																<td align="left" valign="top"><?=$idProduct[0]['Brand']?></td>
															</tr>
															<tr>
																<td align="left" valign="top"><b>Features</b></td>
																<td valign="top">:</td>
																<td align="justify" valign="top"><?=$idProduct[0]['Feature']?></td>
															</tr>
															<tr>
																<td align="left" valign="top"><b>Available Colors</b></td>
																<td valign="top">:</td>
																<td align="left" valign="top"><?=$idProduct[0]['Color']?></td>
															</tr>
															<tr>
																<td align="left" valign="top"><b>Price</b></td>
																<td align="left" valign="top">: </td>
																<td><?=$idProduct[0]['Price']?></td>
															</tr>
														</table>
													</font>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td bgcolor="52be80"></td>
						<td  bgcolor="D7DBDD" align="center" colspan="3">
							<table border="0">
								<tr>
									<td height="20"></td>
								</tr>
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