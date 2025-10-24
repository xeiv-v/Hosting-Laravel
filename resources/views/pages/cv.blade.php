@extends('layouts.cv')

@section('title', 'CV - Evita Dwi Kurniati')

@section('content')
<div class="cv-container">

  <!-- Bagian kiri -->
  <div class="left-section">
    <div class="profile-photo">
      <img src="{{ asset('evi.jpg') }}" alt="Foto Profil">
    </div>

    <h2 class="name">Evita Dwi Kurniati</h2>
    <h4 class="job-title">Mahasiswi Semester 5 Prodi Sistem Informasi</h4>

    <div class="contact">
      <h3>KONTAK</h3>
      <p>
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/gmail.svg" 
             alt="Gmail" width="16" style="vertical-align: middle; margin-right: 6px;">
        evitaadk01@gmail.com
      </p>
      <p>
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" 
             alt="WhatsApp" width="16" style="vertical-align: middle; margin-right: 6px;">
        0896-2366-4280
      </p>
    
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linkedin.svg" 
             alt="LinkedIn" width="16" style="vertical-align: middle; margin-right: 6px;">
        Evita Dwi
      </p>
      <p>
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" 
             alt="Instagram" width="16" style="vertical-align: middle; margin-right: 6px;">
        xeiv_v
      </p>
      <p>
        <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/googlemaps.svg" 
             alt="Location" width="16" style="vertical-align: middle; margin-right: 6px;">
        Yogyakarta
      </p>
    </div>

    {{-- Daftar kemampuan --}}
    @include('includes.skill-list')


    <div class="hobby">
      <h3>HOBI</h3>
      <ul>
        <li>Membaca Artikel Teknologi</li>
        <li>Fotografi</li>
        <li>Seni dan Kerajinan</li>
      </ul>
    </div>
  </div>

  <!-- Bagian kanan -->
  <div class="right-section">
    <section id="profil">
      <h3 class="section-title">PROFIL</h3>
      <p>
        Saya adalah mahasiswi semester 5 Program Studi Sistem Informasi di Universitas Teknologi Yogyakarta. 
        Saya memiliki ketertarikan dalam bidang pengembangan web (Web Development), khususnya dalam membangun 
        website yang fungsional, interaktif, dan user-friendly. Saat ini saya terus mengasah keterampilan dalam 
        HTML, CSS, JavaScript, dan PHP, serta terbuka untuk mempelajari framework maupun teknologi baru yang 
        mendukung perkembangan di bidang web development.
      </p>
    </section>

    <section id="pendidikan">
      <h3 class="section-title">PENDIDIKAN</h3>
      <div class="timeline">
        <p><strong>2023 – Sekarang | Universitas Teknologi Yogyakarta</strong><br>
        Program Studi Sistem Informasi</p>
        <p>
          Mempelajari pengembangan sistem informasi, analisis kebutuhan bisnis, manajemen proyek TI, serta 
          pemanfaatan teknologi untuk mendukung pengambilan keputusan organisasi.
        </p>
        <p><strong>2019 – 2022 | SMK LETRIS INDONESIA 2</strong><br>
        Jurusan Otomatisasi dan Tata Kelola Perkantoran</p>
        <p>
          Mempelajari administrasi perkantoran, pengelolaan dokumen, pelayanan publik, serta penggunaan aplikasi 
          perkantoran untuk mendukung kegiatan administrasi dan manajemen.
        </p>
      </div>
    </section>

    <section id="pengalaman">
  <h3 class="section-title">PENGALAMAN</h3>
  <div class="timeline">
    <ul>
      <li>
        <strong>Kepanitiaan Koperasi Mahasiswa (KOPMA EXPO FEST)</strong> – Mei – Juni 2025  
        <br>Bertugas di divisi acara, merancang seluruh kegiatan dan mendukung kelancaran kegiatan.
      </li>
      <br>
      <li>
        <strong>Anggota Koperasi Mahasiswa (Divisi Edukasi)</strong> – 2024 – Sekarang  
        <br>Aktif dalam kegiatan kewirausahaan, edukasi, pengembangan koperasi, dan berhasil meraih juara 5 pada 
        acara Lomba Tangkas Terampil.
      </li>
      <br>
      <li>
        <strong>Admin Project (Magang)</strong> – PT Evantama Network System  
        <br>Jan 2021 – Mar 2021 (2 bulan)  
        <br>Mendukung administrasi proyek, pengelolaan dokumen, dan berhasil menyelesaikan project dengan tepat 
        waktu dengan hasil yang baik.
      </li>
      <br>
      <li>
        <strong>Anggota OSIS (Humas)</strong> – SMK Letris Indonesia 2  
        <br>2019 – 2020  
        <br>Bertugas di bidang Hubungan Masyarakat (Humas) dengan tanggung jawab meliputi publikasi dan promosi 
        acara sekolah seperti pentas seni, lomba, dan bakti sosial. Mengatur komunikasi dengan siswa, guru, maupun 
        pihak eksternal untuk kelancaran acara, serta menjaga citra positif OSIS melalui penyampaian informasi 
        yang profesional dan responsif.
      </li>
    </ul>
  </div>

  <h3 class="section-title" style="margin-top: 25px;">KEGIATAN & PARTISIPASI</h3>
  <div class="timeline">
    <div>
      <h4>Panitia Kopma Festival 2025</h4>
      <p>Sebagai panitia <strong>Divisi Acara</strong> dalam kegiatan <em>Kopma Expo Festival</em> yang diselenggarakan oleh UKM Koperasi Mahasiswa Universitas Teknologi Yogyakarta.</p>
    </div>
    <div>
      <h4>Peserta Seminar Nasional 2025</h4>
      <ul>
        <li>Seminar Nasional oleh <strong>Kelompok Studi Pasar Modal</strong> dengan tema <em>"HARD WORK, SMART INVESTING: The Secret to Achieving Financial Freedom!"</em></li>
        <li>Seminar Nasional oleh <strong>Himpunan Mahasiswa Sistem Informasi</strong> dengan tema <em>"Masa Depan Wirausaha dengan Inovasi dan Digital Mindset dalam Bisnis Modern"</em></li>
      </ul>
    </div>
  </div>
</section>
</section>

@endsection
