<?php $__env->startSection('title', "Dashboard"); ?>
<?php $__env->startSection('content_main'); ?>
<div class="col-md-6">
<div class="box">
              <div class="box-header with-border">
                <h3 class="box-title"></h3>
                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
                  <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                  <i class="fa fa-times"></i></button>
                </div>
              </div>
              <div class="box-body">
                    <table class="table table-bordered">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Kamar</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                    <?php  $no = 1  ?>
                    <?php if($kamars->count() > 0): ?>
                      <?php $__currentLoopData = $kamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                        <td><?php echo e($no++); ?>.</td>
                        <td><a href="<?php echo e(url('detail-kamar?id=' . $kamar->id)); ?>"><?php echo e($kamar->nama); ?></a></td>
                        <td><span class="badge <?php echo e(room_status($kamar->status)); ?>"><?php echo e($kamar->status); ?></span></td>
                      </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                      <tr>
                        <td colspan="3">
                          <b><i>Tidak ada data untuk ditampilkan</i></b>
                        </td>
                      </tr>
                    <?php endif; ?>
                    
                  </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              
              </div>
              <!-- /.box-footer-->
            </div>

            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>