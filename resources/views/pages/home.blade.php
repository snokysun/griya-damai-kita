@extends('layouts.app')

@section('content')
    <section class="section-white" id="home">
        <h1 class="page-title">RENTAL MOBIL HIACE COMMUTER DAN PREMIO, SEWA TOYOTA HIACE PREMIO 9 SEATS & COMMUTER 15 SEATS DI JAKARTA</h1>
        <p>PT. Griya Damai Kita <a href="tel:081398697123">(+6281398697123)</a> - Jasa sewa Toyota HIACE COMMUTER 15 seats dan PREMIO 9 seats eksekutif di Jakarta. PT. Griya Damai Kita memiliki ijin resmi sebagai penyelenggara angkutan pariwisata dari Kementerian Perhubungan RI.</p>
        <p>Melayani tujuan dalam dan luar kota Jakarta dengan sopir berpengalaman dan armada tahun 2018 dan 2023 yang telah dilengkapi dengan ijin resmi sebagai angkutan pariwisata dan tidak terkena aturan ganjil-genap di Jakarta.</p>
        <p>Cocok untuk antar-jemput bandara, perjalanan wisata, perjalanan bisnis, ziarah, acara dan rekreasi keluarga.</p>
        <img src="{{ asset('images/isuzu_elf.jpg') }}" alt="isuzu elf" style="width:100%;max-width:600px;">
        <img src="{{ asset('images/toyota_hiace.jpg') }}" alt="toyota hiace" style="width:100%;max-width:600px;">
    </section>

    <section class="section-lightblue" id="cara-pemesanan">
        <h1 class="header">Cara Pemesanan</h1>
        <ol>
            <li>Silahkan hubungi no telp kami dibawah dengan memberikan informasi nama, alamat dan jam penjemputan serta no HP atau bila penjemputan di bandara dapat diinformasikan juga flight number.</li>
            <li>Jangan melakukan reservasi melalui sopir kami.</li>
            <li>Melakukan transfer DP sebesar Rp200,000 per hari pemakaian melalui rekening kami:</li>
            <img src="{{ asset('images/qris.jpg') }}" alt="qris" style="width:100%;max-width:600px;">
            <p style = "font-weight : bold";>Bank BCA Cabang Epicentrum Walk No.5055098911 a/n PT. Griya Damai Kita</p>
            <li>Sisa pembayaran dibayarkan cash ke sopirnya setelah mobil datang dimana sopir akan membawa kwitansi resmi.</li>
            <li>DP yang sudah ditransfer tidak dapat dikembalikan bila ada pembatalan dari pihak penyewa.</li>
            <li>Kami tidak melayani pengambilan atau pengantaran barang tanpa didampingi penanggung jawab barang tersebut.</li>
            <li>Kami tidak melayani apabila sopir kami diminta mengaku sebagai profesi lain selain sebagai sopir rental dari Griya Mobil Kita.</li>
        </ol>
    </section>

    <section class="section-white" id="contact">
        <h1 class="header">Reservasi 24 jam</h1>
        <p style= "font-weight: bold;">HP</p>
        <p><a href="tel:081398697123">081398697123</a> ( Telp, WA dan SMS)</p>
        <p style= "font-weight: bold;">Email</p>
        <p><a href="mailto:griyadamaikita@gmail.com">griyadamaikita@gmail.com</a></p>
    </section>

    <section class="section-lightblue" id="office">
        <h1 class="header">Office</h1>
        <p>Apartemen Taman Rasuna  Tower 14 Lantai 4 G01 R(01)</p>
        <p>Jl. HR Rasuna Said – Kuningan</p>
        <p>Jakarta Selatan</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3578092012613!2d106.8337934747505!3d-6.216455693771502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f70be6e141%3A0xad1e96a412be8a2e!2sRental%20Car%20Rental%20Minibus%20Isuzu%20ELF%20in%20Jakarta!5e0!3m2!1sen!2sid!4v1748585230515!5m2!1sen!2sid" width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
@endsection
