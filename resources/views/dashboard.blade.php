<!--Menghubungkan dengan view template welcome-->
@extends('welcome')

<!--Judul Halaman di template welcome-->
{{-- @section('judul_halaman', 'Dashboard') --}}


<!--Menghubungkan dengan yield di template welcome-->
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">

        <div class="col-lg-3 col-6">
          <!-- small box Kriteria-->
          <a href="#" class="small-box-footer">
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $kriterias }}</h3>
                <p>Kriteria</p>
              </div>
              <div class="icon">
                <i class="ion ion-checkmark-circled"></i>
              </div>
          </a>
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <a href="#" class="small-box-footer">
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $parameters }}</h3>
              <p>Parameter</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
        </a>
      </div>
    </div>
    <!-- ./col -->

    <div class="col-lg-3 col-6">
      <!-- small box -->
      <a href="#" class="small-box-footer">
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{ $alternatifs }}</h3>
            <p>Alternatif</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
      </a>
    </div>
</div>
<!-- ./col -->

<div class="col-lg-3 col-6">
  <!-- small box -->
  <a href="#" class="small-box-footer">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $nilais }}</h3>
        <p>Penilaian</p>
      </div>
      <div class="icon">
        <i class="ion ion-calculator"></i>
      </div>
  </a>
</div>
<!-- ./col -->
</div>
<!-- /.row -->


<!-- Main row -->
<div class="row">
  <!-- Left col -->
  <section class="col-lg-12 connectedSortable">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">

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
      </div>
    </div>
  </section>
  <!-- /.Left col -->
</div>
<!-- /.row (main row) -->
</section>
</div><!-- /.container-fluid -->

@endsection