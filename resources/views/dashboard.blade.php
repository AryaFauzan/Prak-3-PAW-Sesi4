<div id="content-wrapper" class="d-flex flex-column">
    @extends('Layouts/main')
    @section('content')
    
    <div class="container-fluid" style="height: 300vh;">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">nama tabel</h1>
        <p class="mb-4">Ganti deskripsi</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data Praktikan</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NBI</th>
                                <th>Kelas</th>
                                <th>Praktikum</th>
                                <th>Sesi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Galuh</td>
                                <td>14621000021</td>
                                <td>A</td>
                                <td>PAW</td>
                                <td>Pagi</td>
                                <td>
                                    <a href="/edit" class="btn btn-warning">Edit</a>
                                    <a href="/blank.html" class="btn btn-danger m-1">Hapus</a>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Alvira</td>
                                <td>14621000022</td>
                                <td>B</td>
                                <td>PAW</td>
                                <td>Sore</td>
                                <td>
                                    <a href="/edit" class="btn btn-warning">Edit</a>
                                    <a href="/blank.html" class="btn btn-danger m-1">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <a href="/add" class="btn btn-primary">Tambah</a>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection