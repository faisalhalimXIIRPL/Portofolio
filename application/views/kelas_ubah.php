

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0"><?php echo $title; ?></h1> 
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-12">

            <div class="card card-primary card-outline">
              <div class="card-header">
              <h5 class="m-0"><?php echo $subtitle; ?></h5>io
              </div>
              <?php foreach ($kelas->result() as $value): ?>
                <form class="form-horizontal" method="post" action="<?php echo base_url('kelas/update') ?>">
                <div class="form-group row">  
<input type="hidden" class="form-control" name="id_kelas" value="<?php echo $value->id_kelas; ?>">
</div>
                <div class="card-body">                
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Username</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="kompetensi_keahlian"  value="<?php echo $value->kompetensi_keahlian; ?>" placeholder="kompetensi_keahlian" required>
        <input type="hidden" class="form-control" name="id_petugas" value="<?php echo $value->id_petugas; ?>">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Password</label>
        <div class="col-sm-8">
          <input type="password" class="form-control" name="password" placeholder="Password" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-8">
        <input type="text" class="form-control" name="nama_kelas" value="<?php echo $value->nama_kelas; ?>" placeholder="Nama Kelas" required>
        </div>
      </div>
      <div class="form-group row">
        <label class="col-sm-2 col-form-label">Level</label>
        <div class="col-sm-4">
          <select class="form-control" style="width: 100%;" name="level" required>
          <option value="<?php echo $value->level ?>" selected><?php listLevel($value-.level) ?></option>
            <option value="1">Administrator</option>
            <option value="2">Petugas</option>
          </select>
        </div>
      </div>
  </div>
  <div class="card-footer">
    <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
    <button type="reset" class="btn btn-sm btn-default">Reset</button>
  </div>
</form>
<?php endforeach; ?>    
 </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->