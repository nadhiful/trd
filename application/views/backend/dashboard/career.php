<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"><?php echo $label2; ?></h3>
          <div class="card-tools">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-add">
            <i class="fas fa-plus"> Compose </i>
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
              <?php 
                if (isset($konten)) {
                    foreach ($konten as $key) { ?>
              <tr>
                <td><?php echo $key->id ?></td>
                <td>
                  <?php 
                      $tanda = $key->kategori;
                      if ($tanda == 1) {
                         echo "Magang";
                       }elseif ($tanda == 2 ) {
                         echo "Pekerjaan";
                       } 
                  ?>
                  </td>
                <td><?php echo $key->job_position ?></td>
                <td><?php echo $key->date_close ?></td>
                <td>
                  
                <button class="btn btn-danger" onclick="deletedata('')">
                <i class="fa fa-trash"></i> Hapus
                </button>
                <button class="btn btn-warning" data-toggle="modal" data-target="#modal-edit">
                <i class="fa fa-edit"></i> Edit
              </button>
                </td>
              </tr>  
                <?php }
                }
              ?>
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
            <?php echo form_open_multipart('Data_control/add_career');?>
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Compose Career</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="id_career" class="form-control" value=""readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Kategori</label>
                  <div class="col-sm-12">
                   <select name="kategori" class="form-control">
                     <option value="1">Magang</option>
                     <option value="2">Pekerjaan</option>
                   </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu3 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="position" class="form-control">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu6 ?></label>
                  <div class="col-sm-12">
                    <textarea name="isi" class="form-control" rows="6"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu4; ?></label>
                  <div class="col-sm-12">
                    <?php 
                      $now = $date = date("Y-m-d", mktime(0, 0, 0, date("m"), date("d")+14, date("Y")));
                    ?>
                    <input type="text" name="tutup" class="form-control" value="<?php echo $now ?>" readonly>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu7; ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="lokasi" class="form-control">
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

        <div class="modal fade" id="modal-edit">
          <div class="modal-dialog">
            <?php echo form_open_multipart('Data_control/update_career');?>
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Career</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label class="control-label"><?php echo $th_menu1 ?></label>
                  <div class="col-sm-12">
                    <input type="text" name="id_produk" class="form-control" value=""readonly>
                  </div>
                </div>
                  <div class="form-group">
                  <label class="control-label">Kategori</label>
                  <div class="col-sm-12">
                   
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
                  url: "<?php echo base_url('Data_control/delete_career/')?>" + id,
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
