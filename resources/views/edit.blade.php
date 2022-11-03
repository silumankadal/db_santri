@extends('layouts.main')

@section('container')
    <form>
        <div class="form-group mb-2">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" value="{{ $data->nama }}">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
        </div>
        <div class="form-group mb-2">
            <label for="gender">Jenis Kelamin</label>
            <input type="text" class="form-control" id="gender" value="{{ $data->gender }}">
        </div>
        <div class="form-group mb-2">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="{{ $data->alamat }}">
        </div>
        <div class="form-group mb-2">
            <label for="pt">Perguruan tinggi</label>
            <input type="text" class="form-control" id="pt" value="{{ $data->pt }}">
        </div>
        <div class="form-group mb-2">
            <label for="jurusan">Jurusan</label>
            <input type="text" class="form-control" id="jurusan" value="{{ $data->jurusan }}">
        </div>
        <div class="form-group mb-2">
            <label for="status">Status</label>
            <input type="text" class="form-control" id="status" value="{{ $data->status }}">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
    <!-- <article>
        <h2>{{ $data->nama }}</h2>
    </article> -->


    <!-- <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form> -->
    <a href="/santri"> back to santri</a>
@endsection