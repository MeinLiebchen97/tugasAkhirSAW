@extends('layouts.main')

@section('container')
{{-- <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Tentang Sistem</h1>
        <p class="lead">Sistem ini adalah sistem pendukung keputusan yang di bangun untuk memenuhi tugas akhir di Institut Teknologi Batam.</p>
      </div>
    </div>
  </div> --}}

  <div class="container px-4 py-5" id="featured-3">
    <h2 class="pb-2 border-bottom">About</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="feature col">

        <h3 class="fs-2">Nama Pembuat</h3>
        <p>Muhammad Ali Imron</p>

      </div>
      <div class="feature col">

        <h3 class="fs-2">Tentang Sistem</h3>
        <p>Sistem ini adalah sebuah sistem pendukung keputusan menggunakan metode perhitungan Simple Additive Weighting.</p>

      </div>
      <div class="feature col">

        <h3 class="fs-2">Tujuan Sistem</h3>
        <p>Sistem ini adalah sistem pendukung keputusan yang di bangun untuk memenuhi tugas akhir di Institut Teknologi Batam.</p>

      </div>
    </div>
  </div>
@endsection