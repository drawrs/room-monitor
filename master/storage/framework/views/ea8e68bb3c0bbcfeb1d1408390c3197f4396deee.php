  
  <?php $__env->startSection('title', "Tambah kamar"); ?>
  <?php $__env->startSection('content_main'); ?>
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
          <form role="form" method="POST" action="<?php echo e(url('tambah-kamar')); ?>">
            <?php echo csrf_field(); ?>

            <div class="form-group">
              <label for="exampleInputEmail1">Nama Kamar</label>
              <input type="text" name="nama" class="form-control" placeholder="Nama kamar">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Kode</label>
              <input type="text"  name="kode" class="form-control" placeholder="Kode kamar">
            </div>
            <div class="form-group">
              <label for="exampleInputFile">Keterangan</label>
              <textarea class="form-control" name="keterangan" placeholder="Keterangan.."></textarea>
            </div>
            <div class="checkbox">
              <p><b>Kelengkapan</b> </p>
              
              <table class="table table-bordered">
               
                <tbody>
                  <?php $__currentLoopData = $propertis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $properti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td>
                      <?php echo e($properti->judul); ?>

                    </td>
                    <td>
                      <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" value="ada" <?php echo e(($properti->status == 'ada') ? "CHECKED" : ""); ?>> Ada
                    </td>
                    <td>
                      <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" value="tidak" <?php echo e(($properti->status == 'tidak') ? "CHECKED" : ""); ?>> Tdk ada
                    </td>
                    <td>
                      <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" value="rusak"
                      <?php echo e(($properti->status == 'rusak') ? "CHECKED" : ""); ?>> Rusak
                    </td>
                  </tr>
                    <!-- <label>
                      <input type="checkbox" <?php echo e(($properti->status == 'ada') ? "CHECKED" : ""); ?>> 
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp; -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  <thead>
                    <th colspan="5">
                      Status
                    </th>
                  </thead>
                  <tbody>
                    <tr>
                      <td rowspan="2">
                        <button class="btn btn-primary btn-block">Simpan</button>
                      </td>
                      <td>
                        <input type="radio" name="status" value="OoO"> OoO
                      </td>
                      <td>
                        <input type="radio" name="status" value="VC"> VC
                      </td>
                      <td>
                        <input type="radio" name="status" value="Occupied"> Occupied
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="radio" name="status" value="VD"> VD
                      </td>
                      <td>
                        <input type="radio" name="status" value="VCI"> VCI
                      </td>
                      <td>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- /.modal -->
              </div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              
            </div>
            <!-- /.box-footer-->
          </div>
          <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>