@extends('layouts.main')

@section('title', 'Dashboard')
@section('content')

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Category</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Book</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              genre
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Horror</a></li>
              <li><a class="dropdown-item" href="#">Romance</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
        <div class="row my-4 ms-5">
    <div class="col-lg-4 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="https://upload.wikimedia.org/wikipedia/id/5/50/KKN_di_Desa_Penari_%28sampul%29.jpg" alt="..." style="max-height: 400px">
            <div class="card-body">
              <h5 class="card-title">KKN</h5>
              <p class="card-text">Pada dasarnya 'KKN di Desa Penari' menceritakan tentang kisah sekelompok mahasiswa yang sedang melaksanakan program Kuliah Kerja Nyata (KKN) di sebuah desa terpencil di Banyuwangi, Jawa Timur. Cerita horor tersebut begitu digemari dan menjadi viral bahkan sempat dibukukan.</p>
              <a href="#" class="btn btn-secondary w-100">Read More</a>
            </div>
          </div>
    </div>
    <div class="col-lg-4 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/12/9/008bc689-5c60-4df7-9f69-b9a3e235f335.jpg" alt="..."  style="max-height: 400px ">
            <div class="card-body">
              <h5 class="card-title">This Time Tomorrow</h5>
              <p class="card-text">This Time Tomorrow menceritakan tentang seorang perempuan bernama Alice. Jelang ulang tahun yang ke-40, Alice yang menyukai pekerjaannya, apartemen, dan hubungan asmaranya, selama ini memuja sahabatnya seumur hidup. Ia hidup dari orang tua tunggal yang membesarkan namanya.</p>
              <a href="#" class="btn btn-secondary w-100">Read More</a>
            </div>
          </div>
    </div>
    <div class="col-lg-4 mb-3">
        <div class="card" style="width: 18rem;">
            <img src="https://mojokstore.com/wp-content/uploads/2016/11/Dilan-Dia-Adalah-Dilanku-tahun-1990-Pidi-Baiq-front.jpg" alt="..."  style="max-height: 400px ">
            <div class="card-body">
              <h5 class="card-title">Dilan 1990</h5>
              <p class="card-text">Dia Adalah Dilanku Tahun 1990” bercerita tentang kisah cinta dua remaja Bandung pada tahun 90an. Berawal dari seorang siswa bernama Dilan yang jatuh cinta dengan siswi pindahan dari SMA di Jakarta bernama Milea. Dilan memiliki beragam cara untuk mendekati dan mencuri perhatian Milea.</p>
              <a href="#" class="btn btn-secondary w-100">Read More</a>
            </div>
          </div>
    </div>
@endsection