<div class="content-wrapper">
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
          <th>ID Belanja</th>
          <th>Jenis Belanjaan</th>
          <th>Nama Belanjaan</th>
          <th>Harga</th>
          <th>Keterangan</th>
          <th>Detail</th>
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
  
</div>


