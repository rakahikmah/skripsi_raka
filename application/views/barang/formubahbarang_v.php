         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <!-- <h1>
             FORM PEMBELIAN BARANG
            </h1> -->
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Form Ubah Barang</h3>
                         <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <form class="form-horizontal" method="post" action="<?=site_url("barang/updatebarang/$barang[id_barang]")?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="id_barang" class="col-sm-2 control-label">ID Barang</label>
                              <div class="col-sm-10">
                              <input type="text"  class="form-control" value="<?=$barang['id_barang']?>" name="id_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                              <span class="text-danger"><?php echo form_error("nama_barang"); ?></span>
                              <input type="text"  class="form-control" name="nama_barang" value="<?=$barang['nama_barang']?>">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="harga_barang" class="col-sm-2 control-label">Harga Barang</label>
                              <div class="col-sm-10">
                                <span class="text-danger"><?php echo form_error("harga_barang"); ?></span>
                              <input type="text"  id="harga_barang" class="form-control" name="harga_barang" value="Rp. <?=number_format($barang['harga_barang'],0,"",".")?>"> 
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <input type="submit" class="btn btn-info pull-right" value="Update Barang">
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                </div>
              </div>
                   <!-- /.row -->
              </section>
                <!-- /.content -->
            </div>
<script>
  var harga_barang = document.getElementById('harga_barang');
        harga_barang.addEventListener('keyup', function(e)
        {
         harga_barang.value = formatRupiah(this.value, 'Rp. ');
        });
</script>              
          
       

