<!DOCTYPE html>
<html lang="en">
<head>
	<title>ADMIN</title>
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
												<span class="dash">Messages(3)</span>
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
										<font size="5">
											<table width="500" border="1" cellspacing="0" cellpadding="10" align="center">
												<tr>
													<td valign="top" colspan="2" align="center"><b>STUFFS IN STOCK</b></td>
												</tr>
												<tr>
													<td valign="top">Total Stuffs</td>
													<td valign="top" align="center">10</td>
												</tr>
												<tr>
													<td valign="top" colspan="2" align="center"><b>CATEGORY</b></td>
												</tr>
												<tr>
													<td valign="top">SUV</td>
													<td valign="top" align="center">1</td>
												</tr>
												<tr>
													<td valign="top">SEDAN</td>
													<td valign="top" align="center">1</td>
												</tr>
												<tr>
													<td valign="top">CROSSOVER</td>
													<td valign="top" align="center">1</td>
												</tr>
												<tr>
													<td valign="top">PICKUP TRUCKS</td>
													<td valign="top" align="center">1</td>
												</tr>
												<tr>
													<td valign="top" colspan="2" align="center"><b>VEHICLE PARTS</b></td>
												</tr>
												<tr>
													<td valign="top">Engine</td>
													<td valign="top" align="center">1</td>
												</tr>
												<tr>
													<td valign="top">Headlight</td>
													<td valign="top" align="center">1</td>
												</tr>
											</table>
										</font>
									</td>
								</tr>
							</table>
							<table>
								<tr>
									<td height="20"></td>
								</tr>
							</table>
							<font size="3">
								<table border="1" align="center" cellspacing="0" cellpadding="7">
									<tr>
										<td colspan="9" align="center"><font size="5"><b>All Stuff Information</b></font></td>
									</tr>
									<tr>
										<td colspan="9" align="center">Filter By
											<select name="" id="">
												<option value="Select" selected="selected">Any</option>
												<option>Category</option>
												<option>Brand</option>
											</select>
											<input type="text" placeholder="Search here"/>
											<input type="submit" value="Search"/>
											<a href="addnewproduct.php">Add New Stuff</a>
										</td>
									</tr>
									<tr align="center">
										<th><b>Stuff ID</b></th>
										<th><b>Name/Model No.</b></th>
										<th><b>Category</b></th>
										<th><b>Brand</b></th>
										<th><b>Price</b></th>
										<th><b>In Stock</b></th>
										<th><b>Details</b></th>
										<th><b>Edit Information</b></th>
										<th><b>Delete Product</b></th>
									</tr>
									<tr align="center">
										<td>1010</td>
										<td>Abc-11</td>
										<td>SUV</td>
										<td>Toyota</td>
										<td>$50000</td>
										<td align="center">3</td>
										<td><a href="product_details.php">See Details</a></td>
										<td align="center"><a href="edit_product.php">Edit</a></td>
										<td align="center"><a href="deleteproduct.php">Delete</a></td>
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
<script src="app/view/resources/js/allprodinst.js"></script>
</body>
</html>