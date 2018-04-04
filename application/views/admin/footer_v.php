<footer class="main-footer">
  
  <strong>Copyright &copy; 2017-2018 TokoAdeida.</strong>
  </footer>
</body>

<script src="<?php echo base_url('assets/plugins/jquery/dist/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/jQueryUI/jquery-ui.min.js') ?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/moment/moment.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/fullcalendar/dist/fullcalendar.min.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/sweetalert.js')?>"></script>
<script src="<?php echo base_url('assets/dist/js/toast.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/raphael/raphael.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/morris.js/morris.min.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/chart.js/Chart.js')?>"></script>
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>

<script>
  $(document).ready(function() {
  // setInterval(function(){ // fungsi setinterval
  //     $.ajax({ // fungsi ajax
  //           // type: 'POST',// type ajax
  //           // data: "data", // data ajax
  //           url: "<?php echo base_url('sms/liatpesan') ?>",// url ajax,
  //           success:function(data)
  //         {
  //             //console.log the response
  //             console.log('berhasil balas');
  //         }
  //         });
  // }, 60000);

});
</script>

<script>
  $(function(){
    $('#datatable').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>



<script>

        $('#confirmhapus').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').prop('href', $(e.relatedTarget).data('href'));
        });

        $('.modal').on('hidden.bs.modal', function(){
            $(this).find('form')[0].reset();
        });

       
        

        function formatRupiah(angka, prefix)
        {
          var number_string = angka.replace(/[^,\d]/g, '').toString(),
            split = number_string.split(','),
            sisa  = split[0].length % 3,
            rupiah  = split[0].substr(0, sisa),
            ribuan  = split[0].substr(sisa).match(/\d{3}/gi);
            
          if (ribuan) {
            separator = sisa ? '.' : '';
            rupiah += separator + ribuan.join('.');
          }
          
          rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
          return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
        }

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
         
            return false;
            return true;
        }
        
        
 </script>



</html>

