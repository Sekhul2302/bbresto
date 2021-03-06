<footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<!-- //<script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script> -->
<!-- Bootstrap 3.3.7 -->
<script src="<?=base_url();?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?=base_url();?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=base_url();?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>assets/dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
  

  $(document).ready(function(){
    count = 0;
    $("#btn2").click(function(){
      var idBelanja = $("#idBelanja").val();
      var jenisBelanja = $("#JenisBelanja").val();
      var namaBelanja = $("#nb").val();
      var harga = $("#hrg").val();
      var keterangan = $("#ket").val();
      var markup = `<tr>
                        <td name='idBlanja' class='idBlanja'>`+ idBelanja + `</td>
                        <td>` + jenisBelanja + `</td>
                        <td>` + namaBelanja + `</td>
                        <td class="harga">` + harga + `</td>
                        <td>` + keterangan + `</td>
                        <td><input type='checkbox' name='record'></td>
                    </tr>`;
      $("table tbody").append(markup);

      var TotalValue = 0;
      $("#sum tr").each(function(){
            TotalValue += parseFloat($(this).find('.harga').text());
            $("#totalBelanja").val(TotalValue);
      });

      var jenisBelanja = $("#jenisBelanja").val('');
      var namaBelanja = $("#namaBelanja").val('');
      var harga = $("#harga").val('');
      var keterangan = $("#keterangan").val('');
    });

    // Find and remove selected table rows
    $("#btn-delete").click(function(){
      $("table tbody").find('input[name="record"]').each(function(){
        if($(this).is(":checked")){
              $(this).parents("tr").remove();
          }
      });

      //
        });

  $('#user_dialog').dialog({
    autoOpen:false,
    width:1000
  });

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#i_idBelanja').val('');
		$('#i_jenisBelanjaan').val('');
		$('#i_namaBelanjaan').val('');
		$('#i_harga').val('');
		$('#i_keterangan').val('');
		// $('#error_first_name').text('');
		// $('#error_last_name').text('');
		$('#i_jenisBelanjaan').css('border-color', '');
		$('#last_name').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
  });
  
  $('#save').click(function(){
    
		var idBelanja = '';
    var i_jenisBelanjaan = '';		
    var i_namaBelanjaan = '';		
    var i_harga = '';		
    var i_keterangan = '';		
    idBelanja = $('#i_idBelanja').val();
    i_jenisBelanjaan = $('#i_jenisBelanjaan').val();
    i_namaBelanjaan = $('#i_namaBelanjaan').val();
    i_harga = $('#i_harga').val();
    i_keterangan = $('#i_keterangan').val();
    
			if($('#save').text() == 'Save')
			{
        count = count + 1;
        output = `
          <tr id="row_`+count+`">
            <td>`+idBelanja+` <input type="hidden" name="hidden_idBelanja[]" id="idBelanja`+count+`" class="idBelanja" value="`+idBelanja+`" /></td>
            <td>`+i_jenisBelanjaan+` <input type="hidden" name="hidden_i_jenisBelanjaan[]" id="i_jenisBelanjaan`+count+`"  value="`+i_jenisBelanjaan+`" /></td>
            <td>`+i_namaBelanjaan+` <input type="hidden" name="hidden_i_namaBelanjaan[]" id="i_namaBelanjaan`+count+`"  value="`+i_namaBelanjaan+`" /></td>
            <td>`+i_harga+` <input type="hidden" name="hidden_i_harga[]" id="i_harga`+count+`"  value="`+i_harga+`" /></td>
            <td>`+i_keterangan+` <input type="hidden" name="hidden_i_keterangan[]" id="i_keterangan`+count+`"  value="`+i_keterangan+`" /></td>
            <td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="`+count+`">View</button></td>
            <td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="`+count+`">Remove</button></td>
          </tr>
        `;
				// output = '<tr id="row_'+count+'">';
				// output += '<td>'+idBelanja+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+idBelanja+'" /></td>';
				// output += '</tr>';
				$('#user_data').append(output);
      }
      else{
        var row_id = $('#hidden_row_id').val();
        console.log("edit"+row_id);
        output = `
          <td>`+idBelanja+` <input type="hidden" name="hidden_idBelanja[]" id="idBelanja`+row_id+`" class="idBelanja" value="`+idBelanja+`" /></td>
          <td>`+i_jenisBelanjaan+` <input type="hidden" name="hidden_i_jenisBelanjaan[]" id="idBelanja`+row_id+`" class="i_jenisBelanjaan" value="`+i_jenisBelanjaan+`" /></td>
          <td>`+i_namaBelanjaan+` <input type="hidden" name="hidden_i_namaBelanjaan[]" id="idBelanja`+row_id+`" class="i_namaBelanjaan" value="`+i_namaBelanjaan+`" /></td>
          <td>`+i_harga+` <input type="hidden" name="hidden_i_harga[]" id="idBelanja`+row_id+`" class="i_harga" value="`+i_harga+`" /></td>
          <td>`+i_keterangan+` <input type="hidden" name="hidden_i_keterangan[]" id="idBelanja`+row_id+`" class="i_keterangan" value="`+i_keterangan+`" /></td>
				  <td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="`+row_id+`">View</button></td>
				  <td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="`+row_id+`">Remove</button></td>
        `
				$('#row_'+row_id+'').html(output);
        
        
      }
    $('#user_dialog').dialog('close');
		
  });
  
  $(document).on('click', '.view_details', function(){
    var row_id = $(this).attr("id");
    console.log("view"+row_id);
    var idBelanja = $('#idBelanja'+row_id+'').val();
    var i_jenisBelanjaan = $('#i_jenisBelanjaan'+row_id+'').val();
    var i_namaBelanjaan = $('#i_namaBelanjaan'+row_id+'').val();
    var i_harga = $('#i_harga'+row_id+'').val();
    var i_keterangan = $('#i_keterangan'+row_id+'').val();
    console.log(idBelanja);
		// //var last_name = $('#last_name'+row_id+'').val();
		$('#i_idBelanja').val(idBelanja);
		$('#i_jenisBelanjaan').val(i_jenisBelanjaan);
		$('#i_namaBelanjaan').val(i_namaBelanjaan);
		$('#i_harga').val(i_harga);
		$('#i_keterangan').val(i_keterangan);
		// //$('#last_name').val(last_name);
		$('#save').text('Edit');
    $('#hidden_row_id').val(row_id);
		$('#user_dialog').dialog('option', 'title', 'Edit Data');
		$('#user_dialog').dialog('open');
	});

	$(document).on('click', '.remove_details', function(){
		var row_id = $(this).attr("id");
		if(confirm("Are you sure you want to remove this row data?"))
		{
			$('#row_'+row_id+'').remove();
		}
		else
		{
			return false;
		}
	});

  $('#user_form').on('submit', function(event){
    //console.log("test");
		 event.preventDefault();
		 var count_data = 0;
		 $('.idBelanja').each(function(){
		 	count_data = count_data + 1;
       console.log(count_data);
		 });
		if(count_data > 0)
		{
			var form_data = $(this).serialize();
      console.log(form_data);
      $.ajax({
      url:"http://localhost/bbresto/home/insert",
      method:"POST",
      data:form_data,
      success:function(data)
        {
          console.log(data);
          // $('#user_data').find("tr:gt(0)").remove();
          // $('#action_alert').html('<p>Data Inserted Successfully</p>');
          // $('#action_alert').dialog('open');
        }
      })
		
		// else
		// {
		// 	$('#action_alert').html('<p>Please Add atleast one data</p>');
		// 	$('#action_alert').dialog('open');
		 }
	  });

  

  });

</script>
</body>
</html>
