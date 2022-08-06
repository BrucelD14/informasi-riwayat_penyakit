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
<?php echo $this->session->flashdata('msg') ?>
<div class="card-box mb-30">
  <div class="pd-20">
    <h4 class="text-blue h4">Data <?php echo $title ?></h4>
  </div>
  <div class="card-body">
    <div class="pb-20">
      <table class="data-table table stripe hover nowrap">
        <thead>
          <tr>
            <th>NO</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Riwayat Penyakit</th>
            <th>Riwayat Pengobatan</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
                <?php
                  $no=1;
                  foreach($hasil as $data){
                ?>
          <tr>
            <td><?php echo $no++;?>.</td>
            <td><?php echo htmlentities($data->nik, ENT_QUOTES, 'UTF-8');?></td>
            <td><?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
            <td><?php echo htmlentities($data->alamat_pasien, ENT_QUOTES, 'UTF-8');?></td>
            <td><?php echo htmlentities($data->riwayat_penyakit, ENT_QUOTES, 'UTF-8');?> </td>
            <td><?php echo htmlentities($data->riwayat_pengobatan, ENT_QUOTES, 'UTF-8');?></td>
            <td><a href="<?php echo base_url('page/hapus_pasien/'.$data->id) ?>" class="btn btn-danger" onclick="hapus()">Hapus</a></td>
          </tr>
                <?php
                  }
                ?>
        </tbody>
      </table>
    </div>
  </div>
</div>