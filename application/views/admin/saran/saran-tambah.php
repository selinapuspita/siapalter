<div class="content-wrapper">
<section class="content">
    <div class="row">  
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Tambah Saran / Pengaduan</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <form action="<?= base_url(); ?>Manage_app/saran/store" method="POST" enctype="multipart/form-data" class="form-horizontal">
                        <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>"
                        value="<?= $this->security->get_csrf_hash(); ?>" />

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Masukkan judul pengaduan" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Deskripsi</label>
                            <div class="col-sm-10">
                            <textarea name="description" class="form-control" rows="4" placeholder="Jelaskan masalah atau saran Anda..." required></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary pull-right">Kirim Saran / Pengaduan</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->   
        </div>
    </div>
</section>
</div>	

