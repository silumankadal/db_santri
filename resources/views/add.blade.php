@extends('layouts/main')

@section('container')

<form>
        <div class="form-group mb-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Masukkan Nama">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group mb-2">
            <label for="gender">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" placeholder="Masukkan Jenis Kelamin">
        </div>
        <div class="form-group mb-2">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat">
        </div>
        <div class="form-group mb-2">
            <label for="pt">Perguruan tinggi</label>
            <input type="text" class="form-control" id="pt" placeholder="Masukkan Perguruan Tinggi">
        </div>
        <div class="form-group mb-2">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" placeholder="Masukkan Jurusan">
        </div>
        <div class="form-group mb-2">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" placeholder="Masukkan Status">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection