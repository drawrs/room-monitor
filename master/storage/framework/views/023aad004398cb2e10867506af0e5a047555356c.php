<?php $__env->startSection('title', "" . $kamar->nama ." (".  $kamar->kode .")"); ?>
<?php $__env->startSection('content_main'); ?>
<div class="box">
  <div class="box-header with-border">
    <div class="box-title">
      <button class="btn btn-primary" id="print-document" onclick="window.open('<?php echo e(url('print-kamar?id='. $kamar->id)); ?>')">
        <i class="fa fa-print"></i> Export PDF
      </button>
      <?php if(Auth::user()): ?>
      <a href="<?php echo e(url('ubah-kamar?id=' . $kamar->id)); ?>" class="btn btn-default">
        <i class="fa fa-edit"></i> Ubah
      </a>
      <a href="<?php echo e(url('hapus-kamar?id=' .  $kamar->id)); ?>" onclick="return confirm('Hapus?')" class="btn btn-danger">
        <i class="fa fa-trash"></i> Hapus
      </a>
      <?php endif; ?>

    </div>
    <div class="box-tools pull-right">
      <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
        <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
        </div>
      </div>
      <div class="box-body">

        <table class="table table-bordered printed">
          <thead>
            <tr>
              <th>
                Kamar
              </th>
              <th colspan="3">
                <?php echo e($kamar->nama); ?> ( <?php echo e($kamar->kode); ?> )
              </th>
            </tr>
            <tr>
              <th>
                Tanggal
              </th>
              <th colspan="3">
                <?php echo e($kamar->tanggal); ?>

              </th>
            </tr>
            <tr>
              <th>
                Status
              </th>
              <th colspan="3">
                <span class="badge <?php echo e(room_status($kamar->status)); ?>"><?php echo e($kamar->status); ?></span>
              </th>
            </tr>
            <tr>
              <th>
                Member
              </th>
              <th colspan="3">
                ?
              </th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <th colspan="4">
              <b>Kelengkapan</b>
            </th>
          </tr>
            <?php $__currentLoopData = $kamar->propertis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $properti): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td>
                        <?php echo e($properti->judul); ?> <!-- <a href="<?php echo e(url('hapus-properti?id=' . $properti->id )); ?>" onclick="return confirm('Yakin ?');" style="cursor: pointer;">(-)</a> -->
                        </td>
                        <td>
                          <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" disabled="1" value="ada" <?php echo e(($properti->status == 'ada') ? "CHECKED" : ""); ?>> Ada
                        </td>
                        <td>
                          <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" disabled="1" value="tidak" <?php echo e(($properti->status == 'tidak') ? "CHECKED" : ""); ?>> Tdk ada
                        </td>
                        <td>
                          <input type="radio" name="status_properti[<?php echo e($properti->id); ?>][]" disabled="1" value="rusak"
                          <?php echo e(($properti->status == 'rusak') ? "CHECKED" : ""); ?>> Rusak
                        </td>
                    </tr>
                  <!-- <label>
                    <input type="checkbox" <?php echo e(($properti->status == 'ada') ? "CHECKED" : ""); ?>> 
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp; -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody>
        </table>


      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>