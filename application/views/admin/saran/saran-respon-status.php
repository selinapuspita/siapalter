<div class="content-wrapper">
<section class="content">
    <div class="row">
        <?php if ($this->session->flashdata()) { ?>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong><?= $this->session->flashdata('notification'); ?>!</strong>
            </div>
        <?php } ?> 
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Saran / Pengaduan Respon Status</h3>
                    <a href="<?= base_url(); ?>Manage_app/saran" class="btn btn-success pull-right">Kembali ke Saran / Pengaduan</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Status</th>
                                <th>Respon</th>
                                <th>Waktu Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                                foreach ($saran_responses as $saran_respon) {
                                $i++;
                            ?>                    
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $saran_respon['NAMA']; ?></td>
                                    <td><?= $saran_respon['title']; ?></td>
                                    <td><?= $saran_respon['status']; ?></td>
                                    <td><?= $saran_respon['response']; ?></td>
                                    <td><?= $saran_respon['created_at']; ?></td>
                                </tr>
                            <?php } ?>
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

