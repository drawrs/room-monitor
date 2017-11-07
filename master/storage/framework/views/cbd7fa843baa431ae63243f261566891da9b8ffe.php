<!DOCTYPE html>
<html>
<head>
	<title>Print Kamar title</title>
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
<div class="panel">
	<button onclick="print_document()">
		Cetak
	</button>
	<br><br>
</div>
        <table class="table table-bordered printed" border="1">
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
        <script>
        	print_document();
        	function print_document(){
        		window.print();
        	}
        </script>
</body>
</html>