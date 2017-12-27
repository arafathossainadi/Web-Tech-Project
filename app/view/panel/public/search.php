<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>WEBO MOTORS</title>
	<link rel="icon" href="app/view/resources/images/logo.png">
	<script type="text/javascript">
	var x=0;
	function a(){
		x=x+1;
		document.getElementById("ptag").innerHTML=x;
		alert("Item Successfully added to your cart");
	}
	
	</script>
</head>
<body>
	<table width="100%" border="0" cellspacing="0" align="center">
		<tr bgcolor="#212121">
			<td>
				<table width="1170" align="center" border="0" cellspacing="0">
					<tr><td height="10"></td></tr>
					<tr id="schct">
						<td width="25"></td>
						<td height="160"><a href="index.php?controller=public&action=index"><img src="app/view/resources/images/mainlogo.gif" alt="Webo Motors" width="150" align="left"><a></td>
						<td align="right"><input type="text" placeholder="   Search Here" name="search_bar" size="60" valign="center"/></td>
						<td width="7"></td>
						<td width="50">
							<a href="#"><button valign="center" align="left">
									<font size="4">Search</font>
								</button>
							</a>
						</td>
						<td width="10"></td>
						<td><a href="#" ><img src="app/view/resources/images/cart.png" height="40" alt="cart_icon"></a><a id="ptag" style="color:white">0</a></td>
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
						<td align="left"><font size="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;search results for "<?=($_GET['tmp'])?>"</font></td>
						<td align="right" id="top-menu">
							<a  href="index.php?controller=public&action=index"><font size="5"><b>HOME</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=about" ><font size="5"><b>ABOUT</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=contact" ><font size="5"><b>CONTACT</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="index.php?controller=public&action=login"><font size="5"><b>LOGIN</b></font></a>
							<font>&nbsp;&nbsp;</font>
							<a href="registration.php" ><font size="5"><b>SIGNUP</b></font></a>
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
							<table>
								<tr>
									<td height="20"></td>
								</tr>
							</table>
						</td>
					</tr>
					<tr>
						<td colspan="2" bgcolor="#E8E7E5" align="center" class="sort">
							<p>sort by</p>
							<select name="" id="">
								<option value="Alphabetically">alphabetically</option>
								<option value="newest first">newest first</option>
								<option value="oldest first">oldest first</option>
								<option value="price low to high">price low to high</option>
								<option value="price high to low">price high to low</option>
							</select>
						</td>
					</tr>
					<tr>
						<td width="240" valign="top" bgcolor="#212121">
							<table>
								<tr>
									<td height="20"></td>
								</tr>
							</table>
							<table cellspacing="0" bgcolor="red" border="0" align="center" cellpadding="10" class="filter">
								<tr>
									<td bgcolor="#E41E26">
										<div class="filterby">Filter By</div>
									</td>
								</tr>
								<tr>
									<td bgcolor="#D2D2D2" >
										<fieldset>
											<legend >CATEGORY</legend>
											<input type="checkbox" value="SUV">SUV
											<br>
											<input type="checkbox" value="SEDAN">SEDAN
											<br>
											<input type="checkbox" value="CROSSOVER">CROSSOVER
											<br>
											<input type="checkbox" value="PICKUP TRUCKS">PICKUP TRUCKS
											<br>
											<input type="checkbox" value="VEHICLE PARTS">VEHICLE PARTS
										</fieldset>
									</td>
								</tr>
								<tr>
									<td bgcolor="#D2D2D2" >
										<fieldset>
											<legend>BRAND</legend>
											<input type="checkbox" value="TOYOTA">TOYOTA
											<br>
											<input type="checkbox" value="NISSAN">NISSAN
											<br>
											<input type="checkbox" value="FORD">FORD
											<br>
											<input type="checkbox" value="AUDI">AUDI
											<br>
											<input type="checkbox" value="BMW">BMW
											<br>
											<input type="checkbox" value="MERCEDES">MERCEDES
											<br>
											<input type="checkbox" value="PORSCHE">PORSCHE
											<br>
											<input type="checkbox" value="LAMBORGHINI">LAMBORGHINI
											<br>
											<input type="checkbox" value="FERRARI">FERRARI
										</fieldset>
									</td>
								</tr>
								<tr>
									<td bgcolor="#D2D2D2" >
										<fieldset>
											<legend>COLOR</legend>
											<input type="checkbox" value="RED">RED
											<br>
											<input type="checkbox" value="BLUE">BLUE
											<br>
											<input type="checkbox" value="WHITE">WHITE
											<br>
											<input type="checkbox" value="BLACK">BLACK
											<br>
										</fieldset>
									</td>
								</tr>
								<tr>
									<td align="center" bgcolor="#D2D2D2">
										<button class="smbtn">PROCEED</button>
									</td>
								</tr>
							</table>
						</td>
						<td bgcolor="#C0C0C0">
						<form method="post">
							<table border="0" align="center" cellspacing="0">
								<tr>
									<td height="20" colspan="5"></td>
								</tr>
								<tr>
									<?php
										$count = 0;
										foreach ($_SESSION['sp'] as $shprod) {
											echo '
											<td align="center">
												<div class="container">
												  
												  <img src="app/view/resources/images/'.$shprod['Image'].'" border="0" height="140" width="200" alt="Avatar" class="image">
												  <a href="publicproductdetails.php" target="_blank">
												  	<div class="middle">
												  	  <div class="text">See Details</div>
												  	</div>
												  </a>
												</div>
												<p>&nbsp;&nbsp;&nbsp;&nbsp;'.$shprod['Brand'].'&nbsp;&nbsp;'.$shprod['ModelNo'].'<br/>&nbsp;&nbsp;&nbsp;&nbsp;'.$shprod['Price'].'
												<br/><br>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" onclick="a();" id="atc">Add to Cart</button></p>
											</td>
											<td width="20"></td>';
											$count++;
											if($count%3==0){
												echo '</tr>';
											}
										}
										
									 ?>
							</table>
							</form>
						</td>
					</tr>
					<tr>
						<td>
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
								<form action="publicopininon">
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
<script>
	var newStyle = document.createElement('style');
	newStyle.appendChild(document.createTextNode("\
	@font-face {\
		font-family:lr;\
		src:url(app/view/resources/fonts/Lato-Regular.ttf);\
	}\
	*{\
		font-family: lr;\
		text-decoration: none;\
	}\
	#top-menu > a{\
		position: relative;\
		text-decoration: none;\
		color:#212121;\
		-webkit-transition: color 0.2s ease-in-out 0s;\
	        	transition: color 0.2s ease-in-out 0s;\
	}\
	#top-menu > a:hover{\
		color: #E41E26;\
	}\
	#top-menu > a::before{\
		content: '';\
		position: absolute;\
		width: 100%;\
		height: 2px;\
		bottom: -5px;\
		left: 0;\
		background-color: #E41E26;\
		visibility: hidden;\
		-webkit-transform: scaleX(0);\
		transform: scaleX(0);\
		-webkit-transition: all 0.2s ease-in-out 0s;\
		transition: all 0.2s ease-in-out 0s;\
	}\
	#top-menu > a:hover::before{\
		visibility: visible;\
		  -webkit-transform: scaleX(0.9);\
		  transform: scaleX(0.9);\
	}\
	#schct input{\
		height: 25px;\
	}\
	#schct input::placeholder{\
		color:#E41E26;\
	}\
	#schct button{\
		height: 31px;\
		border: none;\
		border-radius: 3px;\
		width: 85px;\
		background-color: #E41E26;\
		color: #D2D2D2;\
		transition: all  0.2s ease-in-out 0s;\
	}\
	#schct button:hover{\
		background-color: #D2D2D2;\
		color: #E41E26;\
		cursor: pointer;\
	}\
	.container {\
	    position: relative;\
	    width100%;\
	}\
	\
	.image {\
	  opacity: 1;\
	  display: block;\
	  height: 180px;\
	  transition: .5s ease;\
	  backface-visibility: hidden;\
	}\
	\
	.middle {\
	  transition: .5s ease;\
	  opacity: 0;\
	  position: absolute;\
	  top: 50%;\
	  left: 50%;\
	  transform: translate(-50%, -50%);\
	  -ms-transform: translate(-50%, -50%)\
	}\
	\
	.container:hover .image {\
	  opacity: 0.3;\
	}\
	\
	.container:hover .middle {\
	  opacity: 1;\
	}\
	\
	.text {\
	  background-color: #D2D2D2;\
	  color: #E41E26;\
	  border-radius: 5px;\
	  width:87px;\
	  font-size: 16px;\
	  padding: 10px 15px;\
	  transition: all  0.2s ease-in-out 0s;\
	}\
	.text a{\
		color: #E41E26;\
		text-decoration: none;\
		transition: all  0.2s ease-in-out 0s;\
	}\
	.text:hover {\
	  background-color: #E41E26;\
	  color: #D2D2D2;\
	}\
	 .text:hover a {\
	  color: #D2D2D2;\
	}\
	#atc{\
		height: 31px;\
		border: none;\
		border-radius: 3px;\
		width: 85px;\
		background-color: #E41E26;\
		color: #D2D2D2;\
		transition: all  0.2s ease-in-out 0s;\
	}\
	#atc:hover{\
		box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.6);\
		cursor: pointer;\
	}\
	#feedback input{\
		height: 25px;\
		margin-top: 5px;\
	}\
	#feedback textarea{\
		resize: none;\
		width: 217px;\
		margin-top: 7px;\
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
	#exclusive-field{\
		padding: 20px 0px;\
	}\
	#exclusive-item p{\
		display: inline-block;\
		color: #D2D2D2;\
		padding-left: 15px;\
	}\
	#exclusive-item button{\
		padding: 0 !important;\
		width: 70px;\
		height: 40px !important;\
		margin: 15px;\
		float: right;\
		color: #D2D2D2;\
		padding-left: 15px;\
	}\
	#exclusive-item button:hover{\
		background-color: #D2D2D2;\
		color: #E41E26;\
		cursor: pointer;\
	}\
	.brands-item img{\
		transition: all  0.2s ease-in-out 0s;\
	}\
	.brands-item img:hover{\
		box-shadow: 0 10px 15px -5px rgba(0, 0, 0, 0.5);\
		-webkit-transform: scale(1.1);\
		transform: scale(1.1);\
	}\
	.sort p{\
		display: inline-block;\
		font-size: 28px;\
		padding: 0px;\
		margin: 10px 0;\
	}\
	.sort select{\
		font-size: 24px;\
		margin-left: 5px;\
	}\
	.filterby{\
		font-size: 24px;\
		color: #D2D2D2;\
		margin-left: 5px;\
	}\
	.filter legend{\
		text-align: center;\
		margin-bottom: 10px;\
	}\
	.filter input{\
		vertical-align: center;\
		margin-bottom: 10px;\
	}\
	.filter button{\
		margin-bottom: 10px;\
		width: 80px;\
	}\
	"));
	document.head.appendChild(newStyle);
</script>
</body>
</html>
