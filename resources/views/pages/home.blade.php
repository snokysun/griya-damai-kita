@php
    use App\Models\Section;

    $home = Section::where('slug', 'home')->first();
    $caraPemesanan = Section::where('slug', 'cara-pemesanan')->first();
    $contact = Section::where('slug', 'contact')->first();
    $office = Section::where('slug', 'office')->first();
    $galery = Section::where('slug', 'galery')->first();
@endphp

@extends('layouts.app')

@section('content')
    <section id="home" class="section-white">
        <div class="container">
            <h1 class="page-title">{{ $home->title }}</h1>
            <p>{!! nl2br(e($home->content)) !!}</p>

            @if ($home->images)
                <div class="row">
                    @foreach ($home->images as $image)
                        <div class="col-md-4">
                            <img src="{{ asset($image) }}" class="img-fluid" alt="Image" style="width:100%; max-width:600px;">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section id="cara-pemesanan" class="section-lightblue">
        <div class="container">
            <h2>{{ $caraPemesanan->title }}</h2>
            <ol>
                @foreach (preg_split('/\s*\d+\.\s*/', $caraPemesanan->content, -1, PREG_SPLIT_NO_EMPTY) as $line)
                    <li>{{ $line }}</li>
                @endforeach
            </ol>

            @if ($caraPemesanan->images)
                @foreach ($caraPemesanan->images as $image)
                    <img src="{{ asset($image) }}" class="img-fluid" alt="QR" style="width:100%;max-width:600px;">
                @endforeach
            @endif
        </div>
    </section>

    <section id="contact" class="section-white">
        <div class="container">
            <h2>{{ $contact->title }}</h2>
            <p style= "font-weight: bold;">HP</p>
            <p><a href="tel:081398697123">081398697123</a> ( Telp, WA dan SMS)</p>
            <p style= "font-weight: bold;">Email</p>
            <p><a href="mailto:griyadamaikita@gmail.com">griyadamaikita@gmail.com</a></p>
        </div>
    </section>

    <section id="office" class="section-lightblue">
        <div class="container">
            <h2>{{ $office->title }}</h2>
            <p>{{ $office->content }}</p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3578092012613!2d106.8337934747505!3d-6.216455693771502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3f70be6e141%3A0xad1e96a412be8a2e!2sRental%20Car%20Rental%20Minibus%20Isuzu%20ELF%20in%20Jakarta!5e0!3m2!1sen!2sid!4v1748585230515!5m2!1sen!2sid" width="100%" height="800px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>

    <section id="galery" class="section-white">
        <div class="container">
            <h2>{{ $galery->title }}</h2>
            <p>{{ $galery->content }}</p>

            @if ($galery->images)
                <div class="row">
                    @foreach ($galery->images as $image)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset($image) }}" class="img-fluid" alt="Gallery Image" style="width:100%; max-width:800px;">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
