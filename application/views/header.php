	<header class="main-header">
		<a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><?php echo $_SESSION['ID_APLIKASI'];?></b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo $_SESSION['ID_APLIKASI'];?></b></span>
    </a>
		<nav class="navbar navbar-static-top bg-black" role="navigation">
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>
          
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">	
                <li class="user user-menu"><a><?php echo date('d F Y H:i:s');?></a></li> 
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img class="user-image" src="<?php echo base_url().'assets/images/user.png';?>" alt="Admin">
							<span class="hidden-xs"><?php echo $_SESSION['username'];?></span><span class="caret"></span>
						</a>
						   <ul class="dropdown-menu" role="menu">
        <li><a href="<?php echo base_url().'logout';?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li> 
                 
						</ul>
					</li>
					
					

						</ul>
			
			</div>
		</nav>
	</header>

	<?php $this->load->view('menu_admin');?>
