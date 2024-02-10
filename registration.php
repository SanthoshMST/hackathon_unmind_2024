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

<?php 

   if(isset($_POST['submit']))   {
     $date=date("Y-d-m H:i:s");
     extract($_POST);
    
       $data = array(
         'crdate'=>$date,
         'name'=>$name, 
         'company'=>$company,
         'username'=>$username,  
         'password'=>$password
       );
       $res=$this->db->insert('registration', $data);

      if($res) {

         echo '
         <script>Swal.fire({
  title: "Good job!",
  text: "Your Account Successfully Created",
  icon: "success"
});</script>
         ';
       }
     }


?>

<div class="login-box">
  <h2>Create Your Account</h2>
  <form method="post">
    <div class="user-box">
      <input type="text" name="name" required="">
      <label><span>Full Name*</span></label>
    </div>

    <div class="user-box">
      <select  name="company" required="">
        <option></option>
        <option value="Mergen IT">Mergen IT</option>
        <option value="Mergen Corp">Mergen Corp</option>        
        <option value="Kairos">Kairos</option>
        <option value="Solunus">Solunus</option>
        <option value="Orabase">Orabase</option>
      </select> 
      <label><span>Select Your Company*</span></label>
    </div>

    <div class="user-box">
      <input type="text" name="username" required="">
      <label><span>E-mail ID*</span></label>
    </div>
    <div class="user-box">
      <input type="password" name="password" required="">
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