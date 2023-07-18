<div class="row">
    <div class="col-md-7">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white"><?= $title2; ?></h6>
            </div>
            <div class="card-body">
                <div id="mapidedit" style="width: 100%; height: 650px;"></div>
            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card shadow mb-4">
            <div class="card-header bg-primary py-3">
                <h6 class="m-0 font-weight-bold text-white"><?= $title1; ?></h6>
            </div>
            <div class="card-body">
                <?php
                echo validation_errors(
                    '<div class="alert alert-danger alert-dismissible fade show" role="alert">                
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>',
                    '</div>'
                );
                echo form_open('desa/edit/' . $desa->id_desa);

                ?>
                <div class="form-group">
                    <label>Nama Desa</label>
                    <input type="text" name="nama_desa" value="<?= $desa->nama_desa ?>" class="form-control" placeholder="Masukkan Nama Desa">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" value="<?= $desa->alamat ?>" class="form-control" placeholder="Masukkan Alamat">
                </div>
                <div class="form-group">
                    <label>No. Telp</label>
                    <input type="text" name="telp" value="<?= $desa->telp ?>" class="form-control" placeholder="Masukkan No Telp">
                </div>
                <div class="form-group">
                    <label>Latitude</label>
                    <input type="text" name="latitude" value="<?= $desa->latitude ?>" class="form-control" id="Latitude" placeholder="Latitude" readonly>
                </div>
                <div class="form-group">
                    <label>Longitude</label>
                    <input type="text" name="longitude" value="<?= $desa->longitude ?>" class="form-control" id="Longitude" placeholder="Longitude" readonly>
                </div>
                <div class="form-group">
                    <label>Deskripsi</label>
                    <textarea class="form-control" name="deskripsi" rows="5"><?= $desa->deskripsi ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                <button type="reset" class="btn btn-secondary btn-sm">Reset</button>
                <?php form_close(); ?>
            </div>
        </div>
    </div>
</div>