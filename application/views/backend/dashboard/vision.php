<?php
if (isset($data)) {
foreach ($data as $key) { ?>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-outline card-info">
        <div class="card-header">
          <h3 class="card-title">
          Compose Profile
          </h3>
          <!-- tools box -->
          <div class="card-tools">
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip"
            title="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
            title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
          <!-- /. tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body pad">
          <div class="mb-3">
            <div class="card card-warning">
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Headline</label>
                      <input name="judul" type="text" class="form-control" value="<?php echo $key->judul ?>" readonly>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-12">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Content</label>
                      <textarea name="isi" class="form-control" rows="6" readonly><?=$key->isi?></textarea>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                  Edit Visi
                  </button>
                </div>
                <!-- input states -->
              </div>
              <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title">Compose Profile</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                       <form class="form-horizontal" method="post" action="<?php echo site_url('Data_control/update_vision')?>">
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label class="control-label">Judul</label>
                        <div class="col-sm-12">
                         <input type="text" name="judul" class="form-control" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label">Isi</label>
                        <div class="col-sm-12">
                           <textarea name="isi" class="form-control" rows="6" required></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                  </form>
                  </div>
                  <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col-->
  </div>
  <!-- ./row -->
</section>
<!-- /.content -->
<?php }
}
?>
</div>