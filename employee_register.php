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
						<td width="278" align="left" valign="top" bgcolor="#52be80">
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
						<td width="895" bgcolor="#C0C0C0" valign="top">
							<table border="0" width="860" align="center">
								<tr><td height="20"></td></tr>
								<tr>
									<td align="left">
										<table>
											<tr>
												<td>
													<fieldset>
												<legend><h3>Employee Register</h3></legend>
												<form action="regHandle.php">
													<table>
														<tr>
															<td colspan="3" align="center">
																<table>
																	<tr>
																		<td align="right">
																			<img src="" border="1" width="120" height="100">
																		</td>
																	</tr>
																	<tr>
																		<td>
																			<input type="file"/>
																		</td>
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Epmloyee Name :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="name">
															</td>
														</tr>
														
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Email :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="email">
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Address :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="address">
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Contact No. :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="contactNo">
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td colspan="3" align="center">
																<table>
																	<tr>
																		<td>
																			<fieldset>
																				<legend><b>Gender</b></legend>
																				<input type="radio" name="gen" value="Male">Male
																				<input type="radio" name="gen" value="Female">Female
																				<input type="radio" name="gen" value="Other">Other
																			</fieldset>
																		</td>
																		
																	</tr>
																</table>
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Password :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="password">
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Confirm Password :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="password" name="password">
															</td>
														</tr>
														<tr>
															<td align="right">
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
															</td>
														</tr>
														<tr>
															<td align="right">
																<b>Salary :</b>
															</td>
															<td align="right">
																&nbsp;&nbsp;&nbsp;
															</td>
															<td align="right">
																<input type="text" name="name">
															</td>
														</tr>
													</table>
													<hr>
													<input type="Reset" value="Reset">
													<input type="submit">
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