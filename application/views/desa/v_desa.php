<?php
if ($this->session->flashdata('pesan')) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">                
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>';
    echo $this->session->flashdata('pesan');
    echo   '</div>';
}
?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header bg-primary py-3">
        <h6 class="m-0 font-weight-bold text-white"><?= $title1; ?></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div>
                <a href="<?= base_url('desa/input') ?>" class="btn btn-outline-primary btn-sm"><i class="fas fa-plus"></i> Input</a>
            </div><br>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Nama Desa</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">No Telp</th>
                        <th class="text-center">Latitude</th>
                        <th class="text-center">Longitude</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($desa as $key => $value) { ?>
                        <tr>
                            <td width="5%" class="align-middle text-center"><?= $no++; ?></td>
                            <td><?= $value->nama_desa ?></td>
                            <td><?= $value->alamat ?></td>
                            <td><?= $value->telp ?></td>
                            <td><?= $value->longitude ?></td>
                            <td><?= $value->latitude ?></td>
                            <td width="12%">
                                <a href="<?= base_url('desa/edit/' . $value->id_desa) ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i> edit</a>
                                <a href="<?= base_url('desa/hapus/' . $value->id_desa) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin menghapus data ini..?')"><i class="fas fa-trash-alt"></i> hapus</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>