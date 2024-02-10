<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Page</title>
		<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body style="background: #f5f5f5;">
 
 <div class="login_header">
  <div class="container">
    <div class="row">
      <div class="col-md-8"><h1>UNMIND</h1></div>
      <div class="col-md-4 p-0">
        <div class="content">

<div class="menu-content overlay">

<nav class="menu">

  <ul>
    <li class="menu__item"><a href="<?php echo base_url(); ?>home/dashboard" class="menu__link">Dashboard</a></li>
    <li class="menu__item"><a href="#" class="menu__link">Profile Settings</a></li>
    <li class="menu__item"><a href="#" class="menu__link">Notifications <sub>(0)</sub></a></li>
    <li class="menu__item to-left">
      <a href="#" class="menu__link">Club Booking History</a>
      <ul class="menu__sub-menu">
        <li class="menu__sub-menu__item"><a href="<?php echo base_url(); ?>home/bookings" class="menu__sub-menu__link">Previous Club Booking</a></li>

        <li class="menu__sub-menu__item"><a href="" class="menu__sub-menu__link">New Club Booking</a></li> 

        <li class="menu__sub-menu__item"><a href="" class="menu__sub-menu__link">Active Booking</a></li>
      </ul>

    </li>

    <li class="menu__item">
      <a href="#" class="menu__link">Photo Gallery</a>
    </li>

    <li class="menu__item">
      <a href="#" class="menu__link">Logout</a>
    </li>

  </ul>

</nav>

</div>
</div>


<div class="page-content"> 
  <div id="nav-icon" class="menu-button visible-xs">
    <span class="burger-icon"></span>
  </div>

</div>

    </div>
  </div>   
 </div>
</div>



<div class="container-fluid pl-0 pr-0 booking">
  <div class="container">
    <div class="row">
      <div class="col-md-12"><h1>Club Booking History</h1></div>

      <div class="col-md-12">
 <div class="table-responsive">          
  <table class="table"> 
          <tr>
            <th>Sl.no</th>
            <th>Date</th>
            <th>Club Name</th>
            <th width="180px">Timings</th>
            <th>Status</th>
          </tr>

          <tr>
            <td>01</td>
            <td>Feb&nbsp;02</td>
            <td>Yoga&nbsp;and&nbsp;Meditation</td>
            <td> 9:30 AM to 10:15 AM</td>
            <td><span class="active">Ative</span></td> 
          </tr>

          <tr>
            <td>02</td>
            <td>Jan&nbsp;12</td>
            <td>DanBurn</td>
            <td> 9:30 AM to 10:15 AM</td>
            <td><span class="closed">Close</span></td> 
          </tr>

          <tr>
            <td>03</td>
            <td>Feb 02</td>
            <td>Lets Knit</td>
            <td> 9:30 AM to 10:15 AM</td>
            <td><span class="active">Ative</span></td> 
          </tr>

          <tr>
            <td>04</td>
            <td>Feb 02</td>
            <td>CSD for CSR</td>
            <td> 12:45&nbsp;PM&nbsp;to&nbsp;20:15&nbsp;PM</td>
            <td><span class="active">Ative</span></td> 
          </tr>

          <tr>
            <td>05</td>
            <td>Feb 02</td>
            <td>Dance and Donate</td>
            <td> 9:30 AM to 10:15 AM</td>
            <td><span class="active">Ative</span></td>
          </tr>


        </table>
      </div>
    </div>
  </div>
</div>






 


</body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script type='text/javascript' src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
<script>
jQuery(document).ready(function($) {
  $('.menu').responsiveMenu({
    breakpoint: '992'
  });
});
</script>
</html>