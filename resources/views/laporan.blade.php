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
                <!--SOLUSI IDEAL POSITIF(+) DAN NEGATIF(-)----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Laporan Perangkingan</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: 745px;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Rangking</th>
                                                <th>Alternatif</th>
                                                <th class="text-center">Nilai Akhir</th>
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach($V as $in => $val)
                                            <tr>
                                                <td class="text-center">{{ $loop->iteration }}</td>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $in)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-center">{{ $val }}</td>
                                            </tr>
                                            @endforeach
                                            @php
                                            $i++;
                                            @endphp
                                        </tbody>
                                    </table>
                                </div>

                            </div><!--/card -->
                            
                        </div><!-- /col -->
                    </div><!--/row -->
                    
                </div><!--/card body  -->
                
            </div>
        </section><!-- /.Left col -->
        
    </div><!-- /.row (main row) -->
    
</div><!-- /.container-fluid -->
<!--/ISI KONTEN-->

@endsection