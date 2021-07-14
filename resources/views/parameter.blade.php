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
                                    <h3 class="card-title">Parameter</h3>
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
                                <div class="card-body table-responsive p-0" style="height: 750px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Kriteria</th>
                                                <th class="text-center">Parameter</th>
                                                <th class="text-center">Nilai Parameter</th>
                                                <th class="text-center ">Aksi</th>
                                            </tr>
                                        </thead>

                                        <!--Objek Tabel---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                        @foreach ($parameters as $Parameter)
                                        <tbody>
                                            <tr>
                                                <td class="text-center">{{ $Parameter->kd_parameter }}</td>
                                                <td>{{ $Parameter->Kriteria->nama_kriteria }}</td>
                                                <td class="text-center">{{ $Parameter->nama_parameter }}</td>
                                                <td class="text-center">{{ $Parameter->nilai_parameter }}</td>
                                                <td class="project-actions text-center">
                                                    <div class="card-tools">
                                                        <a type="button" class="btn btn-outline-warning btn-sm"
                                                            data-toggle="modal"
                                                            data-target="#editModal{{ $Parameter->kd_parameter }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Edit
                                                        </a>

                                                        <a href="{{ route('parameter-delete',$Parameter->kd_parameter) }}"
                                                            type="button" class="btn btn-outline-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i>
                                                            Hapus
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>


                                            <!--POP-UP TAMBAHKAN------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            <div class="modal fade" id="tambahModal" tabindex="-1" role="dialog"
                                                aria-labelledby="tambahModalTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="tambahModalTitle">Tambah Data
                                                                Parameter
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal"
                                                            action="{{ route('parameter-save') }}" method="POST">
                                                            <div class="modal-body">
                                                                {{ csrf_field() }}
                                                                <div class="card-body">

                                                                    <div class="form-group row">
                                                                        <label for="selectKriteria"
                                                                            class="col-sm-2 col-form-label text-center">Kriteria</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control"
                                                                                id="selectKriteria" name="nama">
                                                                                <option disabled value="Kriteria">
                                                                                    Kriteria
                                                                                </option>
                                                                                @foreach ($kriterias as $Kriteria)
                                                                                <option
                                                                                    value="{{ $Kriteria->kd_kriteria }}">
                                                                                    {{ $Kriteria->nama_kriteria }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputParameter"
                                                                            class="col-sm-2 col-form-label text-center">Parameter</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                                id="inputParameter" name="parameter"
                                                                                placeholder="Parameter">
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="selectNilai"
                                                                            class="col-sm-2 col-form-label text-center">Nilai
                                                                            Parameter</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control"
                                                                                id="selectNilai" name="nilai">
                                                                                <option disabled value="">Nilai
                                                                                    Parameter</option>
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                            </select>
                                                                        </div>
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


                                            <!--POP-UP EDIT--------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                                            <div class="modal fade" id="editModal{{ $Parameter->kd_parameter }}" tabindex="-1" role="dialog" aria-labelledby="editModalTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalTitle">Edit Data Parameter</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>

                                                        <form class="form-horizontal" action="{{  route('parameter-update',$Parameter->kd_parameter) }}" method="POST">
                                                            {{ csrf_field() }}
                                                            <div class="modal-body">
                                                                <!-- card-body -->
                                                                <div class="card-body">
                                                                    <div class=" form-group row">
                                                                        <label for="selectKriteria" class="col-sm-2 col-form-label text-center">Kriteria</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control" id="selectKriteria" name="nama">
                                                                                <option disabled value="">Kriteria</option>
                                                                                @foreach ($kriterias as $Kriteria)
                                                                                <option value="{{ $Kriteria->kd_kriteria }}"
                                                                                    {{ $Parameter->Kriteria->kd_kriteria == $Kriteria->kd_kriteria ? 'selected': ''}}> {{ $Kriteria->nama_kriteria }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>

                                                                    <div class="form-group row">
                                                                        <label for="inputParameter" class="col-sm-2 col-form-label text-center">Parameter</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="inputParameter" name="parameter" value="{{ $Parameter->nama_parameter }}">
                                                                        </div>
                                                                    </div>

                                                                    <div class=" form-group row">
                                                                        <label for="selectNilai" class="col-sm-2 col-form-label text-center">Nilai Parameter</label>
                                                                        <div class="col-sm-10">
                                                                            <select type="text" class="form-control" id="selectNilai" name="nilai">
                                                                                <option disabled value="">Nilai Parameter</option>
                                                                                <option value="1" {{ $Parameter->nilai_parameter == '1'? 'selected': ''}}>1</option>
                                                                                <option value="2" {{ $Parameter->nilai_parameter == '2'? 'selected': ''}}>2</option>
                                                                                <option value="3" {{ $Parameter->nilai_parameter == '3'? 'selected': ''}}>3</option>
                                                                                <option value="4" {{ $Parameter->nilai_parameter == '4'? 'selected': ''}}>4</option>
                                                                            </select>
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
                                </div><!-- /.card-body -->
                                

                            </div><!--/.col (left) -->
                            
                        </div><!-- /.row -->
                        
                    </div><!--/.direct-chat -->
                    
                </div>
            </div>
        </section><!-- /.Left col -->
        
    </div><!-- /.row (main row) -->
    
</div><!-- /.container-fluid -->
<!--/ISI KONTEN-->

@endsection