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



<div class="container-fluid clubs_loop">
  <div class="container">
    <div class="row">

<?php $query=$this->db->get_where('clubs');
foreach ($query->result() as $row) {
?>

      <div class="col-md-4">
        <div class="club_main">
          <div style="width:100%; height: 170px; overflow: hidden; position: relative;">
          <div class="days"><span>Mon</span><span>Tue</span><span>Wed</span><span>Thu</span><span>Fri</span></div>
          <h2><?php echo $row->name; ?></h2>
          <img src="<?php echo base_url(); ?>assets/images/<?php echo $row->image; ?>">
          </div>
          <p><?php echo $row->descripition; ?></p>

          <div class="row">
            <div class="col-md-6 col-7 text-center">
              <div class="venue">Entry: <?php echo $row->entry; ?></div>
              <div class="venue">Venue: <?php echo $row->venue; ?></div>
              <div class="venue">Timing: <?php echo $row->timings; ?></div>
            </div>
            <div class="col-md-6 col-5 text-center">
              <div class="spots"><?php echo $row->spots; ?></div>
              <div class="register"><a data-toggle="modal" data-target="#myModal<?php echo $row->id; ?>" href="#">Register</a></div>
              <div class="deadline">Deadline: <?php echo $row->deadline; ?></div>              
            </div>
          </div>

        </div>
      </div>


<!-- Modal -->
<div id="myModal<?php echo $row->id; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header"><h4 class="modal-title"><?php echo $row->name; ?></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>        
      </div>
      <div class="modal-body">
        <img src="<?php echo base_url(); ?>assets/images/slot.jpg" class="img-fluid">
      </div> 
    </div>

  </div>
</div>




<?php } ?>
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