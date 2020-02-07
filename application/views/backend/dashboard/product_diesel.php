<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $label2; ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default">
            <i class="fas fa-plus"> New Product </i>
            </button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="collapse" data-toggle="tooltip" tittle="Collapse">
            <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool btn-sm" data-card-widget="remove" data-toggle="tooltip"
            title="Remove">
            <i class="fas fa-times"></i></button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th><?php echo $th_menu1;?></th>
                <th><?php echo $th_menu2;?></th>
                <th><?php echo $th_menu3;?></th>
                <th><?php echo $th_menu4;?></th>
                <th><?php echo $th_menu5;?></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 4.0
                </td>
                <td>Win 95+</td>
                <td> 4</td>
                <td>X</td>
              </tr>
              <tr>
                <td>Trident</td>
                <td>Internet
                  Explorer 5.0
                </td>
                <td>Win 95+</td>
                <td>5</td>
                <td>C</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <?php echo form_open_multipart('Data_control/add_product_diesel');?>
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose Product</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="judul" class="form-control" value="<?php echo $id_produk ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu2 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="judul" class="form-control" value="">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <textarea name="isi" class="form-control" rows="6"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <input type="file" name="images">
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <?php form_close(); ?>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
</div>