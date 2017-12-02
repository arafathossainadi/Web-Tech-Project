<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="Image/logo.png">
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="black">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td width="25"></td>
						<td height="160"><a href="index.html"><img src="Image/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
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
								<font size="5">Log Out
									<image src="Image/logout.jpg" height="25" alt="icon"/>
								</font>
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
						<td width="275" align="left" valign="top" bgcolor="#52be80">
							<table border="0" bgcolor="#52be80">
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td  width="250">
										<img src="Image/dashboard.png"/ height="30">
										<a href="dashboard.php"><font size="5">Dashboard</font>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/vehicle.png"/ height="30">
										<a href="allproductinfo.php"><font size="5">Vehicles Information</font>
										
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/employee.png"/ height="30">
										<a href="employeeinfo.php"><font size="5">Employee Information</font>
										
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/customerinfo.png"/ height="30">
										<a href="customerinfo.php"><font size="5">Customer Information</font>
										
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/chart.png"/ height="30">
										<a href="saleshistory.php"><font size="5">Sales History</font></a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/message.png"/ height="30">
										<a href="message.php"><font size="5">Messages</font>
										
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td width="10"></td>
									<td >
										<img src="Image/profile.png"/ height="30">
										<a href="adminprofile.php"><font size="5">Edit Profile</font>
										
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
										<font size="5">
											<table align="left">
												<tr>
													<td>
														<fieldset>
															<legend align="center"><font size="5"><b>Edit Car Details</b></font></legend>
															<table border="0">
																<td align="center" colspan="2">
																	<img src="image/cars.png" alt="car Image" width="700"><br/>
																	<input type="submit" value="Change Image"/>
																</td>
																<tr>
																	<td align="right"><b>Model No./ Car Name</b></td>
																	<td>&nbsp;<input type="text"/></td>
																</tr>
																<tr>
																	<td align="right"><b>Category</b></td>
																	<td>
																		&nbsp;
																		<select>
																		<option value="SUV">SUV</option>
																		<option value="SEDAN">SEDAN</option>
																		<option value="CROSSOVER">CROSSOVER</option>
																		<option value="PICKUP TRUCKS">PICKUP TRUCKS</option>
																		<option value="PARTS">VEHICLE PARTS</option>
																	</select>
																	</td>
																</tr>
																<tr>
																	<td align="right">&nbsp;<b>Brand</b></td>
																	<td>
																		&nbsp;<select>
																		<option value="TOYOTA">TOYOTA</option>
																		<option value="NISSAN">NISSAN</option>
																		<option value="MITSUBISHI">MITSUBISHI</option>
																		<option value="MERCEDES">MERCEDES</option>
																		<option value="PORCHE">PORCHE</option>
																	</select>
																	</td>
																</tr>
																<tr>
																	<td valign="top" align="right"><b>Fetures</b></td>
																	<td>
																		&nbsp;<textarea name=""  cols="40" rows="10"></textarea>
																	</td>
																</tr>
																<tr>
																	<td align="right"><b>Colors</b></td>
																	<td valign="top">
																		&nbsp;<input type="checkbox">RED
																		 <input type="checkbox">Black
																		 <input type="checkbox">Silver
																	</td>
																</tr>
																<tr>
																	<td align="right"><b>Price</b></td>
																	<td>
																		&nbsp;<input type="text"/>
																	</td>
																</tr>
																<tr>
																	<td align="right"><b>In Stock</b></td>
																	<td>
																		&nbsp;<input type="text"/>
																	</td>
																</tr>
																<tr>
																	<td colspan="3"><hr/></td>
																</tr>
																<tr>
																	
																	<td>&nbsp;&nbsp;</td>
																	<td align="left">
																		<input type="submit" value="SAVE"/>
																	</td>
																</tr>
															</table>
														</fieldset>
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
		<tr>
			<td bgcolor="black">
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td colspan="2" align="center" valign="center"><font color="white">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright©2017</td>
						<td align="center" valign="center" width="300"><font color="white">Terms and Conditions&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</td>
					</tr>
					<tr><td height="10"></td></tr>
				</table>
			</td>
		</tr>
	</table>
</body>
</html>