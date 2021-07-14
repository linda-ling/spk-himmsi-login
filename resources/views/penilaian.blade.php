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
                                    <h3 class="card-title">Penilaian</h3>
                                    <!--BUTTON-->
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-block btn-outline-info" data-toggle="modal"
                                            data-target="#tambahModal">
                                            <i class=" fas fa-folder-plus"></i> Tambahkan
                                        </button>
                                    </div>
                                </div>

                                <!-- TABEL ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                <div class="card-body table-responsive p-0" style="height:750px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Nama</th>
                                                @foreach ($kriterias as $Kriteria)
                                                <th class="text-center">{{ $Kriteria->nama_kriteria }}</th>
                                                @endforeach
                                                <th class="text-center ">Aksi</th>
                                            </tr>
                                        </thead>

                                        <!--Objek Tabel---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($nilais as $Nilai)
                                            <tr>
                                                <!--kode cut-->
                                                <td class="text-center">{{ $i }}</td>
                                                <td>{{ $Nilai->Alternatif->nama_calon }}</td>
                                                @foreach ($datanilais as $dn)
                                                @if ($Nilai->id_alternatif == $dn->id_alternatif)
                                                <td class="text-center">{{ $dn->nilai }}</td>
                                                @endif
                                                @endforeach
                                                <td class="project-actions text-center">
                                                    <div class="card-tools">
                                                        <a type="button" class="btn btn-outline-warning btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#editModal{{  $Nilai->id_alternatif  }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </a>

                                                        <a href="{{ route('penilaian-delete',$Nilai->id_alternatif) }}"
                                                            type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp

                                            <!--POP-UP EDIT-->
                                            <div class="modal fade" id="editModal{{  $Nilai->id_alternatif  }}"
                                                tabindex="-1" role="dialog" aria-labelledby="editModalTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalTitle">Edit Data Nilai
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal"
                                                            action="{{  route('penilaian-update',$Nilai->id_alternatif) }}"
                                                            method="POST">
                                                            {{  csrf_field()  }}
                                                            <div class="modal-body">
                                                                <!-- card-body -->
                                                                <div class="card-body">
                                                                    <div class=" form-group row">
                                                                        <label for="selectNama"
                                                                            class="col-sm-5 col-form-label">Alternatif</label>
                                                                        <div class="col-sm-7">
                                                                            <select type="text" class="form-control"
                                                                                id="selectNama" name="alternatif">
                                                                                @foreach ($alternatifs as $Alternatif)
                                                                                <option
                                                                                    value="{{ $Nilai->id_alternatif }}"
                                                                                    {{ $Nilai->Alternatif->id_alternatif == $Alternatif->id_alternatif ? 'selected':''}}>
                                                                                    {{ $Alternatif->nama_calon }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        @foreach ($kriterias as $Kriteria)
                                                                        <label for="selectNilai"
                                                                            class="col-sm-5 col-form-label"
                                                                            value="{{ $Kriteria->kd_kriteria }}">{{ $Kriteria->nama_kriteria }}</label>
                                                                        <div class="col-sm-7">
                                                                            <input type="hidden" name="kriteria[]"
                                                                                value="{{ $Kriteria->kd_kriteria }}" />
                                                                            <select type="text" class="form-control"
                                                                                id="selectNilai" name="nilai[]">
                                                                                @foreach ($datanilais as $dn)
                                                                                @if ($Nilai->id_alternatif == $dn->id_alternatif)
                                                                                @if ($Kriteria->kd_kriteria == $dn->kd_kriteria)
                                                                                <option value="1" {{ $dn->nilai == '1'?'selected': '' }}>1</option>
                                                                                <option value="2" {{ $dn->nilai == '2'?'selected': '' }}>2</option>
                                                                                <option value="3" {{ $dn->nilai == '3'?'selected': '' }}>3</option>
                                                                                <option value="4" {{ $dn->nilai == '4'?'selected': '' }}>4</option>
                                                                                @endif
                                                                                @endif
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                        @endforeach
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

                                            <!--POP-UP TAMBAHKAN-->
                                            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                                                aria-labelledby="tambahModalTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="tambahModalTitle">Tambah Data
                                                                Nilai</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal"
                                                            action="{{ route('penilaian-save') }}" method="POST">
                                                            <div class="modal-body">
                                                                {{ csrf_field() }}
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label for="selectAlternatif"
                                                                            class="col-sm-5 col-form-label">Alternatif</label>
                                                                        <div class="col-sm-7">
                                                                            <select type="text" class="form-control"
                                                                                id="selectAlternatif" name="alternatif">
                                                                                <option disabled value="Alternatif">
                                                                                    Nama Alternatif
                                                                                </option>
                                                                                @foreach ($alternatifs as $Alternatif)
                                                                                <option
                                                                                    value="{{ $Alternatif->id_alternatif }}">
                                                                                    {{ $Alternatif->nama_calon }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        @foreach ($kriterias as $Kriteria)
                                                                        <label for="selectKriteria"
                                                                            class="col-sm-5 col-form-label"
                                                                            value="{{ $Kriteria->kd_kriteria }}">
                                                                            {{ $Kriteria->nama_kriteria }}</label>
                                                                        <div class="col-sm-7">
                                                                            <input type="hidden" name="kriteria[]"
                                                                                value="{{ $Kriteria->kd_kriteria }}" />
                                                                            <select type="text" class="form-control"
                                                                                id="selectKriteria" name="nilai[]">
                                                                                <option disabled value="nilai"> Nilai
                                                                                    Kriteria </option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                            </select>
                                                                        </div>
                                                                        <br>
                                                                        @endforeach
                                                                    </div>

                                                                </div>
                                                                <!-- /.card-body -->
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="reset" class="btn btn-secondary"
                                                                    data-dismiss="modal">
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

                                            @endforeach
                                        </tbody>


                                    </table>
                                </div>
                                <!-- /.card-body -->

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