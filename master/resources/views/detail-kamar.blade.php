@extends('main')
@section('title', "" . $kamar->nama ." (".  $kamar->kode .")")
@section('content_main')
<div class="box">
  <div class="box-header with-border">
    <div class="box-title">
      <button class="btn btn-primary" id="print-document" onclick="window.open('{{ url('print-kamar?id='. $kamar->id) }}')">
        <i class="fa fa-print"></i> Export PDF
      </button>
      @if(Auth::user())
      <a href="{{ url('ubah-kamar?id=' . $kamar->id) }}" class="btn btn-default">
        <i class="fa fa-edit"></i> Ubah
      </a>
      <a href="{{ url('hapus-kamar?id=' .  $kamar->id) }}" onclick="return confirm('Hapus?')" class="btn btn-danger">
        <i class="fa fa-trash"></i> Hapus
      </a>
      @endif

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
                {{ $kamar->nama }} ( {{$kamar->kode}} )
              </th>
            </tr>
            <tr>
              <th>
                Tanggal
              </th>
              <th colspan="3">
                {{ $kamar->tanggal }}
              </th>
            </tr>
            <tr>
              <th>
                Status
              </th>
              <th colspan="3">
                <span class="badge {{ room_status($kamar->status) }}">{{ $kamar->status }}</span>
              </th>
            </tr>
            <tr>
              <th>
                Member
              </th>
              <th colspan="3">
                {{ $kamar->member }}
              </th>
            </tr>
          </thead>
          <tbody>
          <tr>
            <th colspan="4">
              <b>Kelengkapan</b>
            </th>
          </tr>
            @foreach($kamar->propertis as $properti)
                    <tr>
                        <td>
                        {{ $properti->judul }} <!-- <a href="{{ url('hapus-properti?id=' . $properti->id )}}" onclick="return confirm('Yakin ?');" style="cursor: pointer;">(-)</a> -->
                        </td>
                        <td>
                          <input type="radio" name="status_properti[{{ $properti->id }}][]" disabled="1" value="ada" {{ ($properti->status == 'ada') ? "CHECKED" : "" }}> Ada
                        </td>
                        <td>
                          <input type="radio" name="status_properti[{{ $properti->id }}][]" disabled="1" value="tidak" {{ ($properti->status == 'tidak') ? "CHECKED" : "" }}> Tdk ada
                        </td>
                        <td>
                          <input type="radio" name="status_properti[{{ $properti->id }}][]" disabled="1" value="rusak"
                          {{ ($properti->status == 'rusak') ? "CHECKED" : "" }}> Rusak
                        </td>
                    </tr>
                  <!-- <label>
                    <input type="checkbox" {{ ($properti->status == 'ada') ? "CHECKED" : "" }}> 
                  </label>
                  &nbsp;&nbsp;&nbsp;&nbsp; -->
                @endforeach
          </tbody>
        </table>


      </div>
      <!-- /.box-body -->
      <div class="box-footer">

      </div>
    </div>
    @endsection