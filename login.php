<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
		<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>


<div class="header">
  <a class="back_page" href="<?php echo base_url(); ?>"><span><img src="<?php echo base_url(); ?>assets/images/back.png" class="img-fluid"></span></a>
  <div class="container">
  <div class="row">
    <div class="col-md-12">
    <div class="login_icon"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" class="img-fluid"></div>
  <div class="heading2">
    <h2>UNMIND</h2>
    <h3>Elevate Your Employees' Mental and Productivity</h3>
  </div>
</div>
  </div>
	</div>
</div>
 

<div class="login-box">
  <h2>Login Your Account</h2>
  <form method="post" action="<?php echo base_url(); ?>home/dashboard">
    <div class="user-box">
      <input type="text" name="username">
      <label><span>Username (Email)*</span></label>
    </div>

    
    <div class="user-box">
      <input type="password" name="password">
      <label><span>Password*</span></label>
    </div>  
    <button type="submit" name="submit">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Submit
    </button> 
  </form>
</div>	

</body>
</html>