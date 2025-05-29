<div class="content-wrapper">
	<section class="content">

<div class="row">  

<?php if (ISSET($_GET['edit'])){?>
<div class="col-lg-4">
 <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_user';?>">
                <div class="form-group">
                  <label for="namalengkap">Nama <span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" required name="nama" value="<?php echo $editdosen[0]['NAMA'];?>">
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Username <span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="username" value="<?php echo $editdosen[0]['USERNAME'];?>">
                <input type="hidden" class="form-control" name="id" value="<?php echo $editdosen[0]['ID'];?>">
              </div></div>

     <div class="form-group">
                  <label for="nodinbalasan">Password <span>* <small>Kosongkan Jika Tidak Berubah</small></span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>	  
             <input type="password" class="form-control" name="password">
                </div></div>
   
     <div class="form-group">
                  <label for="nodinbalasan">NIK <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>	  
             <input type="text" required class="form-control" name="nik" value="<?php echo $editdosen[0]['NIK'];?>">
                </div></div>
     <div class="form-group">
                  <label for="nodinbalasan">No HP <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tablet"></i></span>	  
             <input type="text" required class="form-control" name="nohp" value="<?php echo $editdosen[0]['NO_HP'];?>">
                </div></div>    
     <div class="form-group">
                  <label for="nodinbalasan">Jabatan <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>	  
             <input type="text" required class="form-control" name="jabatan" value="<?php echo $editdosen[0]['JABATAN'];?>">
                </div></div>     
     <div class="form-group">
                  <label for="nodinbalasan">Area <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>	  
             <input type="text" required class="form-control" name="area" value="<?php echo $editdosen[0]['AREA'];?>">
                </div></div>                  
                
<div class="form-group">
                  <label for="nodinbalasan">Level <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>	  
<select class="form-control select2" name="level" style="width: 100%;">
<option <?php echo $editdosen[0]['LEVEL'] == '66' ? 'Selected':'';?> value="66">Viewer</option>    
<option <?php echo $editdosen[0]['LEVEL'] == '88' ? 'Selected':'';?> value="88">User</option>	
<option <?php echo $editdosen[0]['LEVEL'] == '77' ? 'Selected':'';?> value="77">Supervisor</option>
<option <?php echo $editdosen[0]['LEVEL'] == '99' ? 'Selected':'';?> value="99">Administrator</option>
</select>
                </div></div>                 
                     
        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="editadmin" value="EDIT USER">
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
              <h3 class="box-title">Tambah User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'Manage_app/data_user';?>">
                <div class="form-group">
                  <label for="namalengkap">Nama <span>*</span></label>
				  <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
             <input type="text" class="form-control" required name="nama" placeholder="Rudi Swarna">
                </div> </div>
                
      <div class="form-group">
                  <label for="email">Username <span>*</span></label>
      <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tag"></i></span>
                <input type="text" class="form-control" required name="username" id="email" placeholder="huni.syara">
              </div></div>

<div class="form-group">
                  <label for="nodinbalasan">Password <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>	  
             <input type="password" class="form-control" required name="password" >
                </div></div>

<div class="form-group">
                  <label for="nodinbalasan">NIK <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>	  
             <input type="text" class="form-control" required name="nik" >
                </div></div>
<div class="form-group">
                  <label for="nodinbalasan">No HP <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-tablet"></i></span>	  
             <input type="text" class="form-control" required name="nohp" >
                </div></div>
<div class="form-group">
                  <label for="nodinbalasan">Jabatan <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user-plus"></i></span>	  
             <input type="text" class="form-control" required name="jabatan" >
                </div></div>    
<div class="form-group">
                  <label for="nodinbalasan">Area <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-map-pin"></i></span>	  
             <input type="text" class="form-control" required name="area" >
                </div></div>                
                
                
<div class="form-group">
                  <label for="nodinbalasan">Level <span>*</span></label>
			<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>	  
<select class="form-control select2" name="level" style="width: 100%;">
<option value="66">Viewer</option>    
<option value="88">User</option>	
<option value="77">Supervisor</option>
<option value="99">Administrator</option>
</select>
                </div></div>                
                        
                        
        <div class="box-footer">
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
             <input type="submit" class="btn btn-success" name="submitadmin" value="TAMBAH USER">
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
              <h3 class="box-title">Daftar List Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
 <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Nama</th>
                  <th>Area</th>
                  <th>Jabatan</th>
                  <th>Level</th>
                  <th><i class="fa fa-edit"></i></th>
                </tr>
                </thead>
                <tbody>
            <?php $i = 0;	while ( $i < sizeof($admin)) { ?>                    
                <tr>
                  <td><?php echo $i+1;?></td>
                  <td><b><?php echo $admin[$i]['NAMA'];?></b><br><?php echo $admin[$i]['NO_HP'];?></td>
                  <td><?php echo $admin[$i]['AREA'];?></td>
                  <td><?php echo $admin[$i]['JABATAN'];?></td>
                  <td><?php if ($admin[$i]['LEVEL'] == '88') { echo "User";} else if ($admin[$i]['LEVEL'] == '77') {echo "Supervisor";} else if ($admin[$i]['LEVEL'] == '66') {echo "Viewer";} else { echo "Administrator";}?></td>                  
                  <td><a href="<?php echo base_url().'Manage_app/data_user?edit='.$admin[$i]['ID'];?>" class="label label-primary"><i class="fa fa-edit"></i></a>
                  <a href="<?php echo base_url().'Manage_app/delete/user/'.$admin[$i]['ID'];?>" onclick="return confirm('Apakah Kamu Yakin akan didelete ?')" class="label label-danger"><i class="fa fa-times-circle"></i></a></td>                  
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

