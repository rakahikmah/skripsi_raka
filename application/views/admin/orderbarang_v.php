         <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
                Order Barang
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
                            <th>Harga</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $no=1; ?>
                         <?php foreach ($databarang as $barang): ?>
                           <tr>
                            <form action="<?=site_url('admin/tambahcart')?>" method="post">
                               <td><?=$no++?></td>
                               <td><?=$barang['id_barang']?></td>
                               <td><?=$barang['nama_barang']?></td>
                               <td><?=$barang['harga_barang']?></td>
                               <td>
                                <?php echo anchor("admin/formorderbarang/$barang[id_barang]", "Pesan", array('class'=>'btn btn-primary')); ?>
                               </td>
                             </form>
                           </tr>
                         <?php endforeach ?>
                        </tbody>
                      </table>
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