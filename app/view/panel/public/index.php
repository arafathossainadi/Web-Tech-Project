<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBO MOTORS</title>
	<link rel="icon" href="app/view/resources/images/logo.png">
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr id="schct">
						<td width="25"></td>
						<td height="160"><a href="index.php"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<form method="post">
							<td align="right"><input type="text" placeholder="   Search Here" name="search" value="<?= $searchKey ?>" size="60" valign="center"/></td>
							<td width="7"></td>
							<td width="50">
									<button type="submit" valign="center" align="left">
										<font size="4">Search</font>
									</button>
							</td>
						</form>
						<td width="10"></td>
						<td><a href="#" ><img src="app/view/resources/images/cart.png" height="40" alt="cart_icon"></a></td>
					</tr>
					<tr><td height="10"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#d1f2eb">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="5"></td></tr>
					<tr>
						<td align="right" id="top-menu">
							<a  href="index.php?controller=public&action=index"><font size="5"><b>HOME</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=about" ><font size="5"><b>ABOUT</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=contact" ><font size="5"><b>CONTACT</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=login" ><font size="5"><b>LOGIN</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=registration" ><font size="5"><b>SIGN UP</b></font></a>
						</td>
					</tr>
					<tr><td height="5"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#D2D2D2">
			<td >
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr>
						<td>
							<img src="app/view/resources/images/banner.png" width="100%">
						</td>
					</tr>
				</table>
				<table align="center">
					<tr>
						<td><img src="app/view/resources/images/banner2.jpg" width="100%"></td>
						<td><img src="app/view/resources/images/banner3.jpg" width="100%"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#C0C0C0">
			<td >
				<table width="1170" align="center" border="0" cellspacing="0" id="exclusive-filed">
					<tr><td height="50"></td></tr>
					<tr>
						<td bgcolor="#C0C0C0" align="center">
							<fieldset>
								<legend>EXCLUSIVE</legend>
								<table border="0" id="exclusive-item">
									<tr><td height="20"></td></tr>
									<tr>
									<?php 
									
									$count=0;
									 foreach($products as $product) {	
									echo '
									<td align="left">
												<table border="0" cellspacing="0">
													<tr>
														<td bgcolor="#EEEDEB">
															<div class="container">
															  <img src="app/view/resources/images/'.$products[$count]['Image'].'" border="0" height="140" width="60" alt="Avatar" class="image">
															  <a href="app/view/panel/public/product-details.php" target="_blank">
															  	<div class="middle">
															  	  <div class="text">VIEW NOW</div>
															  	</div>
															  </a>
															</div>
														</td>
													</tr>
													<tr>
														<td align="left" bgcolor="#212121">
														<p>'.$products[$count]['ModelNo'].'<br/>'.$products[$count]['Brand'].'<br/>'.$products[$count]['Price'].'</p>
															<a href="app/view/panel/public/product-details.php"><button class="smbtn">VIEW<br>NOW</button></a>
														</td>
													</tr>
												</table>
											</td>
											
											<td width="20"></td>';
											$count++;
											if($count%4==0){
												echo '</tr><tr><tr><td height="20"></td></tr>';
											}
											if ($count==8) {
												break;
											}
										}
									
									echo '</tr>';
									?>
									<tr><td height="20"></td></tr>
								</table>
							</fieldset>
						</td>
					</tr>
					<tr><td height="50"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#C0C0C0">
			<td >
				<table width="1170" align="center" border="0" cellspacing="0" id="exclusive-filed">
					<tr>
						<td bgcolor="#C0C0C0" align="center">
							<fieldset>
								<legend>BRANDS</legend>
								<table border="0" id="exclusive-item" width="100%">
									<tr><td height="20"></td></tr>
									<tr>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"   width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=toyota"><img src="app/view/resources/images/b1.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
													<tr>
														<td align="center"  width="100%" height="" class="brands-item">
															<a href="index.php?controller=public&action=search&tmp=nissan"><img src="app/view/resources/images/b2.png" alt=""></a>
														</td>
													</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
													<tr>
														<td align="center"  width="100%" height="" class="brands-item">
															<a href="index.php?controller=public&action=search&tmp=ford"><img src="app/view/resources/images/b3.png" alt=""></a>
														</td>
													</tr>
											</table>
										</td>
										<td width="20"></td>
									</tr>
									<tr><td height="20"></td></tr>
									<tr>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=audi"><img src="app/view/resources/images/b4.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=bmw"><img src="app/view/resources/images/b5.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=mercedes"><img src="app/view/resources/images/b6.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td height="20"></td></tr>
									<tr>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=porsche"><img src="app/view/resources/images/b7.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=lamborghini"><img src="app/view/resources/images/b8.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
										<td width="20"></td>
										<td align="center">
											<table border="0" cellspacing="0">
												<tr>
													<td align="center"  width="100%" height="" class="brands-item">
														<a href="index.php?controller=public&action=search&tmp=ferrari"><img src="app/view/resources/images/b9.png" alt=""></a>
													</td>
												</tr>
											</table>
										</td>
									</tr>
									<tr><td height="20"></td></tr>
								</table>
							</fieldset>
						</td>
					</tr>
					<tr><td height="50"></td></tr>
				</table>
			</td>
		</tr>
		<tr bgcolor="#424949">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="20"></td></tr>
					<tr>
						<td width="20"></td>
						<td align="left" valign="top">
								<font color="#f7f9f9" size="5"><b><u>Contact Us</u></b></font><br/>
								<table>
									<tr>
										<td height="5`"></td>
									</tr>
								</table>
								<font color="#f7f9f9" size="4">Webomotorsbd.com<br/>
								Dhaka,Bangladesh.<br/>
								Email:&nbsp;webomotor@gmail.com<br/>
								Phone:&nbsp;01234-123456<br/>
						</td>
						<td width="70"></td>
						<td align="left" valign="top" width="400">
							<font color="#f7f9f9" size="5"><b><u>Give Us Feedback</u></b></font>
							<table>
								<tr>
									<td height="5"></td>
								</tr>
							</table>
							<table border="0" id="feedback">
								<form >
									<tr>
										<td><font size="5" color="#f7f9f9">Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><input type="text"  size="30" placeholder="  Your name"/></td>
									</tr>
									<tr><td height="10"></td></tr>
									<tr>
										<td><font size="5" color="#f7f9f9">Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td><input type="text"  size="30" placeholder="  Your email"/></td>
									</tr>
									<tr><td height="10"></td></tr>
									<tr>
										<td valign="top"><font size="5" color="#f7f9f9">Message&nbsp;&nbsp;</td>
										<td><textarea name="" id="" cols="35" rows="10"  placeholder="  Your Message"></textarea></td>
									</tr>
									<tr>
										<td><font size="5" color="#f7f9f9"></td>
										<td><input type="submit" class="smbtn" value="Send Message"></td>
									</tr>
								</form>
							</table>
						</td>
						<td width="50`"></td>
						<td align="left" valign="top">
							<font size="5" color="white"><b><u>Join Us On</u></b></font><br/><br/>
							<a href="http://www.linkedin.com"><img src="app/view/resources/images/lin.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="http://www.gmail.com"><img src="app/view/resources/images/g+.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="http://www.facebook.com"><img src="app/view/resources/images/fb.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="http://www.twitter.com"><img src="app/view/resources/images/twitt.png"  height="50" valign="top"></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<a href="http://www.instagram.com"><img src="app/view/resources/images/insta.png"  height="50" valign="top"><br/><br/></a>
							<font size="5" color="white"><b><u>Payement Method</u></b></font><br/><br/>
							<img src="app/view/resources/images/payoneer.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="app/view/resources/images/payza.jpg"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<img src="app/view/resources/images/paypal.png"  height="35" valign="top">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
					</tr>
					<tr><td height="20"></td></tr>
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
<script type="text/javascript" src="app/view/resources/js/public/index-st.js"></script>
</body>
</html>
