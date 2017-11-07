<!DOCTYPE html>
<html>
<head>
  <title>Print rekap</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }
    td, th {
      padding: 5px;
    }
    th {
      text-align: left;
    }
    @media  print {
      button {
        display: none;
      }
    }
  </style>
</head>
<body>
<table class="table table-bordered" border="1">
                    <tbody><tr>
                      <th style="width: 10px">#</th>
                      <th>Kamar</th>
                      <th>Tanggal</th>
                      <th style="width: 40px">Status</th>
                    </tr>
                    <?php  $no = 1  ?>
                    <?php $__currentLoopData = $kamars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kamar): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <td><?php echo e($no++); ?>.</td>
                      <td><a href="<?php echo e(url('detail-kamar?id=' . $kamar->id)); ?>"><?php echo e($kamar->nama); ?></a></td>
                      <td><?php echo e($kamar->tanggal); ?></td>
                      <td><span class="badge <?php echo e(room_status($kamar->status)); ?>"><?php echo e($kamar->status); ?></span></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
                  </table>
</body>
</html>