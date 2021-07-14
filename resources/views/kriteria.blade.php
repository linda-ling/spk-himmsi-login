@extends('welcome')
<!--ISI KONTEN-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="card-header">
                                    <h3 class="card-title">Kriteria - Bobot</h3>
                                    <!--BUTTON-->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-block btn-outline-info" data-toggle="modal"
                                            data-target="#tambahModal">
                                            <i class=" fas fa-folder-plus"></i>
                                            Tambahkan
                                        </button>
                                    </div>
                                </div>

                                <!-- TABEL ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="card-body table-responsive p-0" style="height: 745px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Kriteria</th>
                                                <th class="text-center">Jenis</th>
                                                <th class="text-center">Bobot (%)</th>
                                                <th class="text-center width=" 200px">Aksi</th>
                                            </tr>
                                        </thead>

                                        <!--Objek Tabel---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                        @foreach ($kriterias as $Kriteria)
                                        <tbody>
                                            <tr>
                                                <td class="text-center">{{ $Kriteria->kd_kriteria}}</td>
                                                <td>{{ $Kriteria->nama_kriteria }}</td>
                                                <td class="text-center">{{ $Kriteria->jenis_kriteria }}</td>
                                                <td class="text-center">{{ $Kriteria->bobot_kriteria }}</td>
                                                <td class="project-actions text-center">
                                                    <div class="card-tools">
                                                        <a type="button" class="btn btn-outline-warning btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#editModal{{ $Kriteria->kd_kriteria }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </a>

                                                        <a href="{{ route('kriteria-delete',$Kriteria->kd_kriteria) }}"
                                                            type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <!--POP-UP EDIT--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            <div class="modal fade" id="editModal{{ $Kriteria->kd_kriteria }}"
                                                tabindex="-1" role="dialog" aria-labelledby="editModalTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalTitle">Edit
                                                                Data Kriteria</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal"
                                                            action="{{  route('kriteria-update',$Kriteria->kd_kriteria) }}"
                                                            method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="modal-body">
                                                                <!-- card-body -->
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label for="inputKriteria"
                                                                            class="col-sm-2 col-form-label text-center">Kriteria</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputKriteria" name="nama" value="{{ $Kriteria->nama_kriteria }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class=" form-group row">
                                                                        <label for="selectJenis"
                                                                            class="col-sm-2 col-form-label text-center">Jenis
                                                                            Kriteria</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control"
                                                                                id="selectJenis" name="jenis">
                                                                                <option disabled value="">Jenis
                                                                                    Kriteria</option>
                                                                                <option value="Benefit"
                                                                                    {{ $Kriteria->jenis_kriteria == 'Benefit'? 'selected': ''}}>
                                                                                    Benefit</option>
                                                                                <option value="Cost"
                                                                                    {{ $Kriteria->jenis_kriteria == 'Cost'? 'selected': ''}}>
                                                                                    Cost</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputBobot"
                                                                            class="col-sm-2 col-form-label text-center">Bobot
                                                                            Kriteria</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                id="inputBobot" name="bobot"
                                                                                placeholder="Bobot Kriteria"
                                                                                value="{{ $Kriteria->bobot_kriteria }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-secondary"
                                                                    data-dismiss="modal"><i class="fas fa-undo-alt"></i>
                                                                    Batal</button>
                                                                <button type="submit" class="btn btn-primary"><i
                                                                        class="fas fa-save"></i>
                                                                    Ubah</button>
                                                            </div>

                                                        </form>


                                                    </div>
                                                </div>
                                            </div>
                                            <!--/POP-UP EDIT-->



                                        </tbody>
                                        @endforeach

                                    </table>
                                </div>
                                <!-- /.card-body -->

                                <!--POP-UP TAMBAHKAN------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                                    aria-labelledby="tambahModalTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">

                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tambahModalTitle">Tambah Data
                                                    Kriteria
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <form class="form-horizontal" action="{{ route('kriteria-save') }}"
                                                method="POST">
                                                <div class="modal-body">
                                                    {{ csrf_field() }}
                                                    <div class="card-body">

                                                        <div class="form-group row">
                                                            <label for="inputKriteria"
                                                                class="col-sm-2 col-form-label text-center">Kriteria</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control"
                                                                    id="inputKriteria" name="nama"
                                                                    placeholder="Nama Kriteria">
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="selectJenis"
                                                                class="col-sm-2 col-form-label text-center">Jenis
                                                                Kriteria</label>
                                                            <div class="col-sm-10">
                                                                <select type="text" class="form-control"
                                                                    id="selectJenis" name="jenis">
                                                                    <option disabled value="">Jenis Kriteria</option>
                                                                    <option value="Benefit">Benefit</option>
                                                                    <option value="Cost">Cost</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="inputBobot"
                                                                class="col-sm-2 col-form-label text-center">Bobot
                                                                Kriteria</label>
                                                            <div class="col-sm-10">
                                                                <input type="text" class="form-control" id="inputBobot"
                                                                    name="bobot" placeholder="Bobot Kriteria">
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                                        <i class="fas fa-undo-alt"></i>
                                                        Batal</button>
                                                    <button type="submit" class="btn btn-primary">
                                                        <i class="fas fa-save"></i>
                                                        Simpan</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                                <!--/POP-UP TAMBAHKAN-->

                            </div>
                            <!--/.col (left) -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!--/.direct-chat -->
                </div>
            </div>
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
<!--/ISI KONTEN-->

@endsection