<!DOCTYPE html>
<html lang="en" class="ng-scope">
<head>
		<meta charset="utf-8">
		<meta name="robots" content="noindex">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="<?php echo isset($meta['description']) ? $meta['description']:'Sistem Absensi';?>">
		<meta name="keywords" content="<?php echo isset($meta['keywords']) ? $meta['keywords']: 'Sistem Absensi ';?>">
		<meta name="author" content="AAN">
		
	<title><?php echo $_SESSION['NAMA_APLIKASI'];?></title>
	<link rel="icon" type="image/png" href="<?php echo base_url().'assets/images/favlogo.png';?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400italic,700,700italic,300italic,300' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/bootstrap.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/font-awesome.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/ionicons.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/skins/skin-red.min.css';?>">
    <link rel="stylesheet" href="<?php echo base_url().'assets/admin/css/AdminLTE.min.css';?>">
    <link href="<?php echo base_url().'assets/plugins/toastr/toastr.min.css';?>" rel="stylesheet">
                <link href="<?php echo base_url().'assets/plugins/select2/select2.min.css';?>" rel="stylesheet">
                        <link href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css';?>" rel="stylesheet">
                        		<link href="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.css';?>" rel="stylesheet">
		<link href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css';?>" rel="stylesheet">
                <link href="<?php echo base_url().'assets/plugins/datatables/dataTables.responsive.css';?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker-bs3.css';?>" rel="stylesheet"> 
    <script src="<?php echo base_url().'assets/plugins/jQuery/jQuery-2.1.4.min.js';?>"></script>
  
    <style>
    	body{font-family:"Droid Serif"; font-size:14px;}
    	.sidebar-menu{ font-size:13px; }
    	h1, h2, h3, h4, h5, h6{font-family:"Droid Serif";}
    	h5{ font-weight:bold; }
    </style> 
 
</head>

<body class="hold-transition skin-red">
	<div class="wrapper">
		<?php $this->load->view("header");?>
		<?php $this->load->view("admin/$page");?>
		<?php $this->load->view("footer");?>
</div>
	
    <!-- Mainly scripts -->

    <script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.min.js';?>"></script>	
    <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/app.min.js';?>"></script>
   <script type="text/javascript" src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js';?>"></script>        
    <script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepickers.js';?>"></script>
    <script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/plugins/datatables/dataTables.responsive.js';?>"></script>   
    <script src="<?php echo base_url().'assets/plugins/daterangepicker/moment.min.js';?>"></script>   
    <script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepickern.js';?>"></script>


    
<script type="text/javascript">	
 $(document).ready(function() {

    //Initialize Select2 Elements
    $(".select2").select2();

}); 
    $(document).ready(function() {
        $('#dataTables1,#dataTables2').DataTable({
          responsive: true,
          "order": [[ 0, "desc" ]],
          "bLengthChange": false,
          "bInfo": false,               
          "pageLength": 10, 
             
        });
  
    });
$('#tanggalcari,#tanggalcari1').daterangepicker();
$('.datepicker,#datepicker').datepicker({
     autoclose: true
});
   
	</script>

<?php $this->load->view("bottom/include_toastr");?>
</body>
</html>