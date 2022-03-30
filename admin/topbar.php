<style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style>

<nav class="navbar navbar-light fixed-top " style="padding:0;background: #00000575 !important">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class=" float-left" style="display: flex;">
  			<div class="logo">
  				<span class="fa fa-laptop-medical"></span>
  			</div>
  		</div>
      <div class=" float-left text-white mt-2 ml-1">
        <large><b>Doctor's Appointment System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white mt-2">
	  		<a href="ajax.php?action=logout" class="text-white "><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>