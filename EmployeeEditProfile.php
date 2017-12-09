<!DOCTYPE html>
<html lang="en">
<head>
	<title>EMPLOYEE</title>
	<link rel="icon" href="Image/logo.png">
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
						<td width="150" align="left" valign="top" bgcolor="#52be80" class="addash">
							<table border="0" bgcolor="#52be80" align="center">
								<tr><td height="10"></td></tr>
								<tr>
									<td >
										<a href="dashboard">
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
										<button>
											<img src="Image/message.png" height="40">
											<span class="dash">Messages</span>
										</button>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
										<button>
											<img src="Image/profile.png" height="40">
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
												<legend><h3>EDIT PROFILE</h3></legend>
												<form action="regHandle.php">
													<table border="0">
														<tr>
															<td colspan="3" align="center">
																<table border="0">
																	<tr>
																		<td align="center">
																			<img id="empp" src="image/defpp.png" width="200">
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
	<script src="js/emedst.js"></script>
</body>
</html>