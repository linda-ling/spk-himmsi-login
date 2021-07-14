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

                <!-- MATRIKS KEPUTUSAN X ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Matriks Keputusan (X)</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Alternatif</th>
                                                @foreach ($kriterias as $Kriteria)
                                                <th class="text-center">{{ $Kriteria->nama_kriteria }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($X as $id_alternatif=>$a_kriteria)
                                            <tr>
                                                <td class="text-center">{{ $i }}</td>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $id_alternatif)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                @foreach ($a_kriteria as $kd_kriteria=>$nilai)
                                                <td class="text-center">{{ $nilai }}</td>
                                                @endforeach
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div><!--/card -->
                        </div><!-- /col -->
                    </div><!--/row -->
                </div><!--/card body  -->
                

                <!--MATRIKS KEPUTUSAN TERNORMALISASI (R)----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Matriks Keputusan Ternormalisasi (R)</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Alternatif</th>
                                                @foreach ($kriterias as $Kriteria)
                                                <th class="text-center">{{ $Kriteria->nama_kriteria }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($R as $id_alternatif=>$a_kriteria)
                                            <tr>
                                                <td class="text-center">{{ $i }}</td>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $id_alternatif)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                @foreach ($a_kriteria as $kd_kriteria=>$nilai)
                                                <td class="text-center">{{ $nilai }}</td>
                                                @endforeach
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>

                                    </table>
                                </div>

                            </div><!--/card -->
                        </div><!-- /col -->
                    </div><!--/row -->
                </div><!--/card body  -->

                <!--MATRIKS KEPUTUSAN TERNORMALISASI TERBOBOT (Y)----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Matriks Keputusan Ternormalisasi Terbobot (Y)</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">No.</th>
                                                <th class="text-center">Alternatif</th>
                                                @foreach ($kriterias as $Kriteria)
                                                <th class="text-center">{{ $Kriteria->nama_kriteria }}</th>
                                                @endforeach
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            $pengurutan=array();
                                            @endphp
                                            @foreach ($Y as $id_alternatif=>$a_kriteria)
                                            <tr>
                                                <td class="text-center">{{ $i }}</td>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $id_alternatif)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                @foreach ($a_kriteria as $kd_kriteria=>$nilai)
                                                <td class="text-center">{{ $nilai }}
                                                    @if (!isset($kd_kriteria))
                                                        @php
                                                        $pengurutan[$kd_kriteria]=array();
                                                        @endphp
                                                    @endif
                                                    @php
                                                    $pengurutan[$kd_kriteria][$i]=$nilai;
                                                    @endphp
                                                </td>
                                                @endforeach
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!--/card -->
                        </div><!-- /col -->
                    </div><!--/row -->
                </div><!--/card body  -->

                <!--SOLUSI IDEAL POSITIF(+) DAN NEGATIF(-)----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Solusi Ideal Positif (+) dan Negatif (-)</h3>
                                </div>
                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <tr>
                                            <tbody>
                                               
                                                <th class="text-center">MAX</th>
                                                @foreach($A_max as $a_max)
                                                <td class="text-center">{{ $a_max }}</td>
                                                @endforeach
                                            </tbody>
                                        </tr>

                                        <tr>
                                            <tbody>
                                                <th class="text-center">MIN</th>
                                                @foreach($A_min as $a_min)
                                                <td class="text-center">{{ $a_min }}</td>
                                                @endforeach
                                            </tbody>
                                        </tr>
                                        
                                    </table>
                                </div>

                            </div><!--/card -->
                        </div><!-- /col -->
                    </div><!--/row -->
                </div><!--/card body  -->

                {{-- 41yfh9k --}}

                <!--JARAK SOLUSI IDEAL (D)----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Jarak Solusi Ideal (D)</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center"></th>
                                                <th class="text-center">D+</th>
                                                <th class="text-center">D-</th>
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @for ($i = 1; $i <= count($D_plus); $i++) 
                                            @for ($i=1; $i <=count($D_min); $i++) 
                                            <tr>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $i)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-center">{{ $D_plus[$i] }}</td>
                                                <td class="text-center">{{ $D_min[$i] }}</td>
                                            </tr>
                                            @endfor
                                            @endfor
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

                <!--NILAI PREFERENSI----------------------------------------------------------------------------------------->
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">

                                <!--TEXT-->
                                <div class="card-header">
                                    <h3 class="card-title">Nilai Preferensi</h3>
                                </div>

                                <!-- TABEL -->
                                <div class="card-body table-responsive p-0" style="height: auto;">
                                    <table class="table table-head-fixed text-nowrap">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Alternatif</th>
                                                <th></th>
                                                <th class="text-center">Preferensi</th>
                                            </tr>
                                        </thead>

                                        <!--OBJEK TABEL-->
                                        <tbody>
                                            @php
                                            $i = 1;
                                            @endphp
                                            @foreach ($V as $id_alternatif=>$d_min)
                                            <tr>
                                                <td>
                                                    @foreach ($alternatifs as $Alternatif)
                                                    @if ($Alternatif->id_alternatif == $id_alternatif)
                                                    {{ $Alternatif->nama_calon }}
                                                    @endif
                                                    @endforeach
                                                </td>
                                                <td class="text-right">A{{ $id_alternatif }}</td>
                                                <td class="text-center">{{ $d_min }}</td>
                                            </tr>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>

                            </div><!--/card -->
                        </div><!-- /col -->
                    </div><!--/row -->
                </div><!--/card body  -->

            </div>
        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
</div>
<!-- /.container-fluid -->

@endsection