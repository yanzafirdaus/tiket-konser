<!DOCTYPE html>
<html>
    <title>Pesan Tiket Konser</title>
    <head></head>
    <body>
        <div>
            <form id="form" method="POST" action="/pesan-tiket">
                @csrf
                <h2>Pesan Tiket</h2>
                <div>
                    <label>Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                <br>
                <div>
                    <label>Alamat</label>
                    <textarea id="alamat" name="alamat" required></textarea>
                </div>
                <br>
                <div>
                    <label>No. Hp</label>
                    <input type="text" id="no_hp" name="no_hp" required>
                </div>
                <br>
                <div>
                    <label>Email</label>
                    <input type="text" id="email" name="email" required>
                </div>
                <br>
                <div>
                    <label>Tanggal Konser</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <br>
                <div>
                    <button type="submit">Pesan</button>
                </div>
                <br>
                <br>
                <div>
                    <button onclick="window.location='{{ route("login") }}'" type="button">Login Admin/Agen X</button>
                </div>
            </form>
        </div>
    </body>
</html>