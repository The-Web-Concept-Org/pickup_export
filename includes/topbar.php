<?php
include_once 'admin/includes/functions.php';
?>

<style type="text/css">
	.header-main {
		/*	margin-bottom: 90px;*/
	}
</style>
<a href="https://api.whatsapp.com/send?phone=+81 80-7235-1820&text=Hi..!." class="float" target="_blank">
	<i class="fa fa-whatsapp my-float"></i>
</a>
<a href="https://web.facebook.com/HTCjapan/" title="Get in touch on Facebook" target="_blank">
	<img id="fb_msg_icon" width="10%" height="10%" class="float2"
		src="http://store-images.s-microsoft.com/image/apps.7488.13510798886918977.69182166-f125-495d-80d2-44fdaab21523.8fcea13e-5d9a-48a9-9937-b26deeced1b5">
</a>


<style type="text/css">
	.float {
		position: fixed;
		width: 60px;
		height: 60px;
		bottom: 20px;
		right: 40px;
		background-color: #25d366;
		color: #FFF;
		border-radius: 50px;
		text-align: center;
		font-size: 30px;
		box-shadow: 2px 2px 3px #999;
		z-index: 100;
	}

	.my-float {
		margin-top: 16px;
	}

	.float2 {
		position: fixed;
		width: 60px;
		height: 60px;
		bottom: 20px;
		right: 105px;
		background-color: #25d366;
		color: #FFF;
		border-radius: 50px;
		text-align: center;
		font-size: 30px;
		box-shadow: 2px 2px 3px #999;
		z-index: 100;
	}

	.my-float {
		margin-top: 16px;
	}
</style>
<div class="header-main">
	<!-- <div class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-xl-8 col-lg-8 col-sm-4 col-7">
					<div class="top-bar-left d-flex">
						<div class="clearfix">
							<ul class="socials">
								<li>
									<a class="social-icon text-dark" href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a class="social-icon text-dark" href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a class="social-icon text-dark" href="#"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a class="social-icon text-dark" href="#"><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
						</div>
						<div class="clearfix">
							<ul class="contact border-left">
								<li class="mr-5 d-lg-none">
									<a href="#" class="callnumber text-dark"><span><i class="fa fa-phone mr-1"></i>:
											+425 345 8765</span></a>
								</li>
								<li class="select-country mr-5">
									<select class="form-control select2-flag-search" data-placeholder="Select Country">
										<option value="JP">Japan</option>
										<option value="UM">United States of America</option>
										<option value="AF">Afghanistan</option>
										<option value="AL">Albania</option>
										<option value="AD">Andorra</option>
										<option value="AG">Antigua and Barbuda</option>
										<option value="AU">Australia</option>
										<option value="AM">Armenia</option>
										<option value="AO">Angola</option>
										<option value="AR">Argentina</option>
										<option value="AT">Austria</option>
										<option value="AZ">Azerbaijan</option>
										<option value="BA">Bosnia and Herzegovina</option>
										<option value="BB">Barbados</option>
										<option value="BD">Bangladesh</option>
										<option value="BE">Belgium</option>
										<option value="BF">Burkina Faso</option>
										<option value="BG">Bulgaria</option>
										<option value="BH">Bahrain</option>
										<option value="BJ">Benin</option>
										<option value="BN">Brunei</option>
										<option value="BO">Bolivia</option>
										<option value="BT">Bhutan</option>
										<option value="BY">Belarus</option>
										<option value="CD">Congo</option>
										<option value="CA">Canada</option>
										<option value="CF">Central African Republic</option>
										<option value="CI">Cote d'Ivoire</option>
										<option value="CL">Chile</option>
										<option value="CM">Cameroon</option>
										<option value="CN">China</option>
										<option value="CO">Colombia</option>
										<option value="CU">Cuba</option>
										<option value="CV">Cabo Verde</option>
										<option value="CY">Cyprus</option>
										<option value="DJ">Djibouti</option>
										<option value="DK">Denmark</option>
										<option value="DM">Dominica</option>
										<option value="DO">Dominican Republic</option>
										<option value="EC">Ecuador</option>
										<option value="EE">Estonia</option>
										<option value="ER">Eritrea</option>
										<option value="ET">Ethiopia</option>
										<option value="FI">Finland</option>
										<option value="FJ">Fiji</option>
										<option value="FR">France</option>
										<option value="GA">Gabon</option>
										<option value="GD">Grenada</option>
										<option value="GE">Georgia</option>
										<option value="GH">Ghana</option>
										<option value="GH">Ghana</option>
										<option value="HN">Honduras</option>
										<option value="HT">Haiti</option>
										<option value="HU">Hungary</option>
										<option value="ID">Indonesia</option>
										<option value="IE">Ireland</option>
										<option value="IL">Israel</option>
										<option value="IN">India</option>
										<option value="IQ">Iraq</option>
										<option value="IR">Iran</option>
										<option value="IS">Iceland</option>
										<option value="IT">Italy</option>
										<option value="JM">Jamaica</option>
										<option value="JO">Jordan</option>
										<option value="JP">Japan</option>
										<option value="KE">Kenya</option>
										<option value="KG">Kyrgyzstan</option>
										<option value="KI">Kiribati</option>
										<option value="KW">Kuwait</option>
										<option value="KZ">Kazakhstan</option>
										<option value="LA">Laos</option>
										<option value="LB">Lebanons</option>
										<option value="LI">Liechtenstein</option>
										<option value="LR">Liberia</option>
										<option value="LS">Lesotho</option>
										<option value="LT">Lithuania</option>
										<option value="LU">Luxembourg</option>
										<option value="LV">Latvia</option>
										<option value="LY">Libya</option>
										<option value="MA">Morocco</option>
										<option value="MC">Monaco</option>
										<option value="MD">Moldova</option>
										<option value="ME">Montenegro</option>
										<option value="MG">Madagascar</option>
										<option value="MH">Marshall Islands</option>
										<option value="MK">Macedonia (FYROM)</option>
										<option value="ML">Mali</option>
										<option value="MM">Myanmar (formerly Burma)</option>
										<option value="MN">Mongolia</option>
										<option value="MR">Mauritania</option>
										<option value="MT">Malta</option>
										<option value="MV">Maldives</option>
										<option value="MW">Malawi</option>
										<option value="MX">Mexico</option>
										<option value="MZ">Mozambique</option>
										<option value="NA">Namibia</option>
										<option value="NG">Nigeria</option>
										<option value="NO">Norway</option>
										<option value="NP">Nepal</option>
										<option value="NR">Nauru</option>
										<option value="NZ">New Zealand</option>
										<option value="OM">Oman</option>
										<option value="PA">Panama</option>
										<option value="PF">Paraguay</option>
										<option value="PG">Papua New Guinea</option>
										<option value="PH">Philippines</option>
										<option value="PK">Pakistan</option>
										<option value="PL">Poland</option>
										<option value="QA">Qatar</option>
										<option value="RO">Romania</option>
										<option value="RU">Russia</option>
										<option value="RW">Rwanda</option>
										<option value="SA">SInterstate Arabia</option>
										<option value="SB">Solomon Islands</option>
										<option value="SC">Seychelles</option>
										<option value="SD">Sudan</option>
										<option value="SE">Sweden</option>
										<option value="SG">Singapore</option>
										<option value="TG">Togo</option>
										<option value="TH">Thailand</option>
										<option value="TJ">Tajikistan</option>
										<option value="TL">Timor-Leste</option>
										<option value="TM">Turkmenistan</option>
										<option value="TN">Tunisia</option>
										<option value="TO">Tonga</option>
										<option value="TR">Turkey</option>
										<option value="TT">Trinidad and Tobago</option>
										<option value="TW">Taiwan</option>
										<option value="UA">Ukraine</option>
										<option value="UG">Uganda</option>
										<option value="UY">Uruguay</option>
										<option value="UZ">Uzbekistan</option>
										<option value="VA">Vatican City (Holy See)</option>
										<option value="VE">Venezuela</option>
										<option value="VN">Vietnam</option>
										<option value="VU">Vanuatu</option>
										<option value="YE">Yemen</option>
										<option value="ZM">Zambia</option>
										<option value="ZW">Zimbabwe</option>
									</select>
								</li>
								<li class="dropdown mr-5">
									<a href="#" class="text-dark" data-toggle="dropdown"><span> Language <i
												class="fa fa-caret-down text-muted"></i></span> </a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item">
											English
										</a>
										<a class="dropdown-item" href="#">
											Arabic
										</a>
										<a class="dropdown-item" href="#">
											German
										</a>
										<a href="#" class="dropdown-item">
											Greek
										</a>
										<a href="#" class="dropdown-item">
											Vehiclenish
										</a>
									</div>
								</li>
								<li class="dropdown">
									<a href="#" class="text-dark" data-toggle="dropdown"><span>Currency <i
												class="fa fa-caret-down text-muted"></i></span></a>
									<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
										<a href="#" class="dropdown-item">
											USD
										</a>
										<a class="dropdown-item" href="#">
											EUR
										</a>
										<a class="dropdown-item" href="#">
											INR
										</a>
										<a href="#" class="dropdown-item">
											GBP
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-4 col-sm-8 col-5">
					<div class="top-bar-right">
						<ul class="custom ">

							<li>
								<a href="#" class="text-dark"><i class="fa fa-clock-o mr-1"></i> <span>Japan Time:<?php
								echo $new_time = date("D, d-m-Y h:i A", strtotime('+9 hours'))
									?></span></a>
							</li>

							<li>
								<a href="register.html" class="text-dark"><i class="fa fa-user mr-1"></i> <span>Register</span></a>
							</li>
							<li>
								<a href="login.html" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a>
							</li>
							<li class="dropdown">
								<a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-home mr-1"></i><span> My Dashboard</span></a>
								<div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
									<a href="mydash.html" class="dropdown-item" >
										<i class="dropdown-icon icon icon-user"></i> My Profile
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon icon icon-speech"></i> Inbox
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon icon icon-bell"></i> Notifications
									</a>
									<a href="mydash.html" class="dropdown-item" >
										<i class="dropdown-icon  icon icon-settings"></i> Account Settings
									</a>
									<a class="dropdown-item" href="#">
										<i class="dropdown-icon icon icon-power"></i> Log out
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- Horizontal Header -->
	<div class="horizontal-header clearfix ">
		<div class="container">
			<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
			<span class="smllogo"><img src="admin/img/logo/<?= $company_logo ?>" width="50" alt="" /></span>
			<a href="tel:<?= $company_company_phone ?>" class="callusbtn"><i class="fa fa-phone"
					aria-hidden="true"></i></a>
		</div>
	</div>
	<!-- /Horizontal Header -->

	<!-- Horizontal Main -->
	<div class="horizontal-main horizontal-main bg-dark-transparent clearfix">
		<div class="horizontal-mainwrapper container clearfix">
			<div class="desktoplogo">
				<a href="index.php"><img style="width: 100px;margin-top: -10px;"
						src="admin/img/logo/<?= $company_logo ?>" alt=""></a>
			</div>
			<div class="desktoplogo-1">
				<a href="index.php"><img style="width: 100px;margin-top: -10px;"
						src="admin/img/logo/<?= $company_logo ?>" alt=""></a>
			</div>
			<!--Nav-->
			<nav class="horizontalMenu clearfix d-md-flex">
				<ul class="horizontalMenu-list">
					<li aria-haspopup="true"><a href="index.php">Home</a></li>
					<li aria-haspopup="true"><a href="car-lists.php?type=htcjapan_stock">Vehicles <span
								class="fa fa-caret-down m-0"></span></a>
						<div class="horizontal-megamenu clearfix">
							<div class="container">
								<div class="megamenu-content">
									<div class="row">
										<ul class="col link-list">
											<li class="title">Makers</li>
											<?php $q = get($dbc, "maker WHERE maker_sts = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?advance=s&maker=<?= $r['maker_id'] ?>"><?= $r['maker_name'] ?></a>
												</li>
											<?php endwhile ?>
										</ul>
										<ul class="col link-list">

											<li class="title">Brands</li>
											<?php $q = get($dbc, "brands WHERE brand_status = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?advance=s&brands=<?= $r['brand_id'] ?>"><?= $r['brand_name'] ?></a>
												</li>
											<?php endwhile ?>

										</ul>
										<ul class="col link-list">
											<li class="title">Body Type</li>
											<?php $q = get($dbc, "body_type WHERE body_type_sts = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?advance=s&maker=null&brands=null&body_type=<?= $r['body_type_id'] ?>&stockid="><?= $r['body_type_name'] ?></a>
												</li>
											<?php endwhile ?>
										</ul>
										<ul class="col link-list">
											<li class="title">Transmission</li>
											<?php $q = get($dbc, "transmission WHERE transmission_sts = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?gs=transmission&transmission=<?= $r['transmission_name'] ?>"><?= $r['transmission_name'] ?></a>
												</li>
											<?php endwhile ?>
											<li class="title mt-4">Steering</li>
											<?php $q = get($dbc, "options WHERE option_sts = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?gs=option&option=<?= $r['option_name'] ?>"><?= $r['option_name'] ?></a>
												</li>
											<?php endwhile ?>

										</ul>
										<ul class="col link-list">
											<li class="title">Drive</li>
											<?php $q = get($dbc, "drive WHERE drive_sts = '1' LIMIT 10");
											while ($r = mysqli_fetch_assoc($q)): ?>
												<li><a
														href="car-lists.php?gs=drive&drive=<?= $r['drive_name'] ?>"><?= $r['drive_name'] ?></a>
												</li>
											<?php endwhile ?>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li aria-haspopup="true"><a href="part-list.php"> Parts</a></li>
					<li aria-haspopup="true"><a href="machines-list.php"> Machines</a></li>
					<li aria-haspopup="true"><a href="about.php">About Us</a></li>
					<li aria-haspopup="true"><a href="howto.php">How To Buy</a></li>
					<!-- <li aria-haspopup="true"><a href="#">Makers <span class="fa fa-caret-down m-0"></span></a>
								<div class="horizontal-megamenu clearfix  car-brands">
									<div class="container">
										<div class="megamenu-content overflow-hidden">
											<div class="row">
												<ul class="col-lg-12 link-list mt-3 mt-md-0 top-brands">
													<li class="title">Top Car Makers</li>
													<li class="mt-4">
														<div class="row">
															<?php $q = get($dbc, "maker WHERE maker_sts = '1' LIMIT 12");
															$random_bandage = array('badge-primary', 'badge-pink', 'badge-warning', 'badge-danger', 'badge-success', 'badge-dark');
															$arr_i = 0;
															while ($r = mysqli_fetch_assoc($q)):


																?>

															<div class="col-sm-2">
																<div class="card border-2 box-shadow2">
																	<a href="#" class="cat-img mx-auto text-center bg-transparent"><img src="admin/img/vehicles_images/<?= $r['maker_img'] ?>" class="w-80" alt=""></a>
																</div>
															</div>
														<?php endwhile; ?>
														</div>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</li> -->

					<li aria-haspopup="true" class="d-lg-none mt-5 pb-5 mt-lg-0">
						<span><a class="btn btn-orange" href="ad-posts.html"><i
									class="fa fa-contact text-white mr-1"></i> Contact us</a></span>
					</li>
				</ul>
				<ul class="mb-0">
					<li aria-haspopup="true" class="mt-5 d-none d-lg-block ">
						<span><a class="btn btn-green ad-post " href="contact-us.php"><i
									class="fa fa-contact text-white mr-1"></i> Contact us</a></span>
					</li>
				</ul>
			</nav>
			<!--Nav-->
		</div>
	</div>
	<!-- Horizontal Main -->

</div>

<body>

	<!--Loader
		<div id="global-loader">
			<img src="assets/images/loader.svg" class="loader-img " alt="">
		</div>-->



	<!--Section-->
	<div>
		<div class=" cover-image bg-background3 d-none d-sm-block" data-image-src="assets/images/banners/banner5.jpg"
			style="height: 100px!important;overflow: hidden;background-color: gray!important">
		</div>