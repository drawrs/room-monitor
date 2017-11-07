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
    @media print {
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
                    @php $no = 1 @endphp
                    @foreach($kamars as $kamar)
                    <tr>
                      <td>{{ $no++ }}.</td>
                      <td><a href="{{ url('detail-kamar?id=' . $kamar->id) }}">{{ $kamar->nama }}</a></td>
                      <td>{{ $kamar->tanggal }}</td>
                      <td><span class="badge {{ room_status($kamar->status) }}">{{ $kamar->status }}</span></td>
                    </tr>
                    @endforeach
                  </tbody>
                  </table>
</body>
</html>