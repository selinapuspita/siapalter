<div class="content-wrapper">
	<section class="content">

<div class="row"> 
<div class="col-md-3">
 <div class="small-box bg-blue">
            <div class="inner">
              <h3><?php echo number_format($sumuser[0]['JUMLAH']);?></h3>

              <p>Total Users</p>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>

          </div>    
          </div>    
<div class="col-md-3">          
 <div class="small-box bg-green">
            <div class="inner">
              <h3><?php echo number_format($sumlog[0]['JUMLAH']);?></h3>

              <p>Pegawai Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-in"></i>
            </div>

          </div>        
</div>
<div class="col-md-3">          
 <div class="small-box bg-orange">
            <div class="inner">
              <h3><?php echo number_format($sum_log_pulang[0]['JUMLAH']);?></h3>

              <p>Pegawai Pulang</p>
            </div>
            <div class="icon">
              <i class="fa fa-sign-out"></i>
            </div>

          </div>        
</div>    
<div class="col-md-3">          
 <div class="small-box bg-red">
            <div class="inner">
              <h3><?php echo number_format($sumuser[0]['JUMLAH']-$sumlog[0]['JUMLAH']);?></h3>

              <p>Pegawai Tidak Masuk</p>
            </div>
            <div class="icon">
              <i class="fa fa-close"></i>
            </div>

          </div>        
</div> 

</div>


        
</section>
</div>	
 