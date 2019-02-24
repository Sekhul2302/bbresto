<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
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
              <form role="form">
                <div class="box-body">
                    <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Id Belanja</label>
                    <input type="text" class="form-control" id="i_idBelanja" placeholder="" value="BL00<?=$seq['seq']?>">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Tanggal</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="exampleInputPassword1">Modal</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="">
                    </div>
                    
                    <div class="form-group col-md-12">

          <div class="box">
            <div class="box-header with-border">
            <h3 class="box-title">Add Barang</h3>
            </div>
          <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Id Belanja</label>
                    <input type="text" id="idBelanja" placeholder="Id Belanja" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jenis Belanja</label>
                    <input type="text" id="jenisBelanja" placeholder="Jenis Belanja" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Belanjaan</label>
                    <input type="text" id="namaBelanja" placeholder="Nama Belanjaan" class="form-control">
                  </div>
                  
                </div>
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input type="text" id="harga" placeholder="Harga" class="form-control">
                </div>
                <div class="form-group">
                  <label>Textarea</label>
                  <textarea class="form-control" id='keterangan' rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <button type='button' id='btn2' class="btn btn-primary">Tambah Belanjaan</button>
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
                  <th>Action</th>                
                </tr>
              </thead>
                <tbody>
                
                </tbody>
              </table>
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
</div>
<!-- /.content-wrapper -->