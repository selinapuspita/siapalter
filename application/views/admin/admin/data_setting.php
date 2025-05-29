<div class="content-wrapper">
	<section class="content">

<div class="row"> 


<div class="col-md-6">
 <div class="box box-primary">
<div class="box-body">
    <center><img width="50" src="<?php echo base_url().'assets/images/logo.png';?>"></center>
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/upload_logo';?>">
              <div class="input-group input-group-sm">
                <input type="file" class="form-control" name="inputfile">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <span class="input-group-btn">
                      <input type="submit" name="uploadlogo" class="btn btn-info btn-flat" value="Upload Logo">
                    </span>
              </div>
              <!-- /input-group -->
 </form>
 </div> </div> </div>
<div class="col-md-6">
 <div class="box box-primary">
<div class="box-body">
    <center><img width="50" src="<?php echo base_url().'assets/images/favlogo.png';?>"></center>
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/upload_fav';?>">
              <div class="input-group input-group-sm">
                <input type="file" class="form-control" name="inputfile">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <span class="input-group-btn">
                <input type="submit" name="uploadfav" class="btn btn-info btn-flat" value="Upload Fav">
                    </span>
              </div>
              <!-- /input-group -->
 </form>
 </div></div> </div>


<?php if (ISSET($_GET['edit'])){?>
<div class="col-lg-4">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Edit Setting</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_setting';?>">

                                <div class="form-group">
                  <label for="namalengkap">Tag <span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" required name="tag" value="<?php echo $editdosen[0]['TAG'];?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $editdosen[0]['ID'];?>">
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Value <span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="value" value="<?php echo $editdosen[0]['VALUE'];?>">
              </div></div>
                     
        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="editset" value="EDIT SETTING">
              </div>
 </form>	                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>
<?php } else {?>

<div class="col-lg-4">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Tambah Setting</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_setting';?>">
                <div class="form-group">
                  <label for="namalengkap">Tag <span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" required name="tag" >
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Value <span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="value">
              </div></div>

        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="submitset" value="TAMBAH SETTING">
              </div>
 </form>	                

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>

<?php } ?>
    
<div class="col-lg-8">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Settings</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                <thead>
                <tr>
                  <th>Tag</th>
                  <th>Value</th>
                  <th><i class="fa fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
            <?php $i = 0;	while ( $i < sizeof($admin)) { ?>                    
                <tr>
                  <td><?php echo $admin[$i]['TAG'];?></td>
                  <td><?php echo $admin[$i]['VALUE'];?></td>
                  <td><a href="<?php echo base_url().'Manage_app/data_setting?edit='.$admin[$i]['ID'];?>" class="label label-primary"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url().'Manage_app/delete/setting/'.$admin[$i]['ID'];?>" onclick="return confirm('Apakah Kamu Yakin akan didelete ?')" class="label label-danger"><i class="fa fa-times-circle"></i></a></td>                  
                </tr>
            <?php $i++; } ?>                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->   
    </div>

</div>

</section>
</div>	

