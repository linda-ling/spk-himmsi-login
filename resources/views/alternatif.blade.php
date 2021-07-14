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
                                    <h3 class="card-title">Alternatif</h3>
                                    <!--BUTTON-->
                                    <div class="card-tools">
                                        <br>
                                        <button type="button" class="btn btn-block btn-outline-info" data-toggle="modal" data-target="#tambahModal">
                                            <i class=" fas fa-folder-plus"></i>
                                            Tambahkan
                                        </button>
                                    </div>
                                </div>

                                <!-- TABEL ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="card-body table-responsive p-0" style="height: 750px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Nama Lengkap</th>
                                                <th class="text-center">NIM</th>
                                                <th class="text-center">Kelas</th>
                                                <th class="text-center ">Alamat</th>
                                                <th class="text-center ">Pilihan Sie</th>
                                                <th class="text-center ">Aksi</th>
                                            </tr>
                                        </thead>

                                        <!--Objek Tabel---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            @php
                                            $i = 1;
                                            @endphp
                                        @foreach ($alternatifs as $Alternatif)
                                        <tbody>
                                            <tr>
                                                <td class="text-center">{{ $Alternatif->id_alternatif}}</td>
                                                <td>{{ $Alternatif->nama_calon }}</td>
                                                <td class="text-center">{{ $Alternatif->nim }}</td>
                                                <td class="text-center">{{ $Alternatif->kelas }}</td>
                                                <td class="text-center">{{ $Alternatif->alamat }}</td>
                                                <td class="text-center">{{ $Alternatif->pilihan_sie }}</td>
                                                <td class="project-actions text-center">
                                                    <div class="card-tools">
                                                        <a type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#editModal{{ $Alternatif->id_alternatif }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </a>

                                                        <a href="{{ route('alternatif-delete',$Alternatif->id_alternatif) }}" type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!--POP-UP TAMBAHKAN------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="tambahModalTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="tambahModalTitle">Tambah Data Alternatif
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal" action="{{ route('alternatif-save') }}" method="POST">
                                                            <div class="modal-body">
                                                                {{ csrf_field() }}
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label for="inputAlternatif" class="col-sm-2 col-form-label text-center">Nama Lengkap</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputAlternatif" name="alternatif" placeholder="Nama Lengkap">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputnNim" class="col-sm-2 col-form-label text-center">NIM</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputNim" name="nim" placeholder="Nomor Induk Mahasiswa">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputnKelas" class="col-sm-2 col-form-label text-center">Kelas</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputKelas" name="kelas" placeholder="Contoh Penulisan : 17-SI-04">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputnAlamat" class="col-sm-2 col-form-label text-center">Alamat</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputAlamat" name="alamat" placeholder="Alamat Lengkap">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="selectPilihan" class="col-sm-2 col-form-label text-center">Pilihan Sie</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control" id="selectPilihan" name="pilihan">
                                                                                <option disabled value="">Sie yang dipilih</option>
                                                                                <option value="Sie Acara">Sie Acara</option>
                                                                                <option value="Sie Humas">Sie Humas</option>
                                                                                <option value="Sie Konsumsi">Sie Konsumsi</option>
                                                                                <option value="Sie KSK">Sie KSK</option>
                                                                                <option value="Sie PDD">Sie PDD</option>
                                                                                <option value="Sie Perlengkapan">Sie Perlengkapan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div> <!-- /.card-body -->
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-secondary" data-dismiss="modal">
                                                                    <i class="fas fa-undo-alt"></i>
                                                                    Batal
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    <i class="fas fa-save"></i>
                                                                    Simpan
                                                                </button>
                                                            </div>

                                                        </form> 
                                                    </div>
                                                </div>
                                            </div> <!--/POP-UP TAMBAHKAN-->


                                            <!--POP-UP EDIT--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            <div class="modal fade" id="editModal{{ $Alternatif->id_alternatif }}" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalTitle">Edit Data Alternatif</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal" action="{{  route('alternatif-update',$Alternatif->id_alternatif) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="modal-body">
                                                                <!-- card-body -->
                                                                <div class="card-body">
                                                                    <div class="form-group row">
                                                                        <label for="inputAlternatif" class="col-sm-2 col-form-label text-center">Nama Lengkap</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputAlternatif" name="alternatif" value="{{ $Alternatif->nama_calon }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputNim" class="col-sm-2 col-form-label text-center">NIM</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputNim" name="nim" value="{{ $Alternatif->nim }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputKelas" class="col-sm-2 col-form-label text-center">Kelas</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputKelas" name="kelas" value="{{ $Alternatif->kelas }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputAlamat" class="col-sm-2 col-form-label text-center">Alamat</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputAlamat" name="alamat" value="{{ $Alternatif->alamat }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class=" form-group row">
                                                                        <label for="selectNilai" class="col-sm-2 col-form-label text-center">Pilihan Sie</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control" id="selectNilai" name="nilai">
                                                                                <option disabled value="">Pilihan Sie </option>
                                                                                <option value="Sie Acara" {{ $Alternatif->pilihan_sie == 'Sie Acara'? 'selected': ''}}> Sie Acara </option>
                                                                                <option value="Sie Humas" {{ $Alternatif->pilihan_sie == 'Sie Humas'? 'selected': ''}}> Sie Humas </option>
                                                                                <option value="Sie Konsumsi" {{ $Alternatif->pilihan_sie == 'Sie Konsumsi'? 'selected': ''}}> Sie Konsumsi</option>
                                                                                <option value="Sie KSK" {{ $Alternatif->pilihan_sie == 'Sie KSK'? 'selected': ''}}> Sie KSK</option>
                                                                                <option value="Sie PDD" {{ $Alternatif->pilihan_sie == 'Sie PDD'? 'selected': ''}}> Sie PDD</option>
                                                                                <option value="Sie Perlengkapan" {{ $Alternatif->pilihan_sie == 'Sie Perlengkapan'? 'selected': ''}}> Sie Perlengkapan</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                </div> <!-- /.card-body -->
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-secondary" data-dismiss="modal"><i class="fas fa-undo-alt"></i>
                                                                    Batal
                                                                </button>
                                                                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>
                                                                    Ubah
                                                                </button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div> <!--/POP-UP EDIT-->

                                            @php
                                                $i++
                                            @endphp
                                        </tbody>
                                        @endforeach

                                    </table>
                                </div> <!-- /.card-body -->

                            </div> <!--/.col (left) -->
                        </div> <!-- /.row -->
                    </div> <!--/.direct-chat -->
                </div>
            </div>
        </section> <!-- /.Left col -->
    </div> <!-- /.row (main row) -->
</div><!-- /.container-fluid -->
<!--/ISI KONTEN-->

@endsection