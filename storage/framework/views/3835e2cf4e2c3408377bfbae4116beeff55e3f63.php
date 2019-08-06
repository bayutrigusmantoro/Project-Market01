		<?php $__env->startSection('content'); ?>
                        <div class="row">
                          <div class="col-lg-12">
                              <h1>Data Makan</h1>
                          </div>
                    <div class="modal-body">
                        <div>
                        <form action="/makan/<?php echo e($makan->id); ?>/update" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama Makan</label>
                        <input name="nama_makan" type="text" placeholder="nama" value="<?php echo e($makan->nama_makan); ?>" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label" >Kode Makan</label>
                        <input name="kode_makan" disabled="disabled" type="text" value="<?php echo e($makan->kode_makan); ?>" class="form-control" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_beli</label>
                        <input name="harga_beli" type="text" class="form-control" value="<?php echo e($makan->harga_beli); ?>" id="recipient-name">
                      </div>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">harga_jual</label>
                        <input name="harga_jual" type="text" class="form-control" value="<?php echo e($makan->harga_jual); ?>" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">jumlah</label>
                        <input name="jumlah" type="text" class="form-control" value="<?php echo e($makan->jumlah); ?>" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">sisa</label>
                        <input name="sisa" type="text" class="form-control" value="<?php echo e($makan->jumlah); ?>" id="recipient-name">
                      </div>
                  </div>
									<button type="submit" class="btn btn-warning">Simpan Data</button>
                      </form>
											 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>