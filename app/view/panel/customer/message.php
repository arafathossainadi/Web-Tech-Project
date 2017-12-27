<!DOCTYPE html>
<html lang="en">
<head>
	<title>Customer</title>
	<link rel="icon" href="app/view/resources/images/logo.png">
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr>
						<td height="160"><a href="index.php?controller=customer&action=purchased-product"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<td align="right"><font size="4" color="white">Hello ABC</font></td>
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
									<td valign="top">
										<a href="index.php?controller=customer&action=purchased-product">
											<button>
												<img src="app/view/resources/images/dashboard.png" height="43">
												<span>Product<br>Purchased</span>
											</button>
										</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
									<a href="index.php?controller=customer&action=message">
										<button>
											<img src="app/view/resources/images/message.png" height="40">
											<span class="dash">Messages(3)</span>
										</button>
									</a>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									
									<td >
									<a href="index.php?controller=customer&action=edit-profile">
										<button>
											<img src="app/view/resources/images/profile.png" height="40">
											<span class="dash">Edit Profile</span>
										</button>
									</td>
								</tr>
								<tr><td height="10"></td></tr>
								<tr>
									<td >
									<a href="index.php?controller=customer&action=change-password">
										<button>
											<img src="app/view/resources/images/password_icon.png" height="43">
											<span>Change<br>Password</span>
										</button>
									</td>
								</tr>
							</table>
						</td> 
						<td width="895" bgcolor="#C0C0C0" valign="top">
							<table border="0" width="860" align="center">
								<tr><td height="20"></td></tr>
								<tr>
									<td align="center">
										<table border="1" align="center" cellpadding="10">
											<tr align="center">
												<th colspan="9">MESSAGE</th>
											</tr>
											<tr align="center">
												<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente animi odit nihil temporibus odio delectus provident laborum! Quaerat ratione aliquid eum fugit deleniti repellat, possimus ad cupiditate aliquam, aspernatur sit!</td>
											</tr>
											<tr align="center">
												<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente animi odit nihil temporibus odio delectus provident laborum! Quaerat ratione aliquid eum fugit deleniti repellat, possimus ad cupiditate aliquam, aspernatur sit!</td>
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
