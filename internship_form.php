<!DOCTYPE html>
<html lang="en">
	<?php

		include 'core/head.php';

	?>
	<body>
		<div class="page-wrapper">
			<!-- header start-->
			<?php

				$index = 11;

				include 'core/header.php';

			?>
			<!-- header end-->
			<main class="main">
				<section class="promo-primary">
					<picture>
						<div class="img--bg" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url(img/suvidha/internship_form_header.jpg); background-position-x: 0%, 0%; background-position-y: 0%, 0%; background-repeat: repeat, repeat; background-attachment: scroll, scroll; background-size: auto, auto; background-attachment: fixed;background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
					</picture>
					<div class="promo-primary__description"> <span>Compassion</span></div>
					<div class="container">
						<div class="row">
							<div class="col-auto">
								<div class="align-container">
									<div class="align-container__item"><span class="promo-primary__pre-title">Suvidha Foundation (Suvidha Mahila Mandal)</span>
										<h1 class="promo-primary__title"><span>Become</span> <span>an Intern</span></h1>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- section start-->
				<section class="section forms-section padding-top padding-bottom">
					<div class="container">
						<div class="row margin-bottom">
							<div class="col-lg-6">
								<div class="heading heading--primary">
									<span class="heading__pre-title">Fill Form and Beacame Volonteer</span>
									<h2 class="heading__title"><span>Complete</span> <span>the Form</span></h2>
									<span class="heading__pre-title">* The following info is required</span>
								</div>
							</div>
							<div class="col-lg-6">
								<p>At Suvidha Foundation, we offer a range of free internship opportunities, both technical and non-technical, as well as social work programs. Our internship programs aim to provide valuable hands-on experience to students and individuals, allowing them to contribute to our organization's initiatives and projects.</p>
							</div>
						</div>
						<div class="row">
							<div class="col-12">
								<!-- user form start-->
								<form class="form user-form" action="api/internship_form_api.php" method="POST">
									<div class="row">
										<div class="col-lg-6">
											<input class="form__field" type="text" name="fname" placeholder="First Name *" required/>
											<input class="form__field" type="text" name="lname" placeholder="Last Name (Optional)"/>
											<input class="form__field" type="email" name="email" placeholder="E-mail *" required/>
											<input class="form__field" type="tel" name="phone" placeholder="Phone Number *" required/>
											<input class="form__field" type="tel" name="whatsapp" placeholder="WhatsApp Number *" required/>
											<input class="form__field" type="text" name="schoolName" placeholder="College/School Name *" required/>
											<input class="form__field" type="text" name="qualification" placeholder="Highest Qualification *" required/>

											<script>
												function checkCourse(elem) {
													// use one of possible conditions
													if (elem.value == 'Other') {
														document.getElementById("other-div-course").style.display = 'block';
													} else {
														document.getElementById("other-div-course").style.display = 'none';
													}
												}

												function checkDuration(elem) {
													// use one of possible conditions
													if (elem.value == 'Other') {
														document.getElementById("other-div-duration").style.display = 'block';
													} else {
														document.getElementById("other-div-duration").style.display = 'none';
													}
												}
											</script>

											<select id="mySelect" onChange="checkCourse(this);" name="course" class="form__field" aria-label=".form-select-lg example" required>
												<option selected>Select your course *</option>
												<option value="Artificial Intelligence">Artificial Intelligence</option>
												<option value="Business Development">Business Development</option>
												<option value="Campus Ambassador">Campus Ambassador</option>
												<option value="Capital Campaign">Capital Campaign</option>
												<option value="Coding Tutor">Coding Tutor</option>
												<option value="Community Outreach">Community Outreach</option>
												<option value="Content Writer">Content Writer</option>
												<option value="Data Entry">Data Entry</option>
												<option value="Data Science">Data Science</option>
												<option value="Development">Development</option>
												<option value="Digital Marketing">Digital Marketing</option>
												<option value="English Tutor">English Tutor</option>
												<option value="Event Management">Event Management</option>
												<option value="Facebook Marketing">Facebook Marketing</option>
												<option value="Fundraising Coordinator">Fundraising Coordinator</option>
												<option value="Graphic Designer">Graphic Designer</option>
												<option value="Human Resource Management">Human Resource Management</option>
												<option value="Human Resource Recruiter">Human Resource Recruiter</option>
												<option value="Instagram Marketing">Instagram Marketing</option>
												<option value="LinkedIn Marketing">LinkedIn Marketing</option>
												<option value="Machine Learning">Machine Learning</option>
												<option value="Marketing">Marketing</option>
												<option value="Mentor">Mentor</option>
												<option value="Operations">Operations</option>
												<option value="Philanthropy">Philanthropy</option>
												<option value="Public Relations">Public Relations</option>
												<option value="Social Campaigner">Social Campaigner</option>
												<option value="Social Media Marketing">Social Media Marketing</option>
												<option value="Social Worker">Social Worker</option>
												<option value="Summer Internship">Summer Internship</option>
												<option value="Trainee Business Analyst">Trainee Business Analyst</option>
												<option value="Volunteer">Volunteer</option>
												<option value="Web Development">Web Development</option>
												<option value="Web Development Tutor">Web Development Tutor</option>
												<option value="YouTube Marketing">YouTube Marketing</option>
												<option value="Other">Other Course</option>
											</select>

											<!-- <input class="form__field" type="text" name="course" placeholder="Enter Other Course *" id="other-div-course" style="display:none;"/> -->

											<select id="mySelect" onChange="checkDuration(this);" name="duration" class="form__field" aria-label=".form-select-lg example" required>
												<option selected>Duration of Internship *</option>
												<option value="1 Week">1 Week</option>
												<option value="1 Month">1 Month</option>
												<option value="2 Month">2 Months</option>
												<option value="3 Month">3 Months</option>
												<option value="6 Month">6 Months</option>
												<option value="Other">Other Duration</option>
											</select>

											<!-- <input class="form__field" type="text" name="duration" placeholder="Enter Other Duration *" id="other-div-duration" style="display:none;"/> -->

										</div>
									</div>
									<div class="row">
										<div class="col-12">
											<br>
											<button class="form__submit" type="submit" name="submit">Submit</button>
										</div>
									</div>
								</form>
								<!-- user form end-->
							</div>
						</div>
					</div>
				</section>
				<!-- section end-->
			</main>
			<!-- footer start-->
			<?php

				include 'core/footer.php';

			?>
			<!-- footer end-->
		</div>
		<!-- libs-->
		<?php

			include 'core/bottom_js.php';

		?>
	</body>
</html>
