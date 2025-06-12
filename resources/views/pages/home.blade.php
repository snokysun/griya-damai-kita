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
    <section id="home" class="py-5 text-center">
        <div class="container">
            <h1 class="page-title">{{ $home->title }}</h1>
            <p>{{ $home->content }}</p>

            @if ($home->images)
                <div class="row">
                    @foreach ($home->images as $image)
                        <div class="col-md-4">
                            <img src="{{ asset($image) }}" class="img-fluid" alt="Image">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section id="cara-pemesanan" class="py-5 bg-light">
        <div class="container">
            <h2>{{ $caraPemesanan->title }}</h2>
            <p>{!! nl2br(e($caraPemesanan->content)) !!}</p>

            @if ($caraPemesanan->images)
                @foreach ($caraPemesanan->images as $image)
                    <img src="{{ asset($image) }}" class="img-fluid" alt="QR">
                @endforeach
            @endif
        </div>
    </section>

    <section id="contact" class="py-5">
        <div class="container">
            <h2>{{ $contact->title }}</h2>
            <p>{{ $contact->content }}</p>
        </div>
    </section>

    <section id="office" class="py-5 bg-light">
        <div class="container">
            <h2>{{ $office->title }}</h2>
            <p>{{ $office->content }}</p>
        </div>
    </section>

    <section id="galery" class="py-5">
        <div class="container">
            <h2>{{ $galery->title }}</h2>
            <p>{{ $galery->content }}</p>

            @if ($galery->images)
                <div class="row">
                    @foreach ($galery->images as $image)
                        <div class="col-md-4 mb-3">
                            <img src="{{ asset($image) }}" class="img-fluid" alt="Gallery Image">
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
