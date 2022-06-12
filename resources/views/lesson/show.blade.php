@extends('layouts.main')

@section('content')
    <main class="blog-post">
        <div class="container">
            <h1 class="edica-page-title" data-aos="fade-up">{{ $lesson->title }}</h1>
            <section class="blog-post-featured-img" data-aos="fade-up" data-aos-delay="300">
                <img src="{{ asset('storage/' . $lesson->preview_image) }}" alt="featured image" class="w-100">
            </section>
            <section class="post-content">
                <div class="row">
                    <div class="col-lg-9 mx-auto" data-aos="fade-up">
                        <p>{!! $lesson->content !!}</p>
                        <a class="btn btn-block btn-secondary" href="{{ route('lesson.test.index', $lesson->id) }}" style="text-decoration: none; color: #000000;">Перейти к решению теста</a>
                    </div>
                </div>
                <div class="row mb-5">
                </div>
                <div class="row">
                    <div class="col-lg-9 mx-auto">
                    </div>
                </div>
            </section>
            <div class="row">
                <div class="col-lg-9 mx-auto">
                </div>
            </div>
        </div>
    </main>
@endsection
