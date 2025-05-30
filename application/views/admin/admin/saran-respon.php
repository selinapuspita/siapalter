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
                    <h3 class="box-title">Saran / Pengaduan User</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>Deskripsi</th>
                                <th>Status</th>
                                <th>Waktu Dibuat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 0;
                                foreach ($saran_users as $saran_user) {
                                $i++;
                            ?>                    
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $saran_user['NAMA']; ?></td>
                                    <td><?= $saran_user['title']; ?></td>
                                    <td><?= $saran_user['description']; ?></td>
                                    <td> 
                                        <?php
                                            if ($saran_user['status'] == 'Terkirim') {
                                                echo 'Belum diproses';
                                            }
                                        ?>
                                    </td>
                                    <td><?= $saran_user['created_at']; ?></td>
                                    <td class="text-center">
                                        <a href="<?php echo base_url().'Manage_app/saran-respon/proses/'.$saran_user['id'];?>" onclick="return confirm('Apakah Kamu Yakin ingin memproses ini ?')" class="btn btn-warning mr-1">Proses</a>
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
        <div class="col-lg-12">
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">Saran / Pengaduan Respon</h3>
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
                                <th>Aksi</th>
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
                                    <td class="text-center">
                                        <?php if ($saran_respon['status_complaint'] == 'Diproses') { ?>
                                            <a href="<?php echo base_url().'Manage_app/saran-respon/selesai/'.$saran_respon['complaint_id'];?>" onclick="return confirm('Apakah Kamu Yakin saran ini sudah diselesaikan ?')" class="btn btn-success">Selesai</a>
                                        <?php } ?>
                                        &nbsp;
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

