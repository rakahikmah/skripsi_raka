         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
             test form
            </h1>
          </section>
          <!-- Main content -->
          <section class="content">
            <div class="row">
              <div class="col-xs-12">
                  <div class="box box-info">
                      <div class="box-header with-border">
                        <h3 class="box-title">Horizontal Form</h3>
                      </div>
                      <form class="form-horizontal" method="post" action="<?=site_url('admin/test')?>">
                        <div class="box-body">
                          <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Kode</label>

                            <div class="col-sm-10">
                              <input type="test" value="<?=$kodebarang?>" class="form-control" name="kodebarang">
                            </div>
                          </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                          <button type="submit" class="btn btn-info pull-right">Test</button>
                        </div>
                        <!-- /.box-footer -->
                      </form>
                    </div>
                </div>
              </td>
            </tr>                
                  <!-- /.row -->
                </section>
                <!-- /.content -->
              </div>
            </body>

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