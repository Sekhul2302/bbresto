<div class="content-wrapper">
<<<<<<< HEAD
  <label for="idBelanja">idBelanja</label>
  <input type="text" id="idBelanja" name="idBelanja">
  <label for="i_tanggal">Tanggal</label>
  <input type="date" id="i_tanggal" name="i_tanggal">
  <label for="i_modal">Modal</label>
  <input type="text" id="i_modal" name="i_modal">
  <br>
  <button type="button" name="add" id="add" class="btn btn-success btn-xs">Add</button>
  <form method="post" id="user_form">
    <div class="table-responsive">
      <table class="table table-striped table-bordered" id="user_data">
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Details</th>
          <th>Remove</th>
        </tr>
      </table>
    </div>
    <div align="center">
      <input type="submit" name="insert" id="insert" class="btn btn-primary" value="Insert" />
    </div>
  </form>

  <div id="user_dialog" title="Add Data">
    <div class="box-body">
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Id Belanja</label>
            <input type="text" name="i_idBelanja" id="i_idBelanja" class="form-control" />
            <span id="error_first_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Jenis Belanjaan</label>
            <input type="text" name="i_jenisBelanjaan" id="i_jenisBelanjaan" class="form-control" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Nama Belanjaan</label>
            <input type="text" name="i_namaBelanjaan" id="i_namaBelanjaan" class="form-control" />
            <span id="error_first_name" class="text-danger"></span>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Harga</label>
            <input type="text" name="i_harga" id="i_harga" class="form-control" />
            <span id="error_last_name" class="text-danger"></span>
          </div>
          <div class="form-group">
            <label>Keterangan</label>
            <textarea class="form-control" id='i_keterangan' name="i_keterangan" rows="3" placeholder="Enter ..."></textarea>
            <span id="error_last_name" class="text-danger"></span>
          </div>
          <div class="form-group" align="center">
            <input type="hidden" name="row_id" id="hidden_row_id" />
            <button type="button" name="save" id="save" class="btn btn-info">Save</button>
          </div>
        </div>
      </div>
    </div>
			
			
		</div>
  
=======
    <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      BB Resto
      <small>Belanja Harian</small>
    </h1>
  </section>
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Belanja Harian</h3>
            </div>
                <!-- /.box-header -->
                <!-- form start -->
            <form id="form-belanja" method="post">
              <div class="box-body">
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Id Belanja</label>
                  <input type="text" class="form-control" id="i_idBelanja" name="naIdBelanja" placeholder="" value="BL00<?=$seq['seq']?>">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputEmail1">Tanggal</label>
                  <input type="date" class="form-control" id="idTanggal" name="naTanggal" placeholder="">
                </div>
                <div class="form-group col-md-3">
                  <label for="exampleInputPassword1">Modal</label>
                  <input type="text" class="form-control" id="idModal" name="naModal" placeholder="">
              </div>
                    
              <div class="form-group col-md-12">
                <div class="box">
                  <div class="box-header with-border">
                    <button type="button" class="btn-group btn-group-xs" data-toggle="modal" data-target=".bs-example-modal-lg">Add Barang</button>
                  </div>
                <!-- /.box-header -->
                  <div class="row">
                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                    <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                      <div class="modal-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputEmail1">Id Belanja</label>
                            <input type="text" id="idBelanja" placeholder="Id Belanja" name="idBelanja" value="BL00<?=$seq['seq']?>" class="form-control">
                            <label for="naJenisBelanja">Jenis Belanja</label>
                            <input type="text" id="JenisBelanja" placeholder="Jenis Belanja" name="JenisBelanja"  class="form-control">
                            <label for="naJenisBelanja">Nama Belanja</label>
                            <input type="text" id="nb" placeholder="Nama Belanja" name="NB"  class="form-control">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                              <label for="naHarga">Harga</label>
                              <input type="text" id="hrg" placeholder="Harga" name='naHarga' class="form-control">
                              <label>Textarea</label>
                              <textarea class="form-control" id='ket' rows="3" placeholder="Enter ..." name='naKeterangan'></textarea>
                              <button type='button' id='btn2' class="btn btn-primary">Tambah Belanjaan</button>
                          </div>
                        </div> 
                        </div>
                      </div>
                        
                      </div>
                    </div>
                  </div>
              </div>

              <div class="box">
                <div class="box-header with-border">
                <h3 class="box-title">List Barang</h3>  
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                  <table id="myTable" class="myTable table table-bordered">
                  <thead>
                    <tr>
                      <th>ID Belanja</th>
                      <th>Jenis Belanja</th>
                      <th>Nama Belanjaan</th>
                      <th>Harga</th>                  
                      <th>Keterangan</th>
                      <th><input type="checkbox" id="check-All"/>Select All</th>                
                    </tr>
                  </thead>
                    <tbody id="sum">
                    </tbody>
                  </table>
              </div>
              <br>
              <div class='col-md-3 col-md-offset-9'>
                <label for="exampleInputEmail1">Total Belanjaan</label>
                <input type="text" id="totalBelanja" placeholder="Total Belanjaan" class="form-control">
              </div>
              </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" id='btn-delete' class="btn btn-primary">Delete selected</button>
                </div>
              </form>
            </div>
          </section>
>>>>>>> 645ee8bcb2504c871a7b2b1c41354cbf28b4ee69
</div>


