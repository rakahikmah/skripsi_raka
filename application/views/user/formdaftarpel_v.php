         <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-md-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Form Order Barang Pelanggan</h3>
                         <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                          </button>
                        </div>
                      </div>
                      <?php echo form_open('user/daftarpelanggan', array('class'=>'form-horizontal','method'=>'post'));?>
                          <div class="box-body">
                            <div class="form-group">
                              <label for="kodepel" class="col-sm-2 control-label">Kode Pelanggan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="kodepel" value="<?=$kodepel?>" readonly>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="no_identitas" class="col-sm-2 control-label">No identitas</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_identitas" placeholder="No identitas KTP/SIM" value="<?=set_value('no_identitas')?>" maxlength="16" onkeypress="return hanyaAngka(event)">
                                <span class="text-danger"><?php echo form_error("no_identitas"); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="namapel" class="col-sm-2 control-label">Nama Pelanggan</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="namapel" placeholder="Nama pelanggan" value="<?=set_value('namapel')?>">
                                <span class="text-danger"><?php echo form_error("namapel"); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="no_hp" class="col-sm-2 control-label">Nomor Handphone</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="no_hp" placeholder="No Handphone Pelanggan" value="<?=set_value('no_hp')?>" onkeypress="return hanyaAngka(event)">
                                <span class="text-danger"><?php echo form_error("no_hp"); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-10">
                                <textarea name="alamat" class="form-control" placeholder="Alamat"><?=set_value('alamat')?></textarea>
                                <span class="text-danger"><?php echo form_error("alamat"); ?></span>
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="username" class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?=set_value('username')?>">
                                <span class="text-danger"><?php echo form_error("username"); ?></span>
                              </div>
                           </div>
                          </div>
                          <!-- /.box-body -->
                          <div class="box-footer">
                            <div class="pull pull-right">
                              <button type="submit" class="btn btn-info">Daftar</button>
                              <button type="reset" class="btn btn-default">Batal</button>
                            </div>
                          </div>
                          <!-- /.box-footer -->
                        <?php echo form_close() ?>
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