<div class="content-wrapper">
	<section class="content">

<div class="row">  
<div class="col-lg-12">
    <script type="text/javascript" src="<?php echo base_url().'assets/webcam.min.js';?>"></script>
    <script type="text/javascript" charset="utf-8" src="<?php echo base_url().'assets/geo-min.js';?>"></script>
    <script>
         if(geo_position_js.init()){
            geo_position_js.getCurrentPosition(success_callback,error_callback,{enableHighAccuracy:true});
        }
        else{
            div_isi=document.getElementById("div_isi");
            div_isi.innerHTML ="Tidak ada fungsi geolocation";
        }

        function success_callback(p)
        {
            latitude=p.coords.latitude ;
            longitude=p.coords.longitude;
            pesan = '<?php $this->session->set_userdata(array('gpsid' => "'+latitude +','+longitude+'"));?>';
            //div_isi=document.getElementById("div_isi");
            //div_isi.innerHTML =pesan;

        }
                function error_callback(p)
        {
            pesan = '<?php $this->session->set_userdata(array('gpsid' => "'+latitude +','+longitude+'"));?>';
        }   
        
    </script>
<div class="col-md-12 visible-xs">    
              <div class="callout callout-warning">
                <h4>Mohon Diperhatikan!</h4>

                <p>Aktifkan GPS Location, Wi-fi & Mobile Network Location</p>
              </div>
</div>              
<?php echo date('d-m-Y H:i:s');?>

<?php 
$ch = curl_init();
$urlnya="https://ipinfo.io/".$_SERVER['REMOTE_ADDR']."/geo";

curl_setopt($ch, CURLOPT_URL,$urlnya);

// Receive server response ...
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$server_output = curl_exec($ch);

$details = json_decode($server_output, true);
//print_r($details);

echo "<br>".$details['ip']." - ".$details['city'].", ".$details['region'];

curl_close ($ch);
?>
	<h1>ABSENSI</h1>
	
<p></p>
    <div id="camera">Capture</div>
    
    <div id="webcam">
        <hr>
        <input type=button value="AMBIL FOTO" class="btn bg-blue" onClick="preview()">
    </div>
    <div id="simpan" style="display:none">
        <hr>
        <input type=button value="ULANGI" class="btn bg-yellow" onClick="batal()">
        <input type=button value="SIMPAN" class="btn bg-green" onClick="simpan()" style="font-weight:bold;">
    </div>
 
    <div id="hasil">
    
    </div>
    
 
    <script language="Javascript">

    
        // konfigursi webcam
        Webcam.set({
            width: 300,
            height: 400,
            image_format: 'jpg',
            jpeg_quality: 100
        });
        Webcam.attach( '#camera' );
 
        function preview() {
            // untuk preview gambar sebelum di upload
            Webcam.freeze();
            // ganti display webcam menjadi none dan simpan menjadi terlihat
            document.getElementById('webcam').style.display = 'none';
            document.getElementById('simpan').style.display = '';
        }
        
        function batal() {
            // batal preview
            Webcam.unfreeze();
            
            // ganti display webcam dan simpan seperti semula
            document.getElementById('webcam').style.display = '';
            document.getElementById('simpan').style.display = 'none';
        }
        
        function simpan() {
            // ambil foto
            Webcam.snap(function(data_uri) {
                
                // upload foto
                Webcam.upload(data_uri, '<?php echo base_url('');?>script/convert.php?xyz=<?php echo $datauser;?>', function(code, text) {} );
 
                // tampilkan hasil gambar yang telah di ambil
                document.getElementById('hasil').innerHTML = 
                    '<img src="'+data_uri+'"/>' +
                    '<br><br>' +
                    '<form role="form" action="<?php echo base_url('Manage_app/absen'); ?>" method="post" name="login">'+
                    '<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">'+
                    '<input name="jam" type="hidden"  value="<?php echo date('H:i:s');?>" >'+ 
                    '<input name="date" type="hidden"  value="<?php echo date('Y-m-d');?>" >'+ 
                    '<input name="ip" type="hidden" value="<?php echo $details['ip'];?>" >'+
                    '<input name="lokasi" type="hidden" value="<?php echo $details['city'].",".$details['region'];?>" >'+
                    '<input name="dat" type="hidden" value="<?php echo $datauser;?>" >'+
                    '<input name="gps" type="hidden" value="<?php echo $_SESSION['gpsid'];?>" >'+
                    '<textarea cols="35" name="ket" type="text" placeholder="Keterangan Absen" value=""></textarea><br>'+                    
                    '<input name="submitabsen" type="submit" class="btn bg-green" value="KIRIM ABSEN" >'+    
                    '</form>';
                
                Webcam.unfreeze();
                
                document.getElementById('camera').style.display = 'none';            
                document.getElementById('webcam').style.display = 'none';
                document.getElementById('simpan').style.display = 'none';
            } );
        }
    </script>
</div>
</div>

</section>
</div>	
<!--<img src="'+data_uri+'"/>-->

 