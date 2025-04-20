<?php     
include('include\header.php');
?>

	<div class="container">
		<h2 class="form-heading p-4" style="text-align:center; color: orangered;">Get Your Free Darktrace Demo</h2>
		<hr>
		<div class="row border bg-dark p-5 ">
			<form action="controllor/controllor.php" method="post" enctype="multipart/form-data">
					<div class="col-md-6 offset-3">
						<div class="form-group mt-3">
							<label>FIRST NAME</label>
							<input type="text" class="form-control" name="fname" placeholder="Enter First Name" required id="fname">
							<p id="fname_error" class="error"></p>
						</div>
						<div class="col-md-6 w-100">
							<div class="form-group mt-3 ">
								<label>LAST NAME</label>
								<input type="text" class="form-control" name="lname" placeholder="Enter Last Name" required id="lname" >
								<p id="lname_error" class="error"></p>
							</div>
							<div class="col-md-6 w-100">
								<div class="form-group mt-3">
									<label>CONTACT</label>
									<input type="number" class="form-control " name="contact" placeholder="+91 0000 0000 00" required id="contact">
									<p id="contact_error" class="error"></p>
								</div>
								<div class="col-md-6 w-100">
									<div class="form-group  mt-3">
										<label>EMAIL</label>
										<input type="text" class="form-control" name="email" placeholder="Enter Email" required id="email">
										<p id="email_error" class="error"></p>
									</div>
										<div class="col-md-6 w-100">
											<div class="form-group mt-3">
												<label>ADDRESS</label>
												<input type="text" class="form-control" name="address" placeholder="Enter Address" required id="address">
												<p id="address_error" class="error"></p>
											</div>
											<div class="col-md-6 w-100">
												<div class="form-group mt-3">
													<label>PIN CODE</label>
													<input type="number" class="form-control" name="pin_code" placeholder="Enter PIN CODE" required  id="pin_code">
													<p id="pin_code_error" class="error"></p>
												</div>
												<div class="form-group mt-5">
													<button type="submit" name="signup" class="btn btn-success w-100" style="background-color:#fb8b23;" >Start Your Free Trial</button>
												</div>
											</div></div></div></div></div></div></div>
									</form>
								</div>
							</div><hr>
						</body>
						</html>
<?php 
include('include/footer.php');
?>