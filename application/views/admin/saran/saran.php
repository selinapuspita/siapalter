<div class="content-wrapper">
<section class="content">
    <div class="row">  
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <?php if ($this->session->flashdata()) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong><?= $this->session->flashdata('notification'); ?>!</strong>
                        </div>
                    <?php } ?>
                    <h3 class="box-title">Saran / Pengaduan</h3>
                    <a href="<?= base_url(); ?>Manage_app/saran/tambah" class="btn btn-primary pull-right">Tambahkan Saran / Pengaduan</a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Waktu Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                                foreach ($complaints as $complaint) {
                                $i++;
                            ?>                    
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $complaint['title']; ?></td>
                                    <td><?= $complaint['description']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url().'Manage_app/saran-respon/status/'.$complaint['id'];?>">
                                            <?= $complaint['status']; ?></td>
                                        </a>
                                    <td><?= $complaint['created_at']; ?></td>
                                    <td class="text-center">
                                        <?php if ($complaint['status'] == 'Terkirim') { ?>
                                            <a href="<?php echo base_url().'Manage_app/saran/edit/'.$complaint['id'];?>" class="btn btn-warning mr-1">Edit</a>
                                            <a href="<?php echo base_url().'Manage_app/saran/delete/'.$complaint['id'];?>" onclick="return confirm('Apakah Kamu Yakin akan didelete ?')" class="btn btn-danger mr-1">Hapus</a>
                                        <?php } ?>
                                    </td>
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

