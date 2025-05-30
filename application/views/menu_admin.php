<aside class="main-sidebar">
		<section class="sidebar">
			<div class="callout bg-black">
	        <h4><i class="fa fa-fw fa-user"></i> <?php echo $_SESSION['nama'];?></h4>

			</div>
<?php if($this->session->userdata('level')==88) {?>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">

<li class="<?php echo $this->uri->segment(2) == 'input_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/input_absen';?>"><i class="fa fa-check-circle"></i> Input Absen</a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_absen';?>"><i class="fa fa-check-circle"></i> Data Absen</a></li>
<li class="<?php echo $this->uri->segment(2) == 'pengecekan' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/pengecekan';?>"><i class="fa fa-calendar-check-o"></i> Patroli</a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_cek' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_cek';?>"><i class="fa fa-calendar-check-o"></i> Data Patroli</a></li>
<li class="<?php echo $this->uri->segment(2) == 'saran' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/saran';?>"><i class="fa fa-check-circle"></i> Saran / Pengaduan</a></li>


							</ul>
<?php } ?>

<?php if($this->session->userdata('level')==77) {?>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">

<li class="<?php echo $this->uri->segment(2) == 'all_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_absen';?>"><i class="fa fa-check-circle"></i> <span>Semua Absensi</span><span class="pull-right-container"><small class="label pull-right bg-blue">Absensi</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_cekpos' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_cekpos';?>"><i class="fa fa-calendar-check-o"></i> <span>Semua Patroli</span><span class="pull-right-container"><small class="label pull-right bg-green">Patroli</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'input_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/input_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> Input Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> Data Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> <span>Semua Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>



							</ul>
<?php } ?>

<?php if($this->session->userdata('level')==66) {?>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">

<li class="<?php echo $this->uri->segment(2) == 'all_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_absen';?>"><i class="fa fa-check-circle"></i> <span>Semua Absensi</span><span class="pull-right-container"><small class="label pull-right bg-blue">Absensi</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_cekpos' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_cekpos';?>"><i class="fa fa-calendar-check-o"></i> <span>Semua Patroli</span><span class="pull-right-container"><small class="label pull-right bg-green">Patroli</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> <span>Semua Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>


							</ul>
<?php } ?>

<?php if($this->session->userdata('level')==99) {?>
			<!-- Sidebar Menu -->
			<ul class="sidebar-menu">
<li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/dashboard';?>"><i class="fa fa-dashboard"></i>Dashboard</a></li>
<li class="<?php echo $this->uri->segment(2) == 'input_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/input_absen';?>"><i class="fa fa-check-circle"></i>Input Absen</a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_absen';?>"><i class="fa fa-check-circle"></i>Data Absen</a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_absen';?>"><i class="fa fa-check-circle"></i> <span>Semua Absensi</span><span class="pull-right-container"><small class="label pull-right bg-blue">Absensi</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_detail_absen' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_detail_absen';?>"><i class="fa fa-check-circle"></i> <span>Data Log Absensi</span><span class="pull-right-container"><small class="label pull-right bg-blue">Absensi</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'pengecekan' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/pengecekan';?>"><i class="fa fa-calendar-check-o"></i> Patroli</a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_cek' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_cek';?>"><i class="fa fa-calendar-check-o"></i>Data Patroli</a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_cekpos' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_cekpos';?>"><i class="fa fa-calendar-check-o"></i> <span>Semua Patroli</span><span class="pull-right-container"><small class="label pull-right bg-green">Patroli</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_pos' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_pos';?>"><i class="fa fa-map"></i> <span>Data Lokasi Pos</span><span class="pull-right-container"><small class="label pull-right bg-green">Patroli</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'input_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/input_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> <span>Input Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> <span>Data Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'all_clientvisit' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/all_clientvisit';?>"><i class="fa fa-paper-plane-o"></i> <span>Semua Client Visit</span><span class="pull-right-container"><small class="label pull-right bg-black">KP</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'data_setting' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_setting';?>"><i class="fa fa-gears"></i> <span>Settings</span><span class="pull-right-container"><small class="label pull-right bg-red">Admin</small></span></a></li> 
<li class="<?php echo $this->uri->segment(2) == 'data_user' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/data_user';?>"><i class="fa fa-user-plus"></i> <span>Data Users</span><span class="pull-right-container"><small class="label pull-right bg-red">Admin</small></span></a></li>
<li class="<?php echo $this->uri->segment(2) == 'saran-respon' ? 'active':'';?>"><a href="<?php echo base_url().'Manage_app/saran-respon';?>"><i class="fa fa-check-circle"></i> Saran / Pengaduan Respon</a></li>
							</ul>
<?php } ?>
							
						
        </section>
	</aside>
