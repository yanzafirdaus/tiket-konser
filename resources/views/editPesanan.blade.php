<!DOCTYPE html>
<html>
    <title>Edit Tiket Konser</title>
    <head></head>
    <body>
        <div>
            <form id="form" method="POST" action="/edit-tiket">
                @csrf
                <h2>Edit Tiket</h2>
                <div>
                    <input type="hidden" id="tiketId" name="tiketId" value="{{ $tiket->tiket_id }}">
                    <label>Nama</label>
                    <input type="text" id="nama" name="nama" value="{{ $tiket->nama }}" required>
                </div>
                <br>
                <div>
                    <label>Alamat</label>
                    <textarea id="alamat" name="alamat" required>{{ $tiket->alamat }}</textarea>
                </div>
                <br>
                <div>
                    <label>No. Hp</label>
                    <input type="text" id="no_hp" name="no_hp" value="{{ $tiket->no_hp }}" required>
                </div>
                <br>
                <div>
                    <label>Email</label>
                    <input type="text" id="email" name="email" value="{{ $tiket->email }}" required>
                </div>
                <br>
                <div>
                    <label>Tanggal Konser</label>
                    <input type="date" id="date" name="date" value="{{ $tiket->tanggal }}" required>
                </div>
                <br>
                <div>
                    <label>Status</label>
                    @if ($tiket->status == 1)
                        <input type="radio" id="status" name="status" value="1" checked>Belum Checkin
                        <input type="radio" id="status" name="status" value="2">Sudah Checkin
                    @else
                        <input type="radio" id="status" name="status" value="1">Belum Checkin
                        <input type="radio" id="status" name="status" value="2"checked>Sudah Checkin
                    @endif
                </div>
                <br>
                <div>
                    <button type="submit">Simpan</button>
                </div>
               
            </form>
        </div>
    </body>
</html>