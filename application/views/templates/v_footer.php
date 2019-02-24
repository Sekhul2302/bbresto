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
<script src="<?=base_url();?>assets/bower_components/jquery/dist/jquery.min.js"></script>
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
  });

</script>
</body>
</html>
