         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
                Data Barang
            </h1>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <?php if ($this->session->flashdata('infotambah')): ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>Info</h4>
                    Berhasil menambah barang
                  </div>
                <?php elseif ($this->session->flashdata('infoupdate')): ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>Info</h4>
                    Berhasil mengupdate barang
                  </div>
                <?php elseif($this->session->flashdata('infohapus')): ?>
                  <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>Info</h4>
                    Berhasi menghapus barang
                  </div>  
                <?php endif ?>
              <div class="col-xs-12">
                <div class="box">
                 <div class="box-body table-responsive">
                   <a href="<?=site_url('barang/addbarang')?>" class="btn btn-primary" style="margin-bottom: 10px">Tambah Barang</a>
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
                            
                               <td><?=$no++?></td>
                               <td><?=$barang['id_barang']?></td>
                               <td><?=$barang['nama_barang']?></td>
                               <td>Rp. <?=number_format($barang['harga_barang'],0,"",".")?></td>
                               <td>
                                <a href="<?=site_url("barang/updatebarang/$barang[id_barang]")?>" class="btn btn-warning">Edit</a>
                               <!--  <a href="<?=site_url("barang/hapusbarang/$barang[id_barang]")?>" class="btn btn-danger">Hapus</a> -->
                               <button class="btn btn-danger" data-href="<?=site_url("barang/hapusbarang/$barang[id_barang]")?>" data-toggle="modal" data-target="#confirmhapus">Hapus
                              </button>
                               </td>
                            
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
          </section>
         </div> 


          <div class="modal fade" id="confirmhapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Konfirmasi</h4>
                  </div>

                  <div class="modal-body">
                    <p>Apakah anda yakin ingin menghapus barang ini</p>
                    <p class="debug-url"></p>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-danger btn-ok">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
          