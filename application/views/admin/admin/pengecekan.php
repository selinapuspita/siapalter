<div class="content-wrapper">
	<section class="content">

<div class="row"> 
<div class="col-md-6">
<?php if(preg_match('/(Mobile|Android|Tablet|GoBrowser|[0-9]x[0-9]*|uZardWeb\/|Mini|Doris\/|Skyfire\/|iPhone|Fennec\/|Maemo|Iris\/|CLDC\-|Mobi\/)/uis',$_SERVER['HTTP_USER_AGENT'])){?>
    <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/adapter.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/vue.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/admin/js/instascan.min.js';?>"></script>
              <div class="callout callout-danger">
                <center>Arahkan Kamera ke Kode QR!</center>
              </div>
<div id="app" class="row">  
      <div>  
	   <center><video id="preview" width="250"></video>
            <p v-if="cameras.length === 0" class="empty">No cameras found</p>
            <p v-for="camera in cameras">
              <span v-if="camera.id == activeCameraId" :title="formatName(camera.name)" class="active">{{ formatName(camera.name) }}</span>
              <span v-if="camera.id != activeCameraId" :title="formatName(camera.name)">
                <a @click.stop="selectCamera(camera)">{{ formatName(camera.name) }}</a>
              </span>
            </p>         
			<form role="form" method="POST" enctype="multipart/form-data" action="<?php echo base_url().'manage_app/input_pengecekan';?>">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">	    
<textarea type="text" name='pos' style="display:none;" class="form-control"  :href="scan.content" v-for="scan in scans" >{{ scan.content }}</textarea>
<i style="color:red;" v-for="scan in scans" class="fa fa-fw fa-5x fa-check-circle"></i><br><small class="label label-danger" v-for="scan in scans">BERHASIL DI SCAN!</small>
<br><hr>
                <a type="button" v-for="scan in scans" href="<?php echo base_url().'manage_app/pengecekan';?>" class="btn btn-warning">Ulangi</a>
                <button type="submit" v-for="scan in scans" name="submitpos" class="btn btn-primary">Submit</button>
</form>	
   </center>
      </div>

</div>
<?php } else {?>
<div class="alert alert-danger alert-dismissible">
                
                <h4><i class="icon fa fa-ban"></i> Info!</h4>
                Fitur ini hanya dapat dilakukan melalui Mobile Phone/Handphone!
              </div>
<?php } ?>
</div>
</div>
</section>
</div>	
<script type="text/javascript" src="<?php echo base_url().'assets/admin/js/app_cam1.js';?>"></script>

 