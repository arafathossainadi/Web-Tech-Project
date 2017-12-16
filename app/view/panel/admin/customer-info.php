<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
	<link rel="icon" href="../../resources/Images/logo.png">
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td width="25"></td>
						<td height="160"><a href="dashboard.php"><img src="../../resources/Images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
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
								<a href="../public/login.php" id="logout">
									<font size="5">Logout</font>
									<image src="../../resources/Images/logout.png" height="25" alt="icon"/>
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
										<a href="dashboard.php">
											<button>
												<img src="../../resources/Images/dashboard.png" height="40">
												<span class="dash">Dashboard</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="All-Product-info.php">
											<button>
												<img src="../../resources/Images/vehicle.png" height="40">
												<span >All Stuff<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="employee-info.php">
											<button>
												<img src="../../resources/Images/employee.png" height="40">
												<span >Employee<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="customer-info.php">
											<button>
												<img src="../../resources/Images/customerinfo.png" height="40">
												<span >Customer<br>Information</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="sales-history.php">
											<button>
												<img src="../../resources/Images/chart.png" height="40">
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
												<img src="../../resources/Images/message.png" height="40">
												<span class="dash">Messages(3)</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<a href="edit-profile.php">
											<button>
												<img src="../../resources/Images/profile.png" height="40">
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
										<table border="1" align="center" cellpadding="10" width="100%" cellspacing="0">
											<tr align="center">
												<th colspan="9">
													CUSTOMER INFORMATION
												</th>
											</tr>
											<tr align="center">
												<td><b>Customer ID</b></td>
												<td><b>Customer Name</b></td>
												<td><b>Gender</b></td>
												<td><b>Phone No.</b></td>
												<td><b>Email Address</b></td>
												<td><b>Last Login Date & Time</b></td>
												<td><b>Total Product Purchased</b></td>
												<td><b>Delete User</b></td>
											</tr>
											<tr align="center">
												<td>1001</td>
												<td>ABC XYZ</td>
												<td>Male</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td>4</td>
												<td><a href="delete-customer.php">Delete</a></td>
											</tr>
											<tr align="center">
												<td>1002</td>
												<td>ABC XYZ</td>
												<td>Male</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td>4</td>
												<td><a href="delete-customer.php">Delete</a></td>
											</tr>
											<tr align="center">
												<td>1003</td>
												<td>ABC XYZ</td>
												<td>Male</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td>4</td>
												<td><a href="delete-customer.php">Delete</a></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr><td height="20"></td></tr>
								<tr>
									<td align="center">
										<table>
											<tr>
												<td align="center"><font size="5"><b>CUSTOMER LOGIN INFORMATION</b></font></td>
											</tr>
									</table>
									</td>
								</tr>
								<tr>
									<td align="center">
										<table border="1" align="center" cellpadding="10" width="100%" cellspacing="0">
											<tr align="center">
												<th colspan="9">
													<font color="red" size="5">Login Before 6 Months Ago</font>
												</th>
											</tr>
											<tr align="center">
												<td><b>Customer ID</b></td>
												<td><b>Customer Name</b></td>
												<td><b>Phone No.</b></td>
												<td><b>Email Address</b></td>
												<td><b>Last Login Date & Time</b></td>
												<td><b>Send Message</b></td>
											</tr>
											<tr align="center">
												<td>1001</td>
												<td>ABC XYZ</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td><a href="#">Notify User</a></td>
											</tr>
											<tr align="center">
												<td>1001</td>
												<td>ABC XYZ</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td><a href="#">Notify User</a></td>
											</tr>
											<tr align="center">
												<td>1001</td>
												<td>ABC XYZ</td>
												<td>0123456789</td>
												<td>abc@gmail.com</td>
												<td>1/1/2017</td>
												<td><a href="#">Notify User</a></td>
											</tr>
												
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
	<script src="../../resources/js/admin/customer-info-st.js"></script>
</body>
</html>