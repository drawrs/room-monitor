@extends('main')
@section('title', "Edit kamar")
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
              <form role="form" method="POST" action="{{ url('ubah-kamar') }}">
              {!! csrf_field() !!}
              <input type="hidden" name="kamar_id" value="{{ Request::input('id') }}" >
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Kamar</label>
                  <input type="text" value="{{ $kamar->nama }}" name="nama" class="form-control" placeholder="Nama kamar">
                </div>
                <div class="form-group">
              <label for="exampleInputEmail1">Member</label>
              <input type="text" name="member" class="form-control" placeholder="Member">
            </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kode</label>
                  <input type="text" value="{{ $kamar->kode }}" name="kode" class="form-control" placeholder="Kode kamar">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Keterangan</label>
                  <textarea class="form-control" name="keterangan" placeholder="Keterangan..">{{ $kamar->keterangan }}</textarea>
                </div>
                <div class="checkbox">
                <p><b>Kelengkapan</b> <button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modal-default">
                  <i class="fa fa-plus"></i> Tambah properti
                </button></p>
                
                <table class="table table-bordered">
                  <thead>
                    <th>{{ $kamar->nama  }} ( {{ $kamar->kode }} )</th>
                    <th colspan="3">Member</th>
                  </thead>
                  <tbody>
                @foreach($kamar->propertis as $properti)
                    <tr>
                        <td>
                        {{ $properti->judul }} <a href="{{ url('hapus-properti?id=' . $properti->id )}}" onclick="return confirm('Yakin ?');" style="cursor: pointer;">(-)</a>
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
                        <input type="radio" name="status" value="OoO" {{ ($kamar->status == 'OoO') ? "CHECKED" : "" }}> OoO
                      </td>
                      <td>
                        <input type="radio" name="status" value="VC" {{ ($kamar->status == 'VC') ? "CHECKED" : "" }}> VC
                      </td>
                      <td>
                        <input type="radio" name="status" value="Occupied" {{ ($kamar->status == 'Occupied') ? "CHECKED" : "" }}> Occupied
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <input type="radio" name="status" value="VD" {{ ($kamar->status == 'VD') ? "CHECKED" : "" }}> VD
                      </td>
                      <td>
                        <input type="radio" name="status" value="VCI" {{ ($kamar->status == 'VCI') ? "CHECKED" : "" }}> VCI
                      </td>
                      <td>
                        
                      </td>
                    </tr>
                  </tbody>
                </table>
              <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah properti</h4>
              </div>
              <div class="modal-body">
                
                  <input type="hidden" id="kamar_id" value="{{ $kamar->id }}">
                  <div class="form-group">
                    <input type="text" id="new_properti" class="form-control" name="judul" placeholder="Nama properti">
                  </div>
                
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="add_properti">Tambahkan</button>
         </form>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
              
              </div>
              <!-- /.box-footer-->
            </div>
@endsection