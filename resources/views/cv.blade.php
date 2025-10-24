@extends('layouts.cv')

@section('title', 'CV - Bagus Riyadi')

@section('content')
<div class="cv-container">

  <!-- Bagian kiri -->
  <div class="left-section">
    <div class="profile-photo">
      <img src="{{ asset('img/profile.jpg') }}" alt="Foto Profil">
    </div>

    <h2 class="name">BAGUS RIYADI</h2>
    <h4 class="job-title">PROGRAMMER</h4>

    <div class="contact">
      <h3>KONTAK</h3>
      <p>📧 emailkamu@gmail.com</p>
      <p>📱 0812 3456 7890</p>
      <p>📍 Jl. Mawar No. 10, Bandung</p>
      <p>🌐 bocahkampus.com</p>
    </div>

    <div class="skills">
      <h3>KEMAMPUAN</h3>
      <ul>
        <li>Python</li>
        <li>Javascript</li>
        <li>Java</li>
        <li>HTML</li>
        <li>Kotlin</li>
      </ul>
    </div>

    <div class="language">
      <h3>BAHASA</h3>
      <p>Indonesia</p>
      <p>Inggris</p>
    </div>
  </div>

  <!-- Bagian kanan -->
  <div class="right-section">
    <section id="profil">
      <h3 class="section-title">PROFIL</h3>
      <p>
        Saya seorang programmer yang bersemangat dalam pengembangan web modern
        menggunakan Laravel dan JavaScript. Memiliki ketertarikan besar terhadap
        efisiensi sistem dan user experience.
      </p>
    </section>

    <section id="pendidikan">
      <h3 class="section-title">PENDIDIKAN</h3>
      <div class="timeline">
        <div><strong>2008–2012</strong> - S1 Ilmu Komputer, Universitas Indonesia</div>
        <div><strong>2007–2008</strong> - D1 Manajemen Informatika, Akademi Komputer Indonesia</div>
        <div><strong>2004–2007</strong> - SMAN 1 Bandung</div>
      </div>
    </section>

    <section id="prestasi">
      <h3 class="section-title">PRESTASI</h3>
      <div class="timeline">
        <div><strong>2012</strong> - Juara 1 Competitive Programming</div>
        <div><strong>2011</strong> - Juara 1 Hackathon 2011</div>
      </div>
    </section>
  </div>
</div>
@endsection
