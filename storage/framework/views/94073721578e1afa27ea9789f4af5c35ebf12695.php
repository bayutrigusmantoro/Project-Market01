		<?php $__env->startSection('content'); ?>
                        <div class="row">
                          <div class="col-lg-12">
                              <h1>Data Minum</h1>
                          </div>
                    <div class="modal-body">
                        <div>
                        <form action="/minum/<?php echo e($minum->id); ?>/update" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama minum</label>
                        <input name="nama_minum" type="text" placeholder="nama" value="<?php echo e($minum->nama_minum); ?>" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label" >Kode Minum</label>
                        <input name="kode_minum" disabled="disabled" type="text" value="<?php echo e($minum->kode_minum); ?>" class="form-control" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_beli</label>
                        <input name="harga_beli" type="text" class="form-control" value="<?php echo e($minum->harga_beli); ?>" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_jual</label>
                        <input name="harga_jual" type="text" class="form-control" value="<?php echo e($minum->harga_jual); ?>" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">jumlah</label>
                        <input name="jumlah" type="text" class="form-control" value="<?php echo e($minum->jumlah); ?>" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">sisa</label>
                        <input name="sisa" type="text" class="form-control" value="<?php echo e($minum->jumlah); ?>" id="recipient-name">
                      </div>
                  </div>
									<button type="submit" class="btn btn-warning">Simpan Data</button>
                      </form>
											 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>