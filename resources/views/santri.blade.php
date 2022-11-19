@extends('layouts.main')
@section('content')
<div id="wrapper">
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <div class="modal fade" id="addsantri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Add Santri</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="col-md-6">
                                <form method="POST" action="{{ route('santri.store')}}">
                                    @csrf
                                    <input type="text" class="border rounded-0 form-control"
                                        style="width: 440px;margin-bottom: 15px;" placeholder="Nama" name="nama" />
                                    <select type="text" class="border rounded-0 form-control"
                                        style="width: 440px;margin-bottom: 15px;" placeholder="Gender" name="gender" />
                                    <option value="Laki - Laki" selected>Laki - Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    </select>
                                    <input type="text" class="border rounded-0 form-control"
                                        style="width: 440px;margin-bottom: 15px;" placeholder="Alamat" name="alamat" />
                                    <input type="text" class="border rounded-0 form-control"
                                        style="width: 440px;margin-bottom: 15px;" placeholder="Perguruan Tinggi"
                                        name="pt" />
                                    <input type="text" class="border rounded-0 form-control" placeholder="Jurusan"
                                        style="margin-bottom: 15px;width: 440px;" name="jurusan" />
                                    <select type="text" class="border rounded-0 form-control"
                                        style="width: 440px;margin-bottom: 15px;" placeholder="Status" name="status" />
                                    <option value="Aktif" selected>Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                    <input type="submit" class="btn btn-success" value="Save Changes"
                                        name="submit"></input>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col" style="width: 505px;">
                        <h1 class="h3 mb-2 text-gray-800">Sistem Manajemen Data Mahasantri</h1>
                    </div>
                    <div class="col"> <button
                            class="btn btn-outline-success btn-sm float-none float-sm-none add-another-btn"
                            type="button" style="margin-right: 2px; margin-bottom: 8px;" data-toggle="modal"
                            data-target="#addsantri">Add
                            Santri<i class="fas fa-plus-circle edit-icon"></i></button>
                    </div>
                </div>
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Santri</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered data" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nama Lengkap</th>
                                        <th>Gender</th>
                                        <th>Alamat</th>
                                        <th>Perguruan Tinggi</th>
                                        <th>Jurusan</th>
                                        <th>Status</th>
                                        <th>Manage</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($mysantri as $data)
                                    <tr>
                                        <td class="namecntr"><img class="rounded-circle mr-2" width="30" height="30"
                                                src="{{ asset('img/avatars/avatar5.jpeg') }}"><?=$data['nama']?>
                                        </td>
                                        <td><?=$data['gender']?></td>
                                        <td><?=$data['alamat']?></td>
                                        <td><?=$data['pt']?></td>
                                        <td><?=$data['jurusan']?></td>
                                        <td><?=$data['status']?></td>
                                        <td><i class="fas fa-edit iconedit" style="padding-left: 9px;" type="button"
                                                data-toggle="modal" data-target="#edit<?=$data['id']?>"></i>
                                            <i class="material-icons icondelete" style="padding-left: 8px;"
                                                type="button" data-toggle="modal"
                                                data-target="#deletemas<?=$data['id']?>">delete</i>
                                        </td>
                                    </tr>
                                    <div class="modal fade" id="edit<?=$data['id']?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Santri</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-6">
                                                        <form method="POST"
                                                            action="{{ route('santri.update', $data['id'])}}">
                                                            @csrf
                                                            <input type="text" class="border rounded-0 form-control"
                                                                style="width: 440px;margin-bottom: 15px;"
                                                                placeholder="Nama" name="nama"
                                                                value="<?=$data['nama']?>" />
                                                            <select type="text" class="border rounded-0 form-control"
                                                                style="width: 440px;margin-bottom: 15px;"
                                                                placeholder="Gender" name="gender" />
                                                            <option
                                                                <?= ($data['gender'] == "Laki - Laki") ? 'selected' : '' ?>
                                                                value="Laki - Laki">Laki - Laki</option>
                                                            <option
                                                                <?= ($data['gender'] == "Perempuan") ? 'selected' : '' ?>
                                                                value="Perempuan">Perempuan</option>
                                                            </select>
                                                            <input type="text" class="border rounded-0 form-control"
                                                                style="width: 440px;margin-bottom: 15px;"
                                                                placeholder="Alamat" name="alamat"
                                                                value="<?=$data['alamat']?>" />
                                                            <input type="text" class="border rounded-0 form-control"
                                                                style="width: 440px;margin-bottom: 15px;"
                                                                placeholder="Perguruan Tinggi" name="pt"
                                                                value="<?=$data['pt']?>" />
                                                            <input type="text" class="border rounded-0 form-control"
                                                                placeholder="Jurusan"
                                                                style="margin-bottom: 15px;width: 440px;" name="jurusan"
                                                                value="<?=$data['jurusan']?>" />
                                                            <select type="text" class="border rounded-0 form-control"
                                                                style="width: 440px;margin-bottom: 15px;"
                                                                placeholder="Status" name="status" />
                                                            <option
                                                                <?= ($data['status'] == "Aktif") ? 'selected' : '' ?>
                                                                value="Aktif">Aktif</option>
                                                            <option
                                                                <?= ($data['status'] == "Tidak Aktif") ? 'selected' : '' ?>
                                                                value="Tidak Aktif">Tidak Aktif</option>
                                                            </select>
                                                            <input type="submit" class="btn btn-success"
                                                                value="Save Changes" name="update"></input>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="deletemas<?=$data['id']?>" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Delete Santri</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="col-md-6">
                                                        <form method="POST"
                                                            action="{{ route('santri.destroy', $data['id'])}}">
                                                            @csrf
                                                            <h6>Apakah Anda Yakin?</h6>
                                                            <input type="submit" class="btn btn-success" value="Okay"
                                                                name="delete"></input>
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><strong>Nama Lengkap</strong></td>
                                        <td><strong>Gender</strong></td>
                                        <td><strong>Alamat</strong></td>
                                        <td><strong>Perguruan Tinggi</strong></td>
                                        <td><strong>Jurusan</strong></td>
                                        <td><strong>Status</strong></td>
                                        <td><strong>Manage</strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
</div>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/sb-admin-2.min.js') }}"></script>
<script src="{{ asset('js/theme.js') }}"></script>
<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.data').DataTable();
});
</script>
@stop