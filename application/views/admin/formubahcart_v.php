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
                        <h3 class="box-title">Ubah Order Barang Pelanggan</h3>
                         <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <form class="form-horizontal" method="post" action="<?=site_url('admin/ubahcart')?>">
                        <div class="box-body">
                          <input type="hidden" name="rowid" value="<?=$rowid?>">
                          <div class="form-group">
                            <label for="id_barang" class="col-sm-2 control-label">ID Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$cart[$rowid]['id']?>" class="form-control" name="id_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$cart[$rowid]['name']?>" class="form-control" name="nama_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="harga_barang" class="col-sm-2 control-label">Harga Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$cart[$rowid]['price']?>" class="form-control" name="harga_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlah_order" class="col-sm-2 control-label">Jumlah Di Order</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$cart[$rowid]['qty']?>" class="form-control" name="jumlah_order" >
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <input type="submit" class="btn btn-info pull-right" value="Update Order Barang">
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
          
       

