<?php $__env->startSection('content_main'); ?>
<section class="content" id="app">

     <div class="col-md-6">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INFORMASI PRODUK</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?php echo e(url('tambah_prodak')); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>

            <input type="hidden" name="kode" v-model="barcode">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Produk *</label>
                  <input type="text" class="form-control" name="nama" id="exampleInputEmail1" placeholder="Masukan nama produk">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga *</label>
                  <input type="number" class="form-control" name="harga" id="exampleInputPassword1" placeholder="Rp. 130.000,00">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto Produk *</label>
                  <input type="file" name="photo" @change="onFileChange">

                  <p class="help-block">Gunakan foto produk yang jelas dan ukuran yang sesuai {{ message }} </p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Deskripsi</label>
                  <textarea class="form-control" name="deskripsi" id="exampleInputFile"></textarea>
                </div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
     </div>
     <div class="col-md-6">
         <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">{{ txt_barcode }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body">
                <h1>{{ barcode }}</h1>
            </div>
            <div class="overlay" v-if="show_loader">
              <i class="fa fa-refresh fa-spin"></i> 
            </div>
          </div>
          <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-black"  v-bind:style="{background : temp_image}">
              <h3 class="widget-user-username">Foto produk</h3>
              <div v-if="image">
                <button @click="removeImage" class="btn btn-default"><i class="fa fa-close"></i> Remove image</button>
              </div>
              <!-- <h5 class="widget-user-desc">Web Designer</h5> -->
            </div>
            
            
          </div>
     </div>

    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('app.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>