<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="BAKTI ALTER PURBA">
    <meta name="author" content="BAKTI ALTER PURBA">

    <title><?php echo $namaapp[0]['VALUE'];?></title>
    <link rel="icon" href="<?php echo base_url(); ?>assets/images/favlogo.png" type="image/png">
  
    <link href="<?php echo base_url().'assets/admin/css/bootstrap.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/admin/css/font-awesome.min.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/admin/css/Adminlte_new3.css';?>" rel="stylesheet">
    <link href="<?php echo base_url().'assets/plugins/toastr/toastr.min.css';?>" rel="stylesheet">

<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(e)
{
  if(event.button==2)
   {
     alert(status);
     return false;	
   }
}

</script>
</head>

<body class="bg-white" oncontextmenu="return false">
	 <div class="form-box" id="login-box">    

            <div class="header bg-black"><center><img width="55%" src="<?php echo base_url().'assets/images/logo.png';?>"> </center>
            <p><strong> <?php echo $namaapp[0]['VALUE'];?> </strong></p>
            </div>
          <form role="form" onsubmit="return validateForm()" action="<?php echo base_url('authentication'); ?>" method="post" name="login">
                <div class="body bg-gray">
                     <fieldset>
                                <div class="form-group input-group has-danger">
                                            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                                <input type="text" class="form-control" required placeholder="Username" name="username">
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                                </div>
                                  <div class="form-group input-group has-danger">
                                            <span class="input-group-addon"><i class="fa fa-lock fa-fw"></i></span>
                                <input type="password" class="form-control" required placeholder="Password" name="password">
                                </div>
                               

                                <!-- Change this to a button or input when using this as a form -->
			
                                
                            </fieldset> 
                </div>
                <div class="footer">                                                               
                   <input name="login" type="submit" class="btn bg-yellow btn-block" value="MASUK" >        

                </div>
 
            </form>
 

 </div>        
        
 <center> 
<h5 align="center"><small>Copyright &copy; <?php echo date('Y');?> <?php echo $idapp[0]['VALUE'];?></small></h5>
 </center>          	
	   
    </div>
    <!-- Mainly scripts -->
    <script src="<?php echo base_url().'assets/plugins/jQuery/jQuery-2.1.4.min.js';?>"></script>
    <script src="<?php echo base_url().'assets/admin/js/bootstrap.min.js';?>"></script>


<?php $this->load->view("bottom/include_toastr");?>
</body>

</html>
