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
		@media print {
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
        <script>
        	print_document();
        	function print_document(){
        		window.print();
        	}
        </script>
</body>
</html>