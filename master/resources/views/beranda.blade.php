@extends('main')
@section('title', "Dashboard")
@section('content_main')
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
                    @php $no = 1 @endphp
                    @if($kamars->count() > 0)
                      @foreach($kamars as $kamar)
                      <tr>
                        <td>{{ $no++ }}.</td>
                        <td><a href="{{ url('detail-kamar?id=' . $kamar->id) }}">{{ $kamar->nama }}</a></td>
                        <td><span class="badge {{ room_status($kamar->status) }}">{{ $kamar->status }}</span></td>
                      </tr>
                      @endforeach
                    @else
                      <tr>
                        <td colspan="3">
                          <b><i>Tidak ada data untuk ditampilkan</i></b>
                        </td>
                      </tr>
                    @endif
                    
                  </tbody>
                  </table>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              
              </div>
              <!-- /.box-footer-->
            </div>

            </div>
@endsection