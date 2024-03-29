		<?php $__env->startSection('content'); ?>
                        <div class="row">
                          <div class="col-lg-12">
                              <h1>Data kasir</h1>
                          </div>
                    <div class="modal-body">
                        <div>
                        <form action="/kasir/<?php echo e($kasir->id); ?>/update" method="POST">
                      <?php echo e(csrf_field()); ?>

                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nama kasir</label>
                        <input name="nama_kasir" type="text" placeholder="nama" value="<?php echo e($kasir->nama_kasir); ?>" class="form-control" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Kode kasir</label>
                        <input name="kode_kasir" disabled="disabled"  type="text" value="<?php echo e($kasir->kode_kasir); ?>" class="form-control" id="recipient-name">
                      </div>
											<div class="form-grub">
												<label for="examplelControlSelect"> Jenis Kelamin</label>
												<select name="jk" class="form-control" id="examplelControlSelect">
													<option value="Laki-Laki"> Laki-Laki</option>
													<option  value="Perempuan"> Perempuan </option>
												</select>
											</div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Umur</label>
                        <input name="umur" type="text" class="form-control" value="<?php echo e($kasir->umur); ?>" id="recipient-name">
                      </div>
											<div class="form-grub">
												<label for="examplelControlSelect"> Agama</label>
												<select name="agama" class="form-control" id="examplelControlSelect">
													<option value="Islam"> Islam</option>
													<option  value="Kristem"> Kristem </option>
													<option  value="Budha"> Budha </option>
													<option  value="Hindu"> Hindu </option>
													<option  value="Katolik"> Katolik </option>
													<option  value="Kong Hu Cu">  Kong Hu Cu </option>
												</select>
											</div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Alamat</label>
                        <input name="alamat" type="text" class="form-control" value="<?php echo e($kasir->alamat); ?>" id="recipient-name">
                      </div>
                      <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Tlp</label>
                        <input name="tlp" type="text" class="form-control" value="<?php echo e($kasir->tlp); ?>" id="recipient-name">
                      </div>
                  </div>
									<button type="submit" class="btn btn-warning">Simpan Data</button>
                      </form>
											 <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>