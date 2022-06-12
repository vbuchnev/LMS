@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Лекции</h1>
        @auth()
        <section class="featured-posts-section">
            <div class="row">
                @foreach($lessons as $lesson)
                    <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                        <div class="blog-post-thumbnail-wrapper">
                            <img src="{{ 'storage/' . $lesson->preview_image }}" alt="blog post">
                        </div>
                        <p class="blog-post-category">{{ $lesson->course->title }}</p>
                        <a href="#!" class="blog-post-permalink">
                            <h6 class="blog-post-title">{{ $lesson->title }}</h6>
                        </a>
                    </div>
                @endforeach
            </div>
        </section>
        <div class="d-flex justify-content-center">
            {{ $lessons->links() }}
        </div>
        @endauth
        @guest()
            <p class="alert alert-warning">Пожалуйста, авторизуйтесь чтобы продолжить</p>
        @endguest
    </div>

</main>
@endsection
