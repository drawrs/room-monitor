@extends('app.main')

@section('content_main')
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
                @php $no = 1 @endphp
                @foreach($kamars as $kamar)
                <tr>
                  <td>{{ $no++ }}.</td>
                  <td>{{ $kamar->nama }}</td>
                  <td><span class="badge {{ room_status($kamar->status) }}">{{ $kamar->status }}</span></td>
                  <td>
                    {{ $kamar->keterangan }}
                  </td>
                  <td>
                    <button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i> Ubah</button>
                    <button class="btn btn-danger btn-xs"><i class="fa fa-close"></i> Hapus</button>
                  </td> 
                </tr>
                @endforeach
              </tbody></table>
              {!! $kamars->links() !!}
            </div>
          </div>
     </div>

    </section>
@endsection