<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="app/view/resources/Images/logo.png">
	<script src="app/view/resources/js//jquery-3.2.1.min.js"></script>
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
									<image src="app/view/resources/Images/logout.png" height="25" alt="icon" name="Image"/>
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
						<td width="10" bgcolor="D7DBDD"></td>
						<td valign="top" bgcolor="D7DBDD" align="center">
							<table>
								<tr>
									<td>
										<table>
											<tr>
												<td height="20"></td>
											</tr>
										</table>
										<font size="3">
											<table align="left">
												<tr>
													<td>
													<form method="post">
														<fieldset>
															<legend align="center"><font size="5"><b>Add New Car Details</b></font></legend>
															<table border="0" id="anc">
																<tr>
																	<td>
																		<table>
																			<tr>
																				<td align="center" colspan="2">
																					<img id="empp" src="app/view/resources/Images/<?=$product['Image']?>" alt="car Image" width="700"><br/>
																					<input type="button" id="ui" value="upload image" onclick="document.getElementById('uploadimage').click();">
																					<input type="file" style="display:none;" id="uploadimage" name="Image">
																				</td>
																			</tr>
																		</table>
																	</td>
																</tr>
																<tr>
																	<td>
																		<fieldset id="ancdet">
																			<table border="0" align="center">
																				<tr><td height="10"></td></tr>
																				<tr>
																					<td align="left"><b>Model No./ Car Name:</b></td>
																					<td><input type="text" name="ModelNo" value="<?=$product['ModelNo']?>"/></td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Category:</b></td>
																					<td>
																						<select name="Category" value="<?=$product['Category']?>">
																								<option value="SUV">SUV</option>
																								<option value="SEDAN">SEDAN</option>
																								<option value="CROSSOVER">CROSSOVER</option>
																								<option value="PICKUP TRUCKS">PICKUP TRUCKS</option>
																								<option value="PARTS">VEHICLE PARTS</option>
																						</select>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Brand:</b></td>
																					<td>
																						<select name="Brand" value="<?=$product['Brand']?>">
																							<option value="TOYOTA">TOYOTA</option>
																							<option value="NISSAN">NISSAN</option>
																							<option value="MITSUBISHI">MITSUBISHI</option>
																							<option value="MERCEDES">MERCEDES</option>
																							<option value="PORCHE">PORCHE</option>
																						</select>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Colors:</b></td>
																					<td valign="top">
																						<input type="text" name="Color" value="<?=$product['Color']?>">
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Price:</b></td>
																					<td>
																						<input type="text" name="Price" value="<?=$product['Price']?>"/>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>In Stock:</b></td>
																					<td>
																						<input type="text" name="InStock" value="<?=$product['InStock']?>"/>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td valign="top" align="left"><b>Features:</b></td>
																					<td>
																						<textarea name="Feature"  cols="40" rows="10"><?=$product['Feature']?></textarea>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="3"><hr/></td>
																				</tr>
																				<tr>
																					
																					<td></td>
																					<td align="left">
																						<input type="submit" value="SAVE" class="smbtn" />
																					</td>
																				</tr>
																			</table>
																		</fieldset>
																	</td>
																</tr>
															</table>
														</fieldset>
													</form>
													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</font>
							<table>
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
<script src="app/view/resources/js/handler.js"></script>
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
	#anc select{\
		width: 156px;\
	}\
	#anc textarea{\
		width: 151px;\
		resize: none;\
	}\
	#color{\
		width: 150px;\
	}\
	#ancdet{\
		margin: 0 auto;\
		width: 330px;\
	}\
	.smbtn{\
		height: 31px !important;\
		border: none;\
		border-radius: 3px;\
		width: 95px;\
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