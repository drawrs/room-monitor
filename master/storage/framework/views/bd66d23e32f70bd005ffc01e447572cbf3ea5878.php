<?php $__env->startSection('content_main'); ?>
<section class="content" id="app">

     <div class="col-md-8">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INFORMASI PRODUK</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tbody><tr>
                  <th style="width: 10px">#</th>
                  <th>Kamar</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>#</th>
                </tr>
                <?php  $no = 1  ?>
                <?php $__currentLoopData = $kamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($no++); ?>.</td>
                  <td><?php echo e($kamar->nama); ?></td>
                  <td><span class="badge <?php echo e(room_status($kamar->status)); ?>"><?php echo e($kamar->status); ?></span></td>
                  <td>
                    <?php echo e($kamar->keterangan); ?>

                  </td>
                  <td>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Ubah</button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Hapus</button>
                  </td> 
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody></table>
              <?php echo $kamars->links(); ?>

            </div>
          </div>
     </div>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>