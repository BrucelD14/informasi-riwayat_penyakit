<div class="page-header">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <div class="title">
              <h4><?php echo $title ?></h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $title ?></li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
<div class="card-box mb-30">
        <div class="pd-20">
          <h4 class="text-blue h4">Tambah Data Pasien</h4>
        </div>
        <div class="card-body">
          <form action="<?php echo base_url() ?>page/tambah_proses" method="post">
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">NIK</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="number" name="nik" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Nama</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="nama" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Alamat</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="alamat" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Riwayat Penyakit</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="penyakit" required>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-12 col-md-2 col-form-label">Riwayat pengobatan</label>
              <div class="col-sm-12 col-md-10">
                <input class="form-control" type="text" name="pengobatan" required>
              </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
          </form>
        </div>
      </div>