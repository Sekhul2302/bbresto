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
                </form>
                    <div class="form-group col-md-4">
                    <button id="btn1">Prepend text</button>
                    </div>
                    <div class="form-group col-md-12">
                
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Bordered Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">#</th>
                  <th>ID Belanja</th>
                  <th>Jenis Belanja</th>
                  <th>Nama Belanjaan</th>
                  <th>Harga</th>                  
                  <th>Keterangan</th>  
                  <th>Action</th>                
                </tr>
                <tr>
                  <td>1</td>
                  <td>BL005</td>
                  <td>Belanja Pasar</td>
                  <td>Tepung</td>
                  <td>10000</td>
                  <td>Tepung 1 kg</td>
                  <td><a href="" class='fa fa-remove'></a></td>
                </tr>
              </table>
            </div>
                </div>
                <!-- /.box-body -->
                

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
            </div>
        </section>

</div>
<!-- /.content-wrapper -->