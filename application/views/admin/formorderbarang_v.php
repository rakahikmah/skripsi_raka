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
                        <h3 class="box-title">Form Order Barang Pelanggan</h3>
                         <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <form class="form-horizontal" method="post" action="<?=site_url('admin/tambahcart')?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="id_barang" class="col-sm-2 control-label">ID Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$detailbarang['id_barang']?>" class="form-control" name="id_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nama_barang" class="col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$detailbarang['nama_barang']?>" class="form-control" name="nama_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="harga_barang" class="col-sm-2 control-label">Harga Barang</label>
                              <div class="col-sm-10">
                              <input type="text" value="<?=$detailbarang['harga_barang']?>" class="form-control" name="harga_barang" readonly>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="jumlah_order" class="col-sm-2 control-label">Jumlah Di Order</label>
                              <div class="col-sm-10">
                              <input type="text" value="" class="form-control" name="jumlah_order" >
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <input type="submit" class="btn btn-info pull-right" value="Tambah Barang">
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
           

            <div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                  </div>

                  <div class="modal-body">
                    <p>Apakah anda yakin ingin mengubah dari waiting ke proses </p>
                    <p class="debug-url"></p>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary btn-ok">Konfirmasi</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="modal fade" id="confirmtolak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                  </div>

                  <div class="modal-body">
                    <p>Apakah anda yakin ingin menolak surat tersebut</p>
                    <p class="debug-url"></p>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Tolak</a>
                  </div>
                </div>
              </div>
            </div>