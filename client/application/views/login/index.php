<?=
form_open('login/proses_login');
?>
	<div class="container py-5">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-6 mx-auto">
					<!-- form card login -->
					<div class="card rounded-0">
						<div class="card-header">
		 					<span class="login100-form-title p-b-51">
								Login
							</span>
						</div>
						<div class="card-body">
							<form class="form" role="from" autocomplate="off" id="formLogin" novalidate="" method="POST">
								<div class="form-group">
									<label> Username </label>
									<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
									<input class="input100" type="text" name="uname1" placeholder="Username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
									<span class="focus-input100"></span>
								</div>
								</div>
								<div class="form-group">
									<label> Password </label>
									<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
									<input class="input100" type="text" name="pwd1" placeholder="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'E-mail address';}">
									<span class="focus-input100"></span>
								</div>
								<div class="flex-sb-m w-full p-t-3 p-b-24">
									<div class="contact100-form-checkbox">
										<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
										<label class="label-checkbox100" for="ckb1">
											Remember me
										</label>
									</div>

									<div>
										<a href="#" class="txt1">
											Forgot?
										</a>
									</div>
								</div>
								<div class="container-login100-form-btn m-t-17">
									<button class="login100-form-btn">
										Login
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?=
form_close();
?>