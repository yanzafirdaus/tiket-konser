<!DOCTYPE html>
<html>
    <title>Data Pesanan</title>
    <head></head>
    <body>
        <div>
            <h2>Data Pesanan</h2>
            <table border="1">
                <th>No.</th>
                <th>ID Pesanan</th>
                <th>Nama Pemesan</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Tanggal</th>
                <th>Status Checkin</th>
                <th colspan="2">Edit</th>
                @foreach ($data as $key => $tiket)    
                    <tr>
                        <td>{{ $key+1 }} </td>
                        <td>{{ $tiket->tiket_id }}</td>
                        <td>{{ $tiket->nama }}</td>
                        <td>{{ $tiket->alamat }}</td>
                        <td>{{ $tiket->email }}</td>
                        <td>{{ $tiket->no_hp }}</td>
                        <td>{{ date('d/m/Y', strtotime($tiket->tanggal)) }}</td>
                        @if ($tiket->status == 1)
                            <td>Belum Checkin</td>
                        @else
                            <td>Sudah Checkin</td>
                        @endif
                        <td><a href="/edit/{{ $tiket->tiket_id }}">Edit</a></td>
                        <td><a href="/delete/{{ $tiket->tiket_id }}">Delete</a></td>
                    </tr>
                @endforeach
            </table>
            
        </div>
    </body>
</html>