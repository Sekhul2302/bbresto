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
<<<<<<< HEAD
        });

  $('#user_dialog').dialog({
    autoOpen:false,
    width:1000
  });

	$('#add').click(function(){
		$('#user_dialog').dialog('option', 'title', 'Add Data');
		$('#first_name').val('');
		$('#last_name').val('');
		$('#error_first_name').text('');
		$('#error_last_name').text('');
		$('#first_name').css('border-color', '');
		$('#last_name').css('border-color', '');
		$('#save').text('Save');
		$('#user_dialog').dialog('open');
  });
  
  $('#save').click(function(){
		var idBelanja = '';
    var last_name = '';		
    first_name = $('#i_idBelanja').val();
    //console.log(first_name);
			if($('#save').text() == 'Save')
			{
				count = count + 1;
				output = '<tr id="row_'+count+'">';
				output += '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+count+'" class="first_name" value="'+first_name+'" /></td>';
				output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+count+'" value="'+last_name+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+count+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+count+'">Remove</button></td>';
				output += '</tr>';
				$('#user_data').append(output);
			}
			else
			{
				var row_id = $('#hidden_row_id').val();
				output = '<td>'+first_name+' <input type="hidden" name="hidden_first_name[]" id="first_name'+row_id+'" class="first_name" value="'+first_name+'" /></td>';
				output += '<td>'+last_name+' <input type="hidden" name="hidden_last_name[]" id="last_name'+row_id+'" value="'+last_name+'" /></td>';
				output += '<td><button type="button" name="view_details" class="btn btn-warning btn-xs view_details" id="'+row_id+'">View</button></td>';
				output += '<td><button type="button" name="remove_details" class="btn btn-danger btn-xs remove_details" id="'+row_id+'">Remove</button></td>';
				$('#row_'+row_id+'').html(output);
			}

			$('#user_dialog').dialog('close');
		
	});

=======
    });

    //chechk all
    $("#check-All").click(function(){
      $("input:checkbox").attr('checked', true);
    })

    //submit data
    $("#formDetailBelanja").on("submit", function(){
      alert("test");
    });

    $("#form-belanja").on("submit", function(event){
      var count = 0;
      //alert('test');
      //console.log(count);
      event.preventDefault();
      $(".idBlanja").each(function(){
        count = count + 1;
        console.log(count);
      })

      if (count>0){
        var form_data = $("#form-belanja").serialize();
        console.log(form_data);
      }
    });
>>>>>>> 645ee8bcb2504c871a7b2b1c41354cbf28b4ee69
  });

</script>
</body>
</html>
