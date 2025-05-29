  
                            
                            
                            
                            
                               <!-- Modal Ganti Password -->
                            <div class="modal modal-danger fade" id="ganti" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Ganti Password</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('changepassed/rstpass'); ?>" method="post" name="login">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <fieldset>                            
                                    <label class="control-label">Username</label>
                               <div class="form-group has-danger input-group">
                         <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                             <input type="text" disabled class="form-control" name="username" placeholder="NAMA LENGKAP" value="<?php echo $_SESSION['username'];?>">
                             <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id'];?>">
                             <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['username'];?>">
                                 <input type="hidden" class="form-control" name="level" value="<?php echo $_SESSION['level'];?>">
                                </div>
                                
                                 <label class="control-label">Password</label>
                               <div class="form-group has-danger input-group">
                          <span class="input-group-addon"><i class="fa fa-tag fa-fw"></i></span>
                     <input type="password" class="form-control" name="password" placeholder="***********">
                                </div>
                                                                                          
                 <label class="control-label">Email</label>
                               <div class="form-group has-danger input-group">
                          <span class="input-group-addon"><i class="fa fa-envelope fa-fw"></i></span>
                     <input type="email" class="form-control" name="email" value="<?php echo $_SESSION['email'];?>">
                                </div>                             
                                
                                        </div>
                                        <div class="modal-footer">                                          
           <button onclick="return confirm('Apakah Kamu yakin mau Ubah Data ?')" type="submit" name="ganti" class="btn btn-success">Ubah Data</button>
                                 <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                        </div>
                                           </fieldset>
                        </form>   
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


  <!-- Modal Upload Foto-->
                            <div class="modal modal-danger fade" id="fotopic" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Upload Foto</h4>
                                        </div>
                                        <div class="modal-body">
                                          <form role="form" action="<?php echo base_url('Manage_app/upload_pic'); ?>" method="post" name="uploadpic" enctype="multipart/form-data">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                            <fieldset>                            
                                    <label class="control-label">File Foto</label> *Format File dalam .png|jpg|gif|jpeg
                               <div class="form-group has-danger input-group">
                         <span class="input-group-addon"><i class="fa fa-file-image-o fa-fw"></i></span>
                             <input type="hidden" class="form-control" name="id" value="<?php echo $_SESSION['id'];?>">
                             <input type="hidden" class="form-control" name="username" value="<?php echo $_SESSION['username'];?>">
                                 <input type="hidden" class="form-control" name="level" value="<?php echo $_SESSION['level'];?>">
                                 <input type="hidden" class="form-control" name="fotonow" value="<?php echo $_SESSION['pic'];?>">
                                <input type="file" class="form-control" required name="inputfile">
                                </div>                                                                                                                                    
                                
                                        </div>
                                        <div class="modal-footer">                                          
           <input type="submit" name="uploadpic" class="btn btn-success" value="Upload">
                                 <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                                        </div>
                                           </fieldset>
                        </form>   
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                            <!-- /.modal -->


                    


                    

