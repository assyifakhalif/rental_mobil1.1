@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Mobil</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_mobil">Nama Mobil</label>
                <input type="text" name="nama_mobil" id="nama_mobil" class="form-control" value="{{ old('nama_mobil') }}">
            </div>
            <div class="form-group">
                <label for="harga_mobil">Harga Sewa</label>
                <input type="number" name="harga_sewa" id="harga_sewa" class="form-control" value="{{ old('harga_sewa') }}">
            </div>
            <div class="form-group">
                <label for="bahan_bakar">Bahan Bakar</label>
                <input type="text" name="bahan_bakar" id="bahan_bakar" class="form-control" value="{{ old('bahan_bakar') }}">
            </div>
            <div class="form-group">
                <label for="jumlah_kursi">Jumlah Kursi</label>
                <input type="number" name="jumlah_kursi" id="jumlah_kursi" class="form-control" value="{{ old('jumlah_kursi') }}">
            </div>
            <div class="form-group">
                <label for="status">Status Mobil</label>
                <select name="status" id="status" class="form-control">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transmisi">Transmisi</label>
                <select name="transmisi" id="transmisi" class="form-control">
                    <option value="manual">Manual</option>
                    <option value="otomatis">Otomatis</option>
                </select>
            </div>
            {{-- <div class="form-group">
                <label for="status">Status</label>
                <select name="status" id="status">
                    <option value="tersedia">Tersedia</option>
                    <option value="tidak tersedia">Tidak Tersedia</option>
                </select>
            </div> --}}
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="5" class="form-control">{{ old('deskripsi') }}</textarea>
            </div>
            <div class="form-group">
                <label for="p3k">p3k</label>
                <select name="p3k" id="p3k" class="form-control">
                    <option value="1">Ada</option>
                    <option value="0">Tidak Ada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="audio">Audio</label>
                <select name="audio" id="audio" class="form-control">
                    <option value="1">Ada</option>
                    <option value="0">Tidak Ada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="charger">Charger</label>
                <select name="charger" id="charger" class="form-control">
                    <option value="1">Ada</option>
                    <option value="0">Tidak Ada</option>
                </select>
            </div>
            <div class="form-group">
                <label for="ac">AC</label>
                <select name="ac" id="ac" class="form-control">
                    <option value="1">Ada</option>
                    <option value="0">Tidak Ada</option>
                </select>
            </div>
             <div class="form-group">
                <label for="gambar">Gambar Mobil</label>
                <input type="file" name="gambar" id="gambar" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Tambah</button>
        </form>
    </div>
</div>

@endsection