<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/css/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <h4>Edit Buku</h4>
        <form action="{{ route('buku.update', $buku->id) }}" method="post">
            @csrf
            <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="{{ $buku->judul }}">
            </div>
            <div class="form-group">
                <label for="penulis">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" value="{{ $buku->penulis }}">
            </div>
            <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" value="{{ $buku->harga }}">
            </div>
            <div class="form-group">
                <label for="tgl_terbit">Tgl. Terbit</label>
                <input type="date" class="form-control" id="tgl_terbit" name="tgl_terbit" value="{{ $buku->tgl_terbit }}">
            </div>

            <button onclick="return confirm('Apakah ingin menyimpan perubahan?')" type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="/buku" class="btn btn-secondary">Batal</a>
        </form>
    </div>

    <!-- <div class="container">
    <h4>Edit Buku</h4>
    <form action="{{route('buku.update',$buku->id)}}" method="POST">
        @csrf
        <div>Judul <input type="text" name="judul" id="judul" value="{{$buku->judul}}"></div>
        <div>Penulis <input type="text" name="penulis" id="penulis" value="{{$buku->penulis}}"></div>
        <div>Harga<input type="text" name="harga" id="harga" value="{{$buku->harga}}"></div>
        <div>Tgl. Terbit <input type="text" name="tgl_terbit" id="tgl_terbit" value="{{$buku->tgl_terbit}}"></div>
        <div><button type="submit">Simpan</button></div>
        <a href="/buku"> Batal</a>
    </form>
</div> -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>

</body>

</html>