<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer</title>
	<link rel="icon" href="../../resources/images/logo.png">
	<script src="app/view/resources/js/jquery-3.2.1.min.js"></script>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td width="25"></td>
						<td height="160"><a href="purchased-product.php"><img src="../../resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<td align="right"><font size="7" color="white">Hello ABC</font></td>
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
									<image src="../../resources/images/logout.png" height="25" alt="icon"/>
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
									<td valign="top">
										<a href="purchased-product.php">
											<button>
												<img src="../../resources/images/dashboard.png" height="43">
												<span >Product<br>Purchased</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
									<a href="message.php">
										<button>
											<img src="../../resources/images/message.png" height="40">
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
											<img src="../../resources/images/profile.png" height="40">
											<span class="dash">Edit Profile</span>
										</button>
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
												<legend><h3>UPDATE PROFILE</h3></legend>
												<form action="regHandle.php">
													<table border="0">
														
														<tr>
															<td align="left" colspan="2">
															</td>														
														</tr>
														<tr>
															<td align="left">
																<b>Name :</b>
															</td>
															<td align="left">
																<input type="text" name="name">
															</td>
														</tr>
														
														<tr>
															<td align="left" colspan="2">
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
															<td align="left" colspan="2">
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
															<td align="left" colspan="2">
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
															<td align="left" colspan="2">
															</td>
														</tr>
														<tr>
															<td align="left" colspan="2">
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
															<td align="left" colspan="2">
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
															<td align="left" colspan="2">
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
	<script src="../../../../data/core/front-end/handler.js"></script>
	<script src="../../resources/js/customer/edit-profile-st.js"></script>
</body>
</html>