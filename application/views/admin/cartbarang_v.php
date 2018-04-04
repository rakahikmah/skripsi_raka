         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              Tabel Barang
            </h1>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                <div class="box">
                  <!-- /<div class="bo">/div>x-header -->
                    <div class="box-body table-responsive">
                      <table id="datatable" class="table table-bordered table-striped">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah</th>
                            <th>Harga Satuan</th>
                            <th>Total Harga</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                         <?php foreach ($datacart as $cart): ?>
                           <tr>
                               <td><?=$no++?></td>
                               <td><?=$cart['id']?></td>
                               <td><?=$cart['name']?></td>
                               <td><?=$cart['qty']?></td>
                               <td><?=$cart['price']?></td>
                               <td><?=$cart['subtotal']?></td>
                               <td>
                                <a href="<?=site_url("admin/formubahcart/$cart[rowid]")?>" class="btn btn-primary">Edit</a>
                                <a href="<?=site_url("admin/hapuscart/$cart[rowid]")?>" class="btn btn-danger">Hapus</a>
                               </td>
                           </tr>
                         <?php endforeach ?>
                        </tbody>
                      </table>
                      <p>
                        <br>
                          Jumlah Total <b><?php echo $total_semua ?></b>
                          <input type="button" name="button" value="Beli Produk"  data-toggle="modal" data-target="#confirm-submit" class="btn btn-primary pull pull-right" />
                      </p>
                    </div>
                    <!-- /.box-body -->
                  </div>
                  <!-- /.box -->
                </div>
            <!-- /.row -->
              </div>
                <!-- /.content -->
          </section>
        </div>


            
<div class="modal fade" id="confirm-submit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
             <form action="<?=site_url('admin/insertcarttopelanggan')?>" class="form-horizontal" method="post">
               Konfirmasi Pembayaran
            </div>
            <div class="modal-body">
               Apakan anda ingin Konfirmasi Pembelian Pelanggan
                  <input type="hidden" name="total_hutang" value="<?=$total_semua?>">
                  <input type="hidden" name="id_hutang" value="HT001">
                  <input type="hidden" name="id_pelanggan" value="PL001">
                  <div class="form-group"><br>
                      <label>Masukan Jatuh Tempo</label>
                      <input class="form-control" placeholder="Jatuh Tempo Hutang" name="jatuh_tempo">
                   </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-success success">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
          