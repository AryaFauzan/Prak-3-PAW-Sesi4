@extends('Layouts/main')
@section('content')

    <!-- Main Content -->
    <div id="content">

        <!-- Begin Page Content -->
        <div class="container-fluid" style="width: 100%">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Tables</h1>
            <p class="mb-4">Deskripsi di sini <a target="_blank"
                    href="https://datatables.net">official DataTables documentation</a>.</p>

            <!-- body -->
            <form action="Edit Disini">
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Nama Peserta</label>
                    <input type="text" class="form-control" id="Edit Disini" name="Edit Disini"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ex: Ferro Dwi</div>
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">NBI</label>
                    <input type="text" class="form-control" id="Edit Disini" name="Edit Disini"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ex: 14621000023</div>
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Kelas Praktikum</label>
                    <input type="text" class="form-control" id="Edit Disini" name="Edit Disini"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ex: D</div>
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Praktikum</label>
                    <input type="text" class="form-control" id="Edit Disini" name="Edit Disini"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ex: PAW</div>
                </div>
                <!-- end form text field -->
                <!-- form text field -->
                <div class="mb-3">
                    <label for="exampleInputText" class="form-label">Sesi</label>
                    <input type="text" class="form-control" id="Edit Disini" name="Edit Disini"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Ex: Pagi</div>
                </div>
                <!-- end form text field -->
                
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- end body -->

        </div>
        <!-- /.container-fluid -->

    </div>

@endsection