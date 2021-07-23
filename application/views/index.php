<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
   <!-- Links -->
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.83.1">
		<title>Kcom Tool Man</title>
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url();?>public/css/bootstrap-select.min.css">
    <meta charset="utf-8">
  </head>
	<body>
				<main class="form-signin">
						  <form method="post" action=<?php echo site_url('Welcome/verify')?>>
							<img class="mb-4" src="<?php echo base_url();?>public/images/logo.png" alt="" width="300" height="75">
							<h1 class="h3 mb-3 fw-normal">Tool Managment System</h1>
              <?php echo $this->session->flashdata('message')?>
							<div class="form-floating">
								<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" required>
								<label for="floatingInput">Email address</label>
							</div>
							<div class="form-floating">
								<input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
								<label for="floatingPassword">Password</label>
							</div>
							<button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
						</form>
					</main>
	</body>
  <script src="<?php echo base_url("public/js/jquery-3.3.1.slim.min.js");?>"></script>
  <script src="<?php echo base_url("public/js/main.js");?>"></script>
  <script src="<?php echo base_url("public/js/popper.min.js")?>"></script>
  <script src="<?php echo base_url("public/js/bootstrap.min.js")?>"></script>
  <script src="<?php echo base_url("public/js/bootstrap-select.min.js")?>"></script>
</html>
