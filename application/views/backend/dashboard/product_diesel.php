<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $label2; ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">
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
              <?php if (isset($konten)) {
                  foreach ($konten as $key) { ?>
                <tr>
                <td><?php echo $key->id_product ?></td>
                <td><?php echo $key->nama ?></td>
                <td>
                  <?php 
                    $deskripsi = $key->deskripsi;
                    $pintas=character_limiter($deskripsi,50);
                    echo $pintas;
                  ?>
                  <span class="badge bg-primary float-right" data-toggle="modal" data-target="#modal-readmore<?php echo $key->id_product ?>">Read More</span>
                </td>
                <td>
                   <?php
                      $product_image = [
                        'src'         => 'upload/product/' . $key->images, 
                        'height'      => '60',
                        'data-toggle' => 'modal',
                        'data-target' => '#modal-image'.$key->id_product
                      ]; 
                      echo img($product_image);
                    ?>
                </td>
                <td>
              <button class="btn btn-danger" onclick="deletedata('<?php echo $key->id_product ?>')">
                <i class="fa fa-trash"></i> Hapus
              </button>
                </td>
              </tr>    

      <div class="modal fade" id="modal-image<?php echo $key->id_product?>">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Unit Picture</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label">Feature Image</label>
                  <div class="col-sm-12">
                   <?php 
                      $product_image = [
                        'src'         => 'upload/product/' . $key->images, 
                        'height'      => '320',
                      ]; 
                      echo img($product_image);
                    ?>
                  </div>
                </div>

              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>    

      
      <div class="modal fade" id="modal-readmore<?php echo $key->id_product?>">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Product Detail</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="kd_produk" class="form-control" value="<?php echo $key->id_product ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Kategori</label>
                  <div class="col-sm-12">
                    <input type="text" name="kd_produk" class="form-control" value="<?php echo $key->kategori ?>"readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu2 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="kd_nama" class="form-control" value="<?php echo $key->nama ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <textarea name="kd_isi" class="form-control" rows="6" readonly><?php echo $key->deskripsi?></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>

                  <?php }
              } ?>
            </tbody>
          </table>
        </div>

    
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>


    <div class="modal fade" id="modal-add">
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
                    <input type="text" name="id_produk" class="form-control" value="<?php echo $id_produk ?>"readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Kategori</label>
                  <div class="col-sm-12">
                    <?php foreach ($kategori as $key2):?>
                      <input type="text" name="kategori" class="form-control" value="<?php echo $key2->nama ?>"readonly>
                    <?php endforeach ?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu2 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="nama" class="form-control">
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

       
      <!-- /.modal -->

<script>
  function deletedata(id)
  {
      swal({
          title: "Are you sure?",
          text: "Your will not be able to recover this imaginary file!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: "btn-danger",
          confirmButtonText: "Yes, delete it!",
          closeOnConfirm: false,
          
        },
    function(){
        $.ajax({
                  url: "<?php echo base_url('Data_control/delete_product_diesel/')?>" + id,
                  type: "post",
                  data: {id:id},
                  success:function(){
                      swal("Deleted","Data berhasil dihapus","success");
                  },
                  error:function(){
                      swal("Data gagal dihapus","error");
                  }
        });
      });

  }
</script>

</div>
