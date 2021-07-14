<!--Menghubungkan dengan view template welcome---------------------------------------------------------------------------------------------------->
@extends('kriteria')

<!--Judul Halaman di template welcome-->
{{-- @section('judul_halaman', 'Dashboard') --}}


<!--Menghubungkan dengan yield di template welcome-->
@section('contentkriteria')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">

        <div class="col-sm-6">
          <h1 class="m-0">@yield('judul_halaman')</h1>
        </div><!-- /.col -->

        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
            <li class="breadcrumb-item active">Kriteria</li>
          </ol>
        </div><!-- /.col ------------------------------------------------------------------------------------------>

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->



  </div>
  <!-- ./col -->

</div>
<!-- ./col -->


<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
      <!--<div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-chart-pie mr-1"></i>
              Sales
            </h3>
            <div class="card-tools">
              <ul class="nav nav-pills ml-auto">
                <li class="nav-item">
                  <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                </li>
              </ul>
            </div>
          </div>
          <!- card-header ->
          <div class="card-body">
            <div class="tab-content p-0">
              <!- Morris chart - Sales ->
              <div class="chart tab-pane active" id="revenue-chart"
                   style="position: relative; height: 300px;">
                  <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
               </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
              </div>
            </div>
          </div>
          <!- card-body ->
        </div>
        <!- card -->

      <!-- DIRECT CHAT -->
      <div class="card direct-chat direct-chat-primary">
        <div class="card-header">
          <h3 class="card-title">Sistem Pendukung Keputusan Penerima Panitia Kegiatan HIMMSI</h3>

          <div class="card-tools">
            <!--<span title="3 New Messages" class="badge badge-primary">3</span>-->
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
            <!--<button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                <i class="fas fa-comments"></i>
              </button>-->
            <button type="button" class="btn btn-tool" data-card-widget="remove">
              <i class="fas fa-times"></i>
            </button>
          </div>

        </div>

        <!-- /.card-header -->
        <div class="card-body">
          <!-- Conversations are loaded here -->
          <div class="direct-chat-messages">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
              <div class="direct-chat-infos clearfix">
                <span class="contacts-list-name">
                  <i class="icon ion-load-b"> </i>Sistem Pendukung Keputusan (SPK)
                  <small class="contacts-list-date float-right text-black">Siapa?</small>
                </span>
                <span class="contacts-list-msg text-black">
                  <dd>Pada dasarnya Sistem Pendukung Keputusan atau dikenal juga dengan istilah Decision Support System
                    (DSS) ini merupakan
                    pengembangan lebih lanjut dari sistem informasi manajemen terkomputerisasi yang dirancang sedemikian
                    rupa sehingga bersifat
                    interaktif dengan pemakainya. Sifat interaktif ini dimaksudkan untuk memudahkan integrasi antara
                    berbagai komponen dalam proses
                    pengambilan keputusan seperti prosedur, kebijakan, teknik analisis, serta pengalaman dan wawasan
                    manajerial guna membentuk suatu kerangka
                    keputusan seperti prosedur, kebijakan, teknik analisis, serta pengalaman dan wawasan manajerial guna
                    membentuk suatu kerangka keputusan yang bersifat fleksibel
                  </dd>
                </span>
                <span class="contacts-list-name">
                  <i class="icon ion-load-b"> </i>TOPSIS
                </span>
                <span class="contacts-list-msg text-black">
                  <dd>TOPSIS (Technique for Others Preference by Similarity to Ideal Solution) merupakan salah satu
                    metode yang digunakan
                    untuk mengambil sebuah keputusan berdasarkan konsep bahwa alternatif yang terpilih harus memiliki
                    jarak terdekat dari
                    solusi ideal positif dan memiliki jarak terjauh dari solusi ideal negatif guna menentukan kedekatan
                    relatif dari suatu
                    alternatif dengan solusi optimal. Kemudian dengan merangking alternative berdasarkan prioritas nilai
                    kedekatan relatif suatu
                    alternative terhadap solusi ideal positif.</dd>
                </span>
              </div>
            </div>
            <!-- /.direct-chat-msg -->

            <!-- Pengertian Parameter -->
            <div class="direct-chat-contacts">
              <ul class="contacts-list">
                <li>
                  <div class="contacts-list-info">
                    <span class="contacts-list-name">
                      <i class="icon ion-load-b"> </i>Kriteria
                      <small class="contacts-list-date float-right">Siapa?</small>
                    </span>
                    <span class="contacts-list-msg">
                      <dd>Menurut KBBI (Kamus Besar Bahasa Indonesia), kriteria/kri·te·ria/ /kritéria/ n ukuran yang
                        menjadi dasar penilaian
                        atau penetapan sesuatu;</dd>
                      <dd>Kriteria merupakan salah satu ukuran yang menjelaskan sebuah dasar penilaian terhadap objek
                        atau sesuatu hal.</dd>
                      <dd>Suatu patokan sifat atau karakteristik yang ditetapkan sebagai alat pembanding bagi
                        karakteristik yang lain.
                        Misalnya, kriteria validasi tes inteligensi adalah suatu pengukuran tentang inteligensi dan
                        bukan tentang lainnya.</dd>
                    </span>
                  </div>
                  <!-- /.contacts-list-info -->

                </li>
                <!-- End Contact Item -->
              </ul>
              <!-- /.contacts-list -->
            </div>
            <!-- /.direct-chat-pane -->
          </div>
        </div>
        <!--/.direct-chat -->

  </section>
  <!-- /.Left col -->



</div>
<!-- /.row (main row) -->
</div><!-- /.container-fluid -->

@endsection