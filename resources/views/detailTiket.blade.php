<!DOCTYPE html>
<html>
    <title>Detail Tiket Konser</title>
    <head></head>
    <body>
        <div>
            <h2>Detail Tiket</h2>
            <div>
                <label>ID Tiket = {{ $tiket->tiket_id }}</label>
            </div>
            <br>
            <div>
                <label>Nama = {{ $tiket->nama }}</label>
            </div>
            <br>
            <div>
                <label>Alamat = {{ $tiket->alamat }}</label>
            </div>
            <br>
            <div>
                <label>No. Hp = {{ $tiket->no_hp }}</label>
            </div>
            <br>
            <div>
                <label>Email = {{ $tiket->email }}</label>
            </div>
            <br>
            <div>
                <label>Tanggal Konser = {{ date('d/m/Y', strtotime($tiket->tanggal)) }}</label>
            </div>            
            <br>
            <div>
                <button onclick="window.location='{{ route("dashboard") }}'" type="button">Kembali</button>
            </div>
        </div>
    </body>
</html>