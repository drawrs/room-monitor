  @extends('main')
  @section('title', "Tambah kamar")
  @section('content_main')
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
          <form role="form" method="POST" action="{{ url('tambah-kamar') }}">
            {!! csrf_field() !!}
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
                  @foreach($propertis as $properti)
                  <tr>
                    <td>
                      {{ $properti->judul }}
                    </td>
                    <td>
                      <input type="radio" name="status_properti[{{ $properti->id }}][]" value="ada" {{ ($properti->status == 'ada') ? "CHECKED" : "" }}> Ada
                    </td>
                    <td>
                      <input type="radio" name="status_properti[{{ $properti->id }}][]" value="tidak" {{ ($properti->status == 'tidak') ? "CHECKED" : "" }}> Tdk ada
                    </td>
                    <td>
                      <input type="radio" name="status_properti[{{ $properti->id }}][]" value="rusak"
                      {{ ($properti->status == 'rusak') ? "CHECKED" : "" }}> Rusak
                    </td>
                  </tr>
                    <!-- <label>
                      <input type="checkbox" {{ ($properti->status == 'ada') ? "CHECKED" : "" }}> 
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp; -->
                    @endforeach
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
          @endsection