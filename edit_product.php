<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="Image/logo.png">
	<script src="js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
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
								<a href="login.php" id="logout">
									<font size="5">Logout</font>
									<image src="Image/logout.png" height="25" alt="icon"/>
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
										<a href="dashboard.php">
											<button>
												<img src="Image/dashboard.png" height="40">
												<span class="dash">Dashboard</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="AllProductinfo.php">
											<button>
												<img src="Image/vehicle.png" height="40">
												<span >All Stuff<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="employeeinfo.php">
											<button>
												<img src="Image/employee.png" height="40">
												<span >Employee<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="customerinfo.php">
											<button>
												<img src="Image/customerinfo.png" height="40">
												<span >Customer<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="saleshistory.php">
											<button>
												<img src="Image/chart.png" height="40">
												<span >Sales<br>History</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="message.php">
											<button>
												<img src="Image/message.png" height="40">
												<span class="dash">Messages</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="adminprofile.php">
											<button>
												<img src="Image/profile.png" height="40">
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
														<fieldset>
															<legend align="center"><font size="5"><b>Edit Details</b></font></legend>
															<table border="0" id="anc">
																<tr>
																	<td>
																		<table>
																			<tr>
																				<td align="center" colspan="2">
																					<img src="image/cars.png" alt="car Image" width="700" id="empp"><br/>
																					<input type="button" id="ui" value="upload image" onclick="document.getElementById('uploadimage').click();">
																					<input type="file" style="display:none;" id="uploadimage" name="file">
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
																					<td align="left"><b>Name:</b></td>
																					<td><input type="text"/></td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Category:</b></td>
																					<td>
																						<select>
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
																						<select>
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
																						<input type="color" id="color">
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>Price:</b></td>
																					<td>
																						<input type="text"/>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td align="left"><b>In Stock:</b></td>
																					<td>
																						<input type="text"/>
																					</td>
																				</tr>
																				<tr><td height="5"></td></tr>
																				<tr>
																					<td valign="top" align="left"><b>Features:</b></td>
																					<td>
																						<textarea name=""  cols="40" rows="10"></textarea>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="3"><hr/></td>
																				</tr>
																				<tr>
																					
																					<td></td>
																					<td align="left">
																						<input type="submit" value="UPDATE" id="smbtn" />
																					</td>
																				</tr>
																			</table>
																		</fieldset>
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
<script src="js/handler.js"></script>
<script src="js/edprodst.js"></script>
</body>
</html>